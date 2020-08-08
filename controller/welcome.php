<?php 

session_start();

if (isset($_SESSION['user_name'])) {
	echo "<h1> Welcome ".$_SESSION['user_name']."</h2>";
	echo "<a href='product.php'>Product</a><br>";
	echo "<br><a href='logout.php'>Logout</a><br>";

}else{
	echo "<br><a href='logout.php'>Logout</a><br>";

	echo "welcome error";
}


 ?>