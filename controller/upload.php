<?php
require_once '../model.php';

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $fileName=$_FILES['fileToUpload']['name'];
/*   $fileType=$_FILES['fileToUpload']['type'];
 */  $fileTmpN=$_FILES['fileToUpload']['tmp_name'];
  $fileErrO=$_FILES['fileToUpload']['error'];
  $fileSize=$_FILES['fileToUpload']['size'];

}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.". "<br>";
    echo "Upto 5MB file can upload.". "<br>";
    $uploadOk = 0;
  }

  if($FileType != "pdf" && $FileType != "docx" && $FileType != "doc") {
  echo "Sorry, only pdf, doc & docx files are allowed.";
  $uploadOk = 0;
}


  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    $data['user_id'] = $_POST['id'];
    $data['path_location'] = $target_file;
    if (upload_file($data)) {
    move_uploaded_file($fileTmpN , $target_file); 
    echo "uploaded.";
    }
  }

/* move_uploaded_file($fileTmpN , '../uploads/' .$fileName); 
 */

?>