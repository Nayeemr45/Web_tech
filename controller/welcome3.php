<?php 
require_once '../model.php';

session_start();

if (isset($_SESSION['user_name'])) {

	try {
		$data=getdata();
		$admin_info = admin_info($_SESSION['id']);

		$total_sell=total_sell();

		$total_print_file=total_printed_file_admin();

		$total_user1=total_user1();

		$total_user2=total_user2();

		$total_save_file=total_save_file();

		$total_request_file=total_request_file();


		require_once '../admin_page.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}
else{

	echo "<h1>Please log In !</h1>";

	echo "<br><a href='logout.php'>Go Home</a><br>";

}


 ?>