#!/bin/bash
set -euo pipefail

export payload=$(printf '{
  "title": "Tugboat Preview: %s (%s)",
  "url": "%s"
}' $TUGBOAT_PREVIEW_NAME $TUGBOAT_PREVIEW_REF $TUGBOAT_DEFAULT_SERVICE_URL)

curl -H "Authorization: Bearer $PUNCHLIST_TOKEN" \
  -d "$payload" \
  https://app.punchli.st/api/v1/projects/$PUNCHLIST_PROJECT/pages