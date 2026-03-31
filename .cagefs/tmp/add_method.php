<?php
$file = '/home/carebbux/app/Http/Controllers/PageController.php';
$content = file_get_contents($file);

// Find the last closing brace of the class
$lastBrace = strrpos($content, '}');
$beforeLastBrace = substr($content, 0, $lastBrace);

// Add the supportedLiving method before the last closing brace
$newMethod = "\n    public function supportedLiving()\n    {\n        return view('pages.services.supported-living');\n    }\n";

$newContent = $beforeLastBrace . $newMethod . '}';

file_put_contents($file, $newContent);
echo "Supported Living method added successfully\n";
?>
