#!/usr/bin/env bash
set -euo pipefail

# Build and push namesite image to Artifact Registry
# Requires env: GCP_PROJECT_ID, AR_REGION, AR_REPO

if [[ -z "${GCP_PROJECT_ID:-}" || -z "${AR_REGION:-}" || -z "${AR_REPO:-}" ]]; then
  echo "Set GCP_PROJECT_ID, AR_REGION, and AR_REPO in your environment." >&2
  exit 1
fi

REG_HOST="${AR_REGION}-docker.pkg.dev"
IMAGE_BASE="${REG_HOST}/${GCP_PROJECT_ID}/${AR_REPO}/namesite"

branch_or_tag=$(git rev-parse --abbrev-ref HEAD)
if [[ "$branch_or_tag" == "HEAD" ]]; then
  branch_or_tag=$(git describe --tags --exact-match 2>/dev/null || echo "detached")
fi
branch_or_tag=${branch_or_tag//\//-}
short_sha=$(git rev-parse --short HEAD)
build_ref="${branch_or_tag}.${short_sha}"

tag_latest="${branch_or_tag}.latest"
tag_sha="${branch_or_tag}.${short_sha}"

echo "Building ${IMAGE_BASE}:{${tag_latest},${tag_sha}} (BUILD_REF=${build_ref})"

docker build \
  --build-arg BUILD_REF="$build_ref" \
  -t "${IMAGE_BASE}:${tag_latest}" -t "${IMAGE_BASE}:${tag_sha}" .

echo "Pushing ${IMAGE_BASE}:${tag_latest}"
docker push "${IMAGE_BASE}:${tag_latest}"
echo "Pushing ${IMAGE_BASE}:${tag_sha}"
docker push "${IMAGE_BASE}:${tag_sha}"

echo "Done: ${IMAGE_BASE}:${tag_latest} and ${IMAGE_BASE}:${tag_sha}"
