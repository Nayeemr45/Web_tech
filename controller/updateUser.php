<?php  
require_once '../model.php';


if (isset($_POST['updateUser'])) {
	$data['user_name'] = $_POST['user_name'];
	$data['password'] = $_POST['password'];
	$data['email'] = $_POST['email'];
	$data['address'] = $_POST['address'];

  if (updateUser($_POST['id'], $data)) {
	  
  }
}
else if (isset($_POST['updateUser1'])) {
	$data['user_name'] = $_POST['user_name'];
	$data['password'] = $_POST['password'];
	$data['email'] = $_POST['email'];
	$data['address'] = $_POST['address'];

  if (updateUser1($_POST['id'], $data)) {
      echo 'Successfully updated!!';
	 echo "<script>location.href='welcome.php'</script>";


  	//redirect to showStudent
  //	header('Location: ../showUser.php?id=' . $_POST["id"]);
  }
}  
else if (isset($_POST['updateUser2'])) {
	$data['user_name'] = $_POST['user_name'];
	$data['password'] = $_POST['password'];
	$data['email'] = $_POST['email'];
	$data['shop_name'] = $_POST['shop_name'];
	$data['address'] = $_POST['address'];

  if (updateUser2($_POST['id'], $data)) {
	  echo 'Successfully updated!!';
	 echo "<script>location.href='welcome2.php'</script>";


  	//redirect to showStudent
  //	header('Location: ../showUser.php?id=' . $_POST["id"]);
  }
}  
else if (isset($_POST['updateUser3'])) {
	$data['password'] = $_POST['password'];
	$data['email'] = $_POST['email'];

  if (updateUser3($_POST['id'], $data)) {
	  echo 'Successfully updated!!';
	 echo "<script>location.href='welcome3.php'</script>";


  	//redirect to showStudent
  //	header('Location: ../showUser.php?id=' . $_POST["id"]);
  }
}  

else {
	echo 'You are not allowed to access this page.';
}


?>