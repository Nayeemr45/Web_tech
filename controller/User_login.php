<?php  
require_once '../model.php';


if (isset($_POST['User_login'])) {
	$data['user_id'] = $_POST['user_id'];
	$data['user_name'] = $_POST['user_name'];
    $data['password'] = $_POST['password'];
    
   /*  try {
    	
    	$allSearchedUsers = searchUser($_POST['user_name']);
		require_once '../searchalluser.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
 */

  if (loginUser($data)) {
    
	 // require_once '../index.php';

  }
} else {
	echo 'You are not allowed to access this page.';
}

?>