<?php 
require_once '../model.php';

session_start();

if (isset($_SESSION['user_name'])) {
	//echo "<h1> Welcome ".$_SESSION['user_name']."</h2>";
	//echo "<a href='product.php'>Product</a><br>";

	//echo "<a href='../user_home_page.php'>Home</a><br>";
	//echo "<br><a href='logout.php'>Logout</a><br>";

	try {
    	
		$logged_as = $_SESSION['user_name'];


		$id = $_SESSION['id'];
		$shop_name = $_SESSION['shop_name'];

		$totalamount1=total_amount($_SESSION['id']);
		
		require_once '../user2_home_page.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }

}


else{

	echo "<h1>Please log In !</h1>";

	echo "<br><a href='logout.php'>Go Home</a><br>";

}


 ?>