#!/bin/bash

# Fix logo in master.blade.php
sed -i "s|/images/caregroove-logo.png|/images/caregroove-logo.jpeg|g" /home/carebbux/resources/views/layouts/master.blade.php
sed -i "s|/images/caregroove-logo.jpeg|/images/vector-personal-care.webp|g" /home/carebbux/resources/views/layouts/master.blade.php

# Replace all JPG/JPEG/PNG references with vector equivalents in all blade files
find /home/carebbux/resources/views -name "*.blade.php" -type f -exec sed -i \
  -e "s|elderly-care\.jpg|vector-personal-care.webp|g" \
  -e "s|dementia-care\.jpg|vector-dementia-care.webp|g" \
  -e "s|live-in\.jpg|vector-live-in-care.webp|g" \
  -e "s|overnight-care\.jpg|vector-overnight-care.webp|g" \
  -e "s|palliative-care\.jpg|vector-palliative-care.webp|g" \
  -e "s|hospital-discharge\.jpg|vector-hospital-discharge.webp|g" \
  -e "s|visiting-care\.jpg|vector-visiting-care.webp|g" \
  -e "s|respite-care\.jpg|vector-respite-care.webp|g" \
  -e "s|domestic-care\.jpg|vector-domestic-care.webp|g" \
  -e "s|mental-health\.jpg|vector-mental-health.webp|g" \
  -e "s|epilepsy\.jpg|vector-epilepsy.webp|g" \
  {} \;

echo "All images updated to vectors"
