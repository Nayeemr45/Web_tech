<?php  
require_once '../model.php';


if (isset($_POST['admin_login'])) {
	$data['user_name'] = $_POST['user_name'];
    $data['password'] = $_POST['password'];

  if (admin_login($data)) {
    
	 // require_once '../index.php';

  }
}

else {
	echo 'You are not allowed to access this page.';
}

?>