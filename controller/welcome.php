<?php

require_once '../model.php';

session_start();

if (isset($_SESSION['user_id'])) {
	//echo "<h1> Welcome ".$_SESSION['user_name']."</h2>";
	//echo "<a href='product.php'>Product</a><br>";

	//echo "<a href='../user_home_page.php'>Home</a><br>";
	//echo "<br><a href='logout.php'>Logout</a><br>";

	try {
    	
		$logged_as = $_SESSION['user_name'];
		$Searched_login_Users = login_User_info($_SESSION['user_id']);
		$show_file = show_file($_SESSION['id']);
		$userid=$Searched_login_Users;
        
		$print_file = print_file($_SESSION['id']);
		
		$totalamount=total_amount_user1($_SESSION['id']);

		$total_print_file_user1=total_print_file_user1($_SESSION['id']);

		//require_once '../searchalluser.php';
		require_once '../user_home_page.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }

}

else{

	echo "<h1>Please log In !</h1>";

	echo "<br><a href='logout.php'>Go Home</a><br>";

}


 ?>