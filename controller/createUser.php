<?php  
require_once '../model.php';


if (isset($_POST['createUser'])) {
	$data['user_id'] = $_POST['user_id'];
	$data['user_name'] = $_POST['user_name'];
	$data['password'] = $_POST['password'];
	$data['email'] = $_POST['email'];
	$data['date_of_birth'] = $_POST['date_of_birth'];
	$data['gender'] = $_POST['gender'];
	$data['address'] = $_POST['address'];
	$data['type'] = $_POST['type'];

  if (addUser($data)) {
	  require_once '../index.php';

  }
} else {
	echo 'You are not allowed to access this page.';
}

?>
<!-- 
assword_hash(1234,PASSWORD_DEFAULT);
//password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);; -->