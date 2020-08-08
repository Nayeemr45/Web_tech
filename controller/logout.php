<?php 

session_start();

if (isset($_SESSION['user_name'])) {
	session_destroy();
	echo "<script>location.href='../login_register.php'</script>";
	
}

else{
	echo "<script>location.href='../login_register.php'</script>";
}

 ?>