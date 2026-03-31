#!/bin/bash

# Update slider with different vector images
sed -i "s|<div class=\"hero-slide\" style=\"background-image: url(/images/vector-personal-care.webp);\">|<div class=\"hero-slide\" style=\"background-image: url(/images/vector-dementia-care.webp);\">|2" /home/carebbux/resources/views/pages/home.blade.php

sed -i "s|<div class=\"hero-slide\" style=\"background-image: url(/images/vector-personal-care.webp);\">|<div class=\"hero-slide\" style=\"background-image: url(/images/vector-supported-living.webp);\">|3" /home/carebbux/resources/views/pages/home.blade.php

echo "Slider images updated"
