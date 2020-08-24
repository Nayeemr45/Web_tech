<?php
require_once '../model.php';

require_once 'welcome.php';

$userid = $_SESSION['user_id'];
$folder= "../uploads/".$userid;
    
$check = is_dir($folder);
$dr=getcwd();
$target_dir ="nothing";
//echo $target_dir;

 if($dr != "/Web_tech/uploads/"){
    //echo $dr;
     chdir("../uploads/");
     
     //echo getcwd();
     $dr2= getcwd();
  
     if($check == true){
      //$target_dir = "../uploads/".$userid."/";  
      $d="./".$userid."/";
      chdir($d);
      //echo "old dir"."<br>";
      //echo getcwd()."<br>";
      $target_dir =getcwd()."/";
      //echo $target_dir;
    }else{
        $d2=$userid;
        mkdir($d2);
      $d="./".$userid."/";
      chdir($d);
      //echo "new dir"."<br>";
     // echo getcwd()."<br>";
      $target_dir =getcwd()."/";
      //echo $target_dir;

    }
}



//$target_dir = "../uploads/";
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
    echo "<span style='margin-left:600px;''>"."Sorry, file already exists."."</span>";
    echo "<a href='welcome.php'>Go back</a>"."<br>";
    //echo "<script>location.href='welcome.php'</script>";
    $uploadOk = 0;
  }

  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo  "<span style='margin-left:600px;''>"."Sorry, your file is too large."."</span>";
    echo "Upto 5MB file can upload.";
    echo "<a href='welcome.php'>Go back</a>"."<br>";

    $uploadOk = 0;
  }

  if($FileType != "pdf" && $FileType != "docx" && $FileType != "doc") {
  echo "<span style='margin-left:600px;''>"."Sorry, only pdf, doc & docx files are allowed."."<span>";
  echo "<a href='welcome.php'>Go back</a>"."<br>";
  $uploadOk = 0;
}


  if ($uploadOk == 0) {
    echo "<span style='margin-left:600px;''>"."Sorry, your file was not uploaded."."<span>";
  // if everything is ok, try to upload file
  } else {
    $data['user_id'] = $_SESSION['id'];
    $data['path_location'] = $fileName;
    if (upload_file($data)) {
    move_uploaded_file($fileTmpN , $target_file); 
    //echo "uploaded.";
    echo "<script>location.href='welcome.php'</script>";

    }
  }

/* move_uploaded_file($fileTmpN , '../uploads/' .$fileName); 
 */

?>