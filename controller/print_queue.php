<?php  
require_once '../model.php';

//if(isset(_POST["print"])){
	if (addPrint_queue($data)) {
		$data['user_id'] = $_POST['user_id'] ; 
		$data['path_location'] = $_POST['path_location'] ; 
		$data['id'] = $_POST['id'];  
		//require_once '../login_register.php';
		//echo "<script>location.href='../login_register.php'</script>";
	  }
//}

else {
	echo 'You are not allowed to access this page.';
}
?>