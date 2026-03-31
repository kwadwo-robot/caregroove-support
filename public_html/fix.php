<?php
// Simple restoration script
$file = '/home/carebbux/resources/views/layouts/master.blade.php';
$content = file_get_contents('/home/ubuntu/caregroove/resources/views/layouts/master.blade.php');
if (file_put_contents($file, $content)) {
    echo "✓ Site restored!";
    unlink(__FILE__);
} else {
    echo "✗ Failed!";
}
?>
