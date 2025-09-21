Cloudflare Tunnel (cloudflared) + Docker
=======================================

This repo includes a minimal Docker setup to host the PHP site locally and expose it securely via Cloudflare Tunnel under your domain.

Prerequisites
-------------
- Domain `stevenwerner.me` on Cloudflare (nameservers set).
- Docker + Docker Compose installed on the host.
- Cloudflare Zero Trust (free tier works) access to create a tunnel.

Steps
-----
1) Create a Named Tunnel in Cloudflare
- Go to Cloudflare Dashboard → Zero Trust → Networks → Tunnels.
- Create tunnel (e.g., name: "namesite").
- Select Docker as the connector; copy the provided `--token` value.

2) Map your hostname in the Tunnel
- In the same Tunnel, add a Public Hostname:
  - Hostname: `stevenwerner.me` (and optionally `www.stevenwerner.me`).
  - Service: `http://web:80`
  - Save. Cloudflare will manage the DNS record automatically for the zone.

3) Configure local environment
- Copy `.env.example` to `.env` and paste your token:
  - `CLOUDFLARED_TOKEN=...`

4) Start containers
- `docker compose up -d`
- Local test: http://localhost:8080

Notes
-----
- Apache + PHP: This uses `php:8.2-apache` and mounts the repo read-only into `/var/www/html`.
- `.htaccess`: The existing `.htaccess` contains legacy AddHandler lines. With mod_php they are not required; if you see 500 errors, try temporarily renaming `.htaccess` or removing the AddHandler directives.
- TLS: Cloudflare terminates HTTPS at the edge; traffic from Cloudflare to your container runs inside the tunnel and does not require local TLS.
- Updates: Edit files and refresh—changes reflect immediately since the volume is mounted read-only into the container.

Stop / Remove
-------------
- Stop: `docker compose down`
- Restart after changes: `docker compose up -d`


Use One Tunnel For Many Sites
-----------------------------
You can point multiple domains/hostnames to the same tunnel.

Option A: Token-based (simple). Manage routes in the Cloudflare Dashboard.
- Keep the current `cloudflared` command that uses `${CLOUDFLARED_TOKEN}`.
- In Zero Trust → Tunnels → your tunnel → Public Hostnames, add entries like:
  - `stevenwerner.me` → `http://web:80`
  - `stevenwerner.name` → `http://web:80`
  - `stevenwernercs.com` → `http://web:80`
  - `cognifiq.dev` → `http://cognifiq:80` (when that service exists)
  - `infinitecraftgraph.com` → `http://infinitecraftgraph:3000`

Option B: Named Tunnel with local `config.yml` (advanced, git-manageable)
- Authenticate once (`cloudflared tunnel login`), then create a named tunnel:
  - `cloudflared tunnel create home-origin` → saves a credentials JSON.
- Place the credentials JSON in `cloudflared/credentials.json` (do not commit it).
- Copy `cloudflared/config.yml.example` to `cloudflared/config.yml` and adjust hostnames/services.
- Update docker-compose to run the named tunnel instead of token (uncomment/replace command):
  - `command: tunnel --no-autoupdate run home-origin`
- Ensure the `./cloudflared` folder is mounted (already configured) so cloudflared sees `config.yml` and `credentials.json` at `/etc/cloudflared`.

Notes for multi-site
- Same account: All domains must be in the same Cloudflare account to attach hostnames to the tunnel.
- Service targets: Use Docker service names on the same `namesite` network (e.g., `http://web:80`, `http://cognifiq:80`).
- Host services: If you must reach apps on the host, use `http://host.docker.internal:PORT` (compose includes an entry for this).
- Static files: If using the `file://` origin, mount your static folder into the container, e.g., `./sites/static:/sites/static:ro`.

Helper Script
-------------
- Use `bin/up` to fetch the tunnel token from Google Secret Manager and start the stack:
  - `./bin/up`
- Or set the env manually:
  - `export CLOUDFLARED_TOKEN=$(gcloud secrets versions access latest --secret=CLOUDFLARED_HOME_ORIGIN_TUNNEL_TOKEN)`
  - `docker compose up -d`
