<!DOCTYPE html>
<html>
<body>

<?php 
    $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/PHP/InClass-5/";
    $target_file = $target_dir . basename($_FILES["fileUploaded"]["name"]);
    foreach ( $_FILES["fileUploaded"] as $key => $val) {
        echo "$key = $val <br>";
    }
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $check = getimagesize($_FILES["fileUploaded"]["tmp_name"]);
        foreach ( $check as $key => $val) {
            echo "<br>$key = $val <br>";
        }
        if ($check !== FALSE) {
            echo "File is an image";
        } else {
            echo "File is not an image";
        }
    }

    
?>

</body>
</html>

<!-- 
#target_dir= "..."- specifics the dir where the file is going to be placed.. 
$target_file specifies the path of the file to be uploaded
$imageFileType holds the file extension of the file (in lower case)


"1" == 1 = true 
"1" === 1 =false
-->