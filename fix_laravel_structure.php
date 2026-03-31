<?php
/**
 * Laravel Structure Fix Script
 * This script reorganizes Laravel files from public_html to proper directories
 * Run this from browser: https://caregroovesupport.co.uk/fix_laravel_structure.php
 */

$webRoot = '/home/carebbux/public_html';
$parentDir = '/home/carebbux';

echo "<pre style='font-family: monospace; background: #f5f5f5; padding: 20px;'>";
echo "=== Laravel Directory Structure Fix ===\n\n";

// Step 1: Move Laravel app directories to parent
echo "[1/3] Moving Laravel app directories to parent...\n";
$appDirs = ['app', 'bootstrap', 'config', 'database', 'resources', 'routes', 'storage', 'vendor', 'tests'];

foreach ($appDirs as $dir) {
    $src = $webRoot . '/' . $dir;
    $dst = $parentDir . '/' . $dir;
    
    if (is_dir($src)) {
        // Remove destination if it exists
        if (is_dir($dst)) {
            exec("rm -rf '$dst' 2>&1");
        }
        // Move source to destination
        if (rename($src, $dst)) {
            echo "  ✓ Moved $dir/\n";
        } else {
            echo "  ✗ Failed to move $dir/\n";
        }
    }
}
echo "\n";

// Step 2: Move Laravel config files to parent
echo "[2/3] Moving Laravel config files to parent...\n";
$configFiles = ['artisan', 'composer.json', 'composer.lock', 'package.json', '.env', '.env.example', '.editorconfig', '.gitattributes', '.gitignore', 'README.md', 'phpunit.xml', 'vite.config.js'];

foreach ($configFiles as $file) {
    $src = $webRoot . '/' . $file;
    $dst = $parentDir . '/' . $file;
    
    if (file_exists($src)) {
        if (rename($src, $dst)) {
            echo "  ✓ Moved $file\n";
        } else {
            echo "  ✗ Failed to move $file\n";
        }
    }
}
echo "\n";

// Step 3: Verify public folder contents
echo "[3/3] Verifying public folder contents...\n";
$publicContents = scandir($webRoot);
$publicFiles = array_diff($publicContents, ['.', '..']);

if (!empty($publicFiles)) {
    echo "  ✓ Public folder contains:\n";
    foreach ($publicFiles as $item) {
        $type = is_dir($webRoot . '/' . $item) ? '[DIR]' : '[FILE]';
        echo "    $type $item\n";
    }
} else {
    echo "  ⚠ Public folder is empty!\n";
}

echo "\n=== Fix Complete ===\n";
echo "✓ Laravel structure has been reorganized!\n";
echo "\nDirectory structure:\n";
echo "  /home/carebbux/public_html/  <- Web root (public files)\n";
echo "  /home/carebbux/app/          <- Laravel app code\n";
echo "  /home/carebbux/config/       <- Configuration\n";
echo "  /home/carebbux/resources/    <- Views, assets\n";
echo "  /home/carebbux/routes/       <- Route definitions\n";
echo "  /home/carebbux/storage/      <- Storage files\n";
echo "  /home/carebbux/vendor/       <- Dependencies\n";
echo "\nNext: Delete this file and test the website.\n";
echo "</pre>";
?>
