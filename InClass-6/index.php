<!DOCTYPE html>
<html>
<head>
    <title>File Upload Project</title>
</head>
<body>
    <h2>Upload Your File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Choose a .txt file:</label>
        <input type="file" name="file" id="file" accept=".txt" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
