#!/bin/bash
# Update home.blade.php to use vector images

cd /home/carebbux/resources/views/pages/

# Replace Personal Care image
sed -i "s|/images/Y5rjK4iIHncG.jpeg|/images/vector-personal-care.webp|g" home.blade.php

# Replace Dementia Care image
sed -i "s|/images/aMYEBOI4KpAj.jpeg|/images/vector-dementia-care.webp|g" home.blade.php

# Replace Live-In Care image
sed -i "s|/images/eIRIeO92fErJ.jpeg|/images/vector-live-in-care.webp|g" home.blade.php

# Replace Respite Care image  
sed -i "s|/images/bAkXpuStcNBT.jpeg|/images/vector-respite-care.webp|g" home.blade.php

# Replace Palliative Care image
sed -i "s|/images/cKQMZnozVADj.jpg|/images/vector-palliative-care.webp|g" home.blade.php

# Replace Hospital Discharge image
sed -i "s|/images/VwDrqtAJr4RD.jpg|/images/vector-hospital-discharge.webp|g" home.blade.php

echo "Home page updated with vector images"
