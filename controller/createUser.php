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
	//require_once '../login_register.php';
	echo "<script>location.href='../login_register.php'</script>";


  }
} 
elseif (isset($_POST['createUser2'])) {
	$data['user_name'] = $_POST['user_name'];
	$data['password'] = $_POST['password'];
	$data['email'] = $_POST['email'];
	$data['shop_name'] = $_POST['shop_name'];
	$data['address'] = $_POST['address'];


  if (addUser2($data)) {
	//require_once '../login_register_user2.php';
	echo "<script>location.href='../login_register_user2.php'</script>";


  }
} 

else {
	echo 'You are not allowed to access this page.';
}

?>
<!-- 
assword_hash(1234,PASSWORD_DEFAULT);
//password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);; -->