Multi‑Repo, One Cloudflare Tunnel
=================================

Goal
----
Run one Cloudflare Tunnel on your host and route multiple domains to services that live in separate repos and are versioned/pulled from Artifact Registry (gcloud).

Recommended layout
------------------
- infra repo (e.g., cloudflared-infra)
  - `docker-compose.yml`: runs only `cloudflared`
  - `cloudflared/config.yml`: maps hostnames → internal services
  - `cloudflared/credentials.json`: tunnel creds (uncommitted)
  - joins external Docker network `edge`
- app repos (this repo, infinitecraftgraph, cognifiq.dev, etc.)
  - each has its own Dockerfile and compose for local dev
  - services join the same external Docker network `edge`
  - CI builds image → Artifact Registry; prod compose is optional

Why this pattern
----------------
- Decoupled deploys: Each app ships its own image independently.
- Central routing: Only the infra repo updates hostnames/routes.
- No port juggling: Services communicate by name on the `edge` network.

External network
----------------
Create once on the host:
- `docker network create edge`

This repo already attaches `web` (PHP Apache) to `edge`.

Infra repo example
------------------
Folder structure:
- cloudflared-infra/
  - docker-compose.yml
  - cloudflared/
    - config.yml
    - credentials.json  (do not commit)

docker-compose.yml:
```
version: "3.9"
services:
  cloudflared:
    image: cloudflare/cloudflared:latest
    container_name: cloudflared
    restart: unless-stopped
    command: tunnel --no-autoupdate run home-origin
    volumes:
      - ./cloudflared:/etc/cloudflared:ro
    extra_hosts:
      - "host.docker.internal:host-gateway"
    networks:
      - edge
networks:
  edge:
    external: true
```

cloudflared/config.yml:
```
tunnel: home-origin
credentials-file: /etc/cloudflared/credentials.json

ingress:
  - hostname: stevenwerner.me
    service: http://namesite-web:80
  - hostname: stevenwerner.name
    service: http://namesite-web:80
  - hostname: stevenwernercs.com
    service: http://namesite-web:80

  - hostname: cognifiq.dev
    service: http://cognifiq:80
  - hostname: infinitecraftgraph.com
    service: http://infinitecraftgraph:3000

  - service: http_status:404
```

Note: Use the container names that will be visible on the `edge` network. For this repo we set `container_name: namesite-web`.

App repo patterns
-----------------
1) Run locally (already supported here):
- `./bin/up` (runs local cloudflared via token profile) or just the web service.

2) Build and push to Artifact Registry:
- Create an Artifact Registry repo (once):
  - `gcloud artifacts repositories create web --repository-format=docker --location=us --description="web images"`
- Authenticate Docker:
  - `gcloud auth configure-docker us-docker.pkg.dev`
- Build and push (example):
  - `docker build -t us-docker.pkg.dev/PROJECT_ID/web/namesite:$(git rev-parse --short HEAD) .`
  - `docker push us-docker.pkg.dev/PROJECT_ID/web/namesite:$(git rev-parse --short HEAD)`

Bitbucket Pipelines example
---------------------------
bitbucket-pipelines.yml:
```
image: gcr.io/google.com/cloudsdktool/cloud-sdk:slim

pipelines:
  branches:
    main:
      - step:
          name: Build and Push
          services: [docker]
          script:
            - echo $GCLOUD_SA_KEY | base64 -d > /tmp/key.json
            - gcloud auth activate-service-account --key-file=/tmp/key.json
            - gcloud auth configure-docker us-docker.pkg.dev -q
            - TAG=$(git rev-parse --short HEAD)
            - IMAGE=us-docker.pkg.dev/$PROJECT_ID/web/infinitecraftgraph:$TAG
            - docker build -t $IMAGE .
            - docker push $IMAGE
definitions:
  services:
    docker:
      memory: 4096
```
Repo variables/secrets to set in Bitbucket:
- `PROJECT_ID`: your GCP project id
- `GCLOUD_SA_KEY`: base64-encoded JSON key for a minimal Artifact Registry pusher account

Consuming images in infra (optional)
-----------------------------------
Instead of each app repo running its own compose, the infra repo can pull tagged images and run them:
```
services:
  namesite-web:
    image: us-docker.pkg.dev/PROJECT_ID/web/namesite:abcdef1
    container_name: namesite-web
    restart: unless-stopped
    networks: [edge]
  infinitecraftgraph:
    image: us-docker.pkg.dev/PROJECT_ID/web/infinitecraftgraph:abcdef2
    container_name: infinitecraftgraph
    restart: unless-stopped
    networks: [edge]
```
Then update tags and run `docker compose pull && docker compose up -d` to deploy.

Cross‑stack approach (preferred for autonomy)
--------------------------------------------
Keep each app stack in its own repo and attach services to the external `edge` network. The infra/cloudflared stack routes by hostname and needs no change when apps update; only when you add or change hostnames.

