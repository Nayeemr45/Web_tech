<?php 

require_once '../model.php';
require_once 'welcome.php';


$userid = $_SESSION['user_id'];


$path_location=$_GET['path_location'];


$file_pointer = "../uploads/".$userid."/".$path_location; 


delete_save_file($_GET['id']);



// Use unlink() function to delete a file  
if (!unlink($file_pointer)) {  
    echo ("$file_pointer cannot be deleted due to an error");  
    echo '<button><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></button>';
}  
else {  
    echo '<button><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></button>';
} 

?>