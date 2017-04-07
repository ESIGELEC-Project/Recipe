<?php
// need to configure the php.ini file to set the "file_uploads" attribute equals "on"

$target_dir = "image/";//the diretory where the file is going to be uploaded

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);//file name to be stored:

$uploadOk = true;//flag that specify upload this file or not

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);//holds the file extension of the file

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = false;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {//less then 500mb
    echo "Sorry, your file is too large.";
    $uploadOk = false;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = false;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
