<?php 

session_start();

if (isset($_SESSION['user_name'])) {
	session_destroy();
	echo "<script>location.href='../index.php'</script>";
	
}
if (isset($_SESSION['user_name2'])) {
	session_destroy();
	echo "<script>location.href='../index.php'</script>";
	
}

else{
	echo "<script>location.href='../index.php'</script>";
}

 ?>