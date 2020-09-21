<?php 

session_start();

if (isset($_SESSION['user_name'])) {

	session_destroy();

	echo "<script>location.href='../login_register_user2.php'</script>";
}   
    


else{
	echo "<script>location.href='../index.php'</script>";
}

 ?>
 