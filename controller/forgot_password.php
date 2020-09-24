<?php 
require_once '../model.php';

if (isset($_POST['forgot_pass'])) {

    $data['email'] = $_POST['email'];
    $data['date_of_birth'] = $_POST['date_of_birth'];
    $data['password'] = $_POST['password'];

    $id= forgot_pass($data);
	//echo "<script>location.href='../login_register_user2.php'</script>";
}   
    
elseif (isset($_POST['change_pass'])) {

    $data['Password'] = $_POST['Password'];
    echo $_POST['id'];
    /* if(change_pass($id , $data)){
        
        echo "<script>location.href='../login_register.php'</script>";
    } */
}   
    


else{
	echo "<script>location.href='../index.php'</script>";
}

 ?>
 