<?php
$file = $_GET['file'] ?? null;
if (!$file) {
    die("File not specified.");
}

$processedDir = '/Applications/XAMPP/xamppfiles/htdocs/PHP/InClass-6/';
$filePath = $processedDir . $file;

// Check if the file exists
if (!file_exists($filePath)) {
    die("File not found.");  //Die is like an exit in PHP
}

// Display file content
echo "<h2>Review File Content</h2>";
echo "<pre>" . htmlspecialchars(file_get_contents($filePath)) . "</pre>";

// Provide a download link
echo '<a href="download.php?file=' . urlencode($file) . '">Download Processed File</a>';
