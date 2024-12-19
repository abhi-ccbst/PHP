<?php
$file = $_GET['file'] ?? null;
if (!$file) {
    die("File not specified.");
}

$processedDir = '/Applications/XAMPP/xamppfiles/htdocs/PHP/InClass-6/';
$filePath = $processedDir . $file;

// Check if the file exists
if (!file_exists($filePath)) {
    die("File not found.");
}

// Serve the file for download
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
header('Content-Length: ' . filesize($filePath));
readfile($filePath);

?>
