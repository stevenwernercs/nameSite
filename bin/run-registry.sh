#!/usr/bin/env bash
set -euo pipefail

# Runs the image from Artifact Registry using the current branch's latest tag.
# Requires env: GCP_PROJECT_ID, AR_REGION, AR_REPO

if [[ -z "${GCP_PROJECT_ID:-}" || -z "${AR_REGION:-}" || -z "${AR_REPO:-}" ]]; then
  echo "Set GCP_PROJECT_ID, AR_REGION, and AR_REPO in your environment." >&2
  exit 1
fi

branch_or_tag=$(git rev-parse --abbrev-ref HEAD)
if [[ "$branch_or_tag" == "HEAD" ]]; then
  branch_or_tag=$(git describe --tags --exact-match 2>/dev/null || echo "detached")
fi
branch_or_tag=${branch_or_tag//\//-}

export TAG_CHANNEL="${branch_or_tag}.latest"

choose_dc() {
  if docker compose version >/dev/null 2>&1; then
    echo "docker compose"; return
  fi
  if command -v docker.exe >/dev/null 2>&1 && docker.exe compose version >/dev/null 2>&1; then
    echo "docker.exe compose"; return
  fi
  if command -v docker-compose >/dev/null 2>&1 && docker-compose version >/dev/null 2>&1; then
    echo "docker-compose"; return
  fi
  echo ""
}
DC=$(choose_dc)
if [[ -z "$DC" ]]; then
  echo "Docker Compose not available. Enable Docker Desktop WSL2 integration or install the compose plugin (sudo apt-get install docker-compose-plugin)." >&2
  exit 1
fi

echo "Ensuring external network 'edge' exists..."
docker network create edge >/dev/null 2>&1 || true

echo "Running namesite with tag ${TAG_CHANNEL}"
$DC -f docker-compose.registry.yml up -d
