<?php 

session_start();

if (isset($_SESSION['user_name'])) {

	session_destroy();
	if(isset($_COOKIE['user_login_id']) and isset($_COOKIE['user_login_name']) and isset($_COOKIE['user_login_password'])){
		$user_login_id = $_COOKIE['user_login_id'];
		$user_login_name = $_COOKIE['user_login_name'];
		$user_login_password = $_COOKIE['user_login_password'];

		setcookie ("user_login_id",$user_login_id,time()-1,"/");
		setcookie ("user_login_name",$user_login_name,time()-1,"/");
		setcookie ("user_login_password",$user_login_password,time()-1,"/");
	}
	echo "<script>location.href='../login_register.php'</script>";
	
}
if (isset($_SESSION['user_name2'])) {
	session_destroy();
	echo "<script>location.href='../index.php'</script>";
	
}

else{
	echo "<script>location.href='../index.php'</script>";
}

 ?>
 