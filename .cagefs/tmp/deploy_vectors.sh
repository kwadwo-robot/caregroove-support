#!/bin/bash

# Vector images to copy
IMAGES=(
    "dementia-care"
    "domestic-care"
    "epilepsy"
    "hospital-discharge"
    "live-in-care"
    "mental-health"
    "overnight-care"
    "palliative-care"
    "personal-care"
    "respite-care"
    "supported-living"
    "visiting-care"
)

echo "Deploying vector images..."

for image in "${IMAGES[@]}"; do
    SOURCE="/home/carebbux/resources/public/images/vector-$image.png"
    DEST="/home/carebbux/public_html/images/$image.png"
    
    if [ -f "$SOURCE" ]; then
        cp "$SOURCE" "$DEST"
        echo "✓ Copied: $image.png"
    else
        echo "✗ Source not found: $SOURCE"
    fi
done

echo "Deployment complete!"
