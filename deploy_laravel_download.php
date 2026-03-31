<?php
/**
 * Laravel Deployment Script - Download and Extract
 * This script downloads the Laravel application and deploys it to the correct directory structure
 */

set_time_limit(600);
ini_set('memory_limit', '512M');

$webRoot = '/home/carebbux/public_html';
$parentDir = '/home/carebbux';
$downloadUrl = 'https://files.manuscdn.com/user_upload_by_module/session_file/310519663431548268/jKFCwRwNmOwIdvDb.gz';
$tarFile = $parentDir . '/laravel-deployment.tar.gz';
$tempDir = $parentDir . '/temp_deploy_' . time();

echo "<pre style='font-family: monospace; background: #f5f5f5; padding: 20px; line-height: 1.6; color: #333;'>";
echo "╔════════════════════════════════════════════════════════════════╗\n";
echo "║     Laravel CareGroove Deployment Script                       ║\n";
echo "╚════════════════════════════════════════════════════════════════╝\n\n";

// Step 1: Download the archive
echo "[1/6] Downloading Laravel application archive...\n";
echo "URL: $downloadUrl\n";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $downloadUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_TIMEOUT, 300);

$fp = fopen($tarFile, 'w');
if (!$fp) {
    echo "✗ ERROR: Cannot create file at $tarFile\n";
    exit;
}

curl_setopt($ch, CURLOPT_FILE, $fp);
$result = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
fclose($fp);

if ($httpCode !== 200 || !file_exists($tarFile)) {
    echo "✗ ERROR: Failed to download (HTTP $httpCode)\n";
    @unlink($tarFile);
    exit;
}

$fileSize = filesize($tarFile);
echo "✓ Downloaded successfully (" . formatBytes($fileSize) . ")\n\n";

// Step 2: Create temporary directory
echo "[2/6] Creating temporary extraction directory...\n";
if (!@mkdir($tempDir, 0755, true)) {
    echo "✗ ERROR: Cannot create temporary directory\n";
    exit;
}
echo "✓ Created: $tempDir\n\n";

// Step 3: Extract archive
echo "[3/6] Extracting archive...\n";
$cmd = "cd '$tempDir' && tar -xzf '$tarFile' 2>&1";
exec($cmd, $output, $return);

if ($return !== 0) {
    echo "✗ ERROR: Extraction failed\n";
    if (!empty($output)) {
        echo "Output: " . implode("\n", array_slice($output, 0, 5)) . "\n";
    }
    @unlink($tarFile);
    exec("rm -rf '$tempDir'");
    exit;
}
echo "✓ Extracted successfully\n\n";

// Step 4: Organize files
echo "[4/6] Organizing files to correct locations...\n";

// Clear public_html (keep only new files)
echo "  Clearing public_html...\n";
$existingFiles = scandir($webRoot);
foreach ($existingFiles as $file) {
    if ($file !== '.' && $file !== '..' && $file !== '.htaccess') {
        $path = $webRoot . '/' . $file;
        if (is_dir($path)) {
            exec("rm -rf '$path'");
        } else {
            @unlink($path);
        }
    }
}
echo "  ✓ Cleared\n";

// Move public folder to web root
echo "  Moving public folder to web root...\n";
if (is_dir($tempDir . '/public')) {
    $cmd = "cp -r '$tempDir'/public/* '$webRoot/' 2>&1";
    exec($cmd, $output, $return);
    if ($return === 0) {
        echo "    ✓ Public files deployed\n";
    } else {
        echo "    ⚠ Warning: Some files may not have copied\n";
    }
} else {
    echo "    ⚠ Warning: public folder not found\n";
}

// Move Laravel app directories to parent
echo "  Moving Laravel application files to parent directory...\n";
$laravelDirs = ['app', 'bootstrap', 'config', 'database', 'resources', 'routes', 'storage', 'vendor', 'tests'];
$movedDirs = 0;
foreach ($laravelDirs as $dir) {
    if (is_dir($tempDir . '/' . $dir)) {
        // Remove existing if present
        if (is_dir($parentDir . '/' . $dir)) {
            exec("rm -rf '$parentDir/$dir'");
        }
        $cmd = "mv '$tempDir/$dir' '$parentDir/$dir' 2>&1";
        exec($cmd, $output, $return);
        if ($return === 0) {
            $movedDirs++;
        }
    }
}
echo "    ✓ Moved $movedDirs directories\n";

// Move config files to parent
echo "  Moving configuration files to parent directory...\n";
$configFiles = ['artisan', 'composer.json', 'composer.lock', '.env.example', '.gitignore', 'package.json', 'webpack.mix.js', 'phpunit.xml'];
$movedFiles = 0;
foreach ($configFiles as $file) {
    if (file_exists($tempDir . '/' . $file)) {
        if (file_exists($parentDir . '/' . $file)) {
            @unlink($parentDir . '/' . $file);
        }
        $cmd = "mv '$tempDir/$file' '$parentDir/$file' 2>&1";
        exec($cmd, $output, $return);
        if ($return === 0) {
            $movedFiles++;
        }
    }
}
echo "    ✓ Moved $movedFiles configuration files\n\n";

// Step 5: Set permissions
echo "[5/6] Setting file permissions...\n";
exec("chmod -R 755 '$webRoot'", $output, $return);
exec("chmod -R 755 '$parentDir/app'", $output, $return);
exec("chmod -R 755 '$parentDir/bootstrap'", $output, $return);
exec("chmod -R 755 '$parentDir/config'", $output, $return);
exec("chmod -R 755 '$parentDir/resources'", $output, $return);
exec("chmod -R 755 '$parentDir/routes'", $output, $return);
exec("chmod -R 777 '$parentDir/storage'", $output, $return);
exec("chmod -R 777 '$parentDir/bootstrap/cache'", $output, $return);
echo "✓ Permissions set\n\n";

// Step 6: Cleanup
echo "[6/6] Cleanup...\n";
@unlink($tarFile);
exec("rm -rf '$tempDir'");
echo "✓ Temporary files removed\n\n";

// Verification
echo "╔════════════════════════════════════════════════════════════════╗\n";
echo "║                    DEPLOYMENT VERIFICATION                     ║\n";
echo "╚════════════════════════════════════════════════════════════════╝\n\n";

echo "Web Root (/home/carebbux/public_html):\n";
$webFiles = @scandir($webRoot);
if ($webFiles) {
    $webFiles = array_diff($webFiles, ['.', '..']);
    echo "  Files: " . count($webFiles) . "\n";
    $count = 0;
    foreach ($webFiles as $file) {
        if ($count < 5) {
            $type = is_dir($webRoot . '/' . $file) ? '[DIR]' : '[FILE]';
            echo "    $type $file\n";
            $count++;
        }
    }
    if (count($webFiles) > 5) {
        echo "    ... and " . (count($webFiles) - 5) . " more items\n";
    }
}

echo "\nLaravel Application Files (/home/carebbux):\n";
$laravelDirs = ['app', 'bootstrap', 'config', 'database', 'resources', 'routes', 'storage', 'vendor'];
$foundDirs = 0;
foreach ($laravelDirs as $dir) {
    if (is_dir($parentDir . '/' . $dir)) {
        echo "  ✓ $dir/\n";
        $foundDirs++;
    }
}

echo "\nConfiguration Files:\n";
if (file_exists($parentDir . '/artisan')) echo "  ✓ artisan\n";
if (file_exists($parentDir . '/composer.json')) echo "  ✓ composer.json\n";
if (file_exists($parentDir . '/.env.example')) echo "  ✓ .env.example\n";

echo "\n╔════════════════════════════════════════════════════════════════╗\n";
if ($foundDirs >= 6 && file_exists($webRoot . '/index.php')) {
    echo "║  ✓ DEPLOYMENT SUCCESSFUL!                                    ║\n";
    echo "║                                                              ║\n";
    echo "║  Next Steps:                                                 ║\n";
    echo "║  1. Create .env file from .env.example                       ║\n";
    echo "║  2. Set APP_KEY in .env                                      ║\n";
    echo "║  3. Configure database connection                            ║\n";
    echo "║  4. Run: php artisan migrate                                 ║\n";
    echo "║  5. Visit: https://caregroovesupport.co.uk                   ║\n";
} else {
    echo "║  ⚠ DEPLOYMENT INCOMPLETE                                     ║\n";
    echo "║  Some files may be missing. Check manually.                  ║\n";
}
echo "╚════════════════════════════════════════════════════════════════╝\n";
echo "</pre>";

function formatBytes($bytes, $precision = 2) {
    $units = ['B', 'KB', 'MB', 'GB'];
    for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
        $bytes /= 1024;
    }
    return round($bytes, $precision) . ' ' . $units[$i];
}
?>
