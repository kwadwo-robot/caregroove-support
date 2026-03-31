<?php
/**
 * Laravel CareGroove - Simple Deployment Script
 * Place this file in public_html and access via browser
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);
set_time_limit(600);
ini_set('memory_limit', '512M');

$webRoot = dirname(__FILE__);
$parentDir = dirname($webRoot);
$downloadUrl = 'https://files.manuscdn.com/user_upload_by_module/session_file/310519663431548268/jKFCwRwNmOwIdvDb.gz';
$tarFile = $parentDir . '/laravel-app.tar.gz';
$tempDir = $parentDir . '/temp_extract_' . time();

echo "<!DOCTYPE html>
<html>
<head>
    <title>Laravel Deployment</title>
    <style>
        body { font-family: monospace; background: #f5f5f5; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 20px; border-radius: 5px; }
        .status { margin: 10px 0; padding: 10px; background: #e8f5e9; border-left: 4px solid #4caf50; }
        .error { background: #ffebee; border-left-color: #f44336; }
        .warning { background: #fff3e0; border-left-color: #ff9800; }
        h1 { color: #333; }
        pre { background: #f9f9f9; padding: 10px; overflow-x: auto; }
    </style>
</head>
<body>
<div class='container'>
<h1>🚀 Laravel CareGroove Deployment</h1>";

function log_status($msg, $type = 'status') {
    global $output;
    $class = ($type === 'error') ? 'error' : (($type === 'warning') ? 'warning' : 'status');
    echo "<div class='$class'>$msg</div>";
    flush();
}

try {
    log_status("[1/5] Downloading Laravel application...");
    
    if (!is_writable($parentDir)) {
        throw new Exception("Parent directory is not writable: $parentDir");
    }
    
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
        throw new Exception("Cannot create file: $tarFile");
    }
    
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    fclose($fp);
    
    if ($httpCode !== 200 || !file_exists($tarFile)) {
        throw new Exception("Download failed (HTTP $httpCode)");
    }
    
    $size = filesize($tarFile) / (1024 * 1024);
    log_status("✓ Downloaded successfully (" . round($size, 2) . " MB)");
    
    log_status("[2/5] Creating temporary directory...");
    if (!@mkdir($tempDir, 0755, true)) {
        throw new Exception("Cannot create temp directory: $tempDir");
    }
    log_status("✓ Temporary directory created");
    
    log_status("[3/5] Extracting archive...");
    $cmd = "cd '$tempDir' && tar -xzf '$tarFile' 2>&1";
    exec($cmd, $output, $return);
    
    if ($return !== 0) {
        throw new Exception("Extraction failed: " . implode("\n", $output));
    }
    log_status("✓ Archive extracted");
    
    log_status("[4/5] Organizing files...");
    
    // Clear public_html except this script
    $files = @scandir($webRoot);
    if ($files) {
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..' && $file !== 'deploy.php' && $file !== '.htaccess') {
                $path = $webRoot . '/' . $file;
                if (is_dir($path)) {
                    exec("rm -rf '$path'");
                } else {
                    @unlink($path);
                }
            }
        }
    }
    
    // Copy public folder to web root
    if (is_dir($tempDir . '/public')) {
        exec("cp -r '$tempDir'/public/* '$webRoot/' 2>&1");
    }
    
    // Move Laravel directories to parent
    $dirs = ['app', 'bootstrap', 'config', 'database', 'resources', 'routes', 'storage', 'vendor', 'tests'];
    foreach ($dirs as $dir) {
        if (is_dir($tempDir . '/' . $dir)) {
            if (is_dir($parentDir . '/' . $dir)) {
                exec("rm -rf '$parentDir/$dir'");
            }
            exec("mv '$tempDir/$dir' '$parentDir/$dir'");
        }
    }
    
    // Copy config files
    $files = ['artisan', 'composer.json', 'composer.lock', '.env.example', '.gitignore'];
    foreach ($files as $file) {
        if (file_exists($tempDir . '/' . $file)) {
            if (file_exists($parentDir . '/' . $file)) {
                @unlink($parentDir . '/' . $file);
            }
            exec("cp '$tempDir/$file' '$parentDir/$file'");
        }
    }
    
    log_status("✓ Files organized");
    
    log_status("[5/5] Setting permissions...");
    exec("chmod -R 755 '$webRoot'");
    exec("chmod -R 755 '$parentDir/app'");
    exec("chmod -R 755 '$parentDir/bootstrap'");
    exec("chmod -R 755 '$parentDir/config'");
    exec("chmod -R 755 '$parentDir/resources'");
    exec("chmod -R 755 '$parentDir/routes'");
    exec("chmod -R 777 '$parentDir/storage'");
    exec("chmod -R 777 '$parentDir/bootstrap/cache'");
    log_status("✓ Permissions set");
    
    // Cleanup
    @unlink($tarFile);
    exec("rm -rf '$tempDir'");
    
    log_status("<strong>✓ DEPLOYMENT SUCCESSFUL!</strong>", 'status');
    log_status("Next steps:<br>1. Create .env file from .env.example<br>2. Set APP_KEY<br>3. Configure database<br>4. Run: php artisan migrate", 'warning');
    
} catch (Exception $e) {
    log_status("ERROR: " . $e->getMessage(), 'error');
}

echo "</div>
</body>
</html>";
?>
