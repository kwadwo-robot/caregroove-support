<?php
$file = /home/carebbux/routes/web.php;
$content = file_get_contents($file);
$bad_line = "Route::get(/services/supported-living, [PageController::class, supportedLiving])->name(services.supported-living);";
$good_line = "Route::get(/services/supported-living, [PageController::class, supportedLiving])->name(services.supported-living);";
$content = str_replace($bad_line, $good_line, $content);
file_put_contents($file, $content);
echo "Fixed!";
?>
