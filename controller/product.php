<?php 

session_start();

if (isset($_SESSION['user_name'])) {
	echo "<h2>Welcome to product page</h2>";
	echo "<br><a href='welcome.php'>back to welcome</a>";
}

else{
	echo "<script>location.href='login_register.php'</script>";
}

 ?>