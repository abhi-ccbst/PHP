<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure the uploads and processed directories exist
    $uploadDir = '/Applications/XAMPP/xamppfiles/htdocs/PHP/InClass-6/original/';
    $processedDir = '/Applications/XAMPP/xamppfiles/htdocs/PHP/InClass-6/';
    
    // Check if a file was uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

        // Validate the file type
        if ($fileExtension !== 'txt') {
            die("Only .txt files are allowed.");
        }

        // Move the uploaded file to the uploads directory
        $uploadedFilePath = $uploadDir . $fileName;
        if (!move_uploaded_file($fileTmpPath, $uploadedFilePath)) {
            die("Failed to save the uploaded file.");
        }

        // Process the file (e.g., append content)
        $processedFilePath = $processedDir . $fileName;
        
        $content = file_get_contents($uploadedFilePath);
        $content .= "\n\n--- Processed by Backend ---\nUpdated by: Abhi ";
        file_put_contents($processedFilePath, $content);

        // Redirect to review page
        header("Location: review.php?file=" . urlencode($fileName));
        exit;
    } else {
        die("No file uploaded or upload error.");
    }
}
?>
