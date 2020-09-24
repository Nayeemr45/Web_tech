<?php  
require_once '../model.php';


if (isset($_POST['createUser'])) {
/* 	$idErr = $nameErr = $passErr =$emailErr = $genderErr = $dobErr = $addressErr =  $typeErr ="";
	$name = $email = $pass = $gender = $dob = $address = $type = "";

	
	if (empty($_POST["user_name"])) {        
		$nameErr = "Cannot be empty";
		echo '<button><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></button>';
	  }elseif(strlen($_POST["user_name"])<2){   
		$nameErr = "Contains at least two words";
	  }elseif(!ctype_alpha($_POST["user_name"][0])){  
		$nameErr = "Must start with a letter";
	  } elseif(!preg_match("/^[a-zA-Z ]*$/",test_input($_POST["user_name"]))) {
			$nameErr = "Only letters and white space allowed";
	  }else{
		  echo "done";
	  }
	  

 */









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
	$data['user_name'] = $_POST['user_name1'];
	$data['password'] = $_POST['password1'];
	$data['email'] = $_POST['email1'];
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
