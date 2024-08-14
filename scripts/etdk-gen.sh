#!/bin/bash
set -eou pipefail

if [ ! -f ./etsy-v3.json ]; then
  curl https://www.etsy.com/openapi/generated/oas/3.0.0.json |
    jq 'del(.paths."/v3/application/users/me")' |
    jq 'del(.components.schemas.Self)' >./etsy-v3.json
else
  echo "etsy-v3.json already exists. Skipping download."
fi
sdkgenerator generate:sdk ./etsy-v3.json \
  --type=openapi --name EtsySdk \
  --output="../src" \
  --namespace=Hdecom\\EtsySdk --force
