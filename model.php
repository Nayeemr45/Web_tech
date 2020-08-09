<?php 

require_once 'db_connect.php';


function showAllUser(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `user` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showUser($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function searchUser($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` WHERE user_name LIKE '%$user_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function loginUser($data){

	$conn = db_conn();
    $selectQuery = "SELECT * FROM `user` WHERE user_id = :user_id AND user_name = :user_name AND password = :password";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	'user_id' => $data['user_id'],
        	'user_name' => $data['user_name'],
        	'password' => $data['password']
        ]);
        $count=$stmt->rowCount();
        echo $count;
        session_start();
        if($count > 0)
    {
        $_SESSION["user_id"] = $data["user_id"];
        $_SESSION["user_name"] = $data["user_name"];
       $_SESSION["password"] = $data["password"];
      // $pass_hash = $data["password"];        
       
       echo $_SESSION['user_id'];
       echo $_SESSION['user_name'];
       echo $_SESSION['password'];

       echo "<script>location.href='welcome.php'</script>";
       /* if(password_verify ($pass_hash, $_SESSION['password'] )){
        echo $_SESSION['password'];
        echo "<br>";
        echo $pass_hash;
        echo "<br>"; 
        $h = password_hash(1234,PASSWORD_DEFAULT);
        echo $h;
                echo "wow";
       }
       else{
        echo "incorrect pass";
        echo $_SESSION['password'];
        echo "<br>";
        echo $pass_hash;
        
       } */
        //header('Location: ../showUser.php?id=' . $_POST["id"]);
    }
    else{
        echo "<script>alert('uname or pass incorrect!')</script>";
        echo "<script>location.href='../login_register.php'</script>";
	
        $message = '<label>Wrong Data</label>';
        echo $message;
    }
       // return $count;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function loginUser2($data){

	$conn = db_conn();
    $selectQuery = "SELECT * FROM `printer_info` WHERE user_name = :user_name AND password = :password";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	'user_name' => $data['user_name'],
        	'password' => $data['password']
        ]);
        $count=$stmt->rowCount();
        echo $count;
        session_start();
        if($count > 0)
    {
        $_SESSION["user_name2"] = $data["user_name"];
       $_SESSION["password"] = $data["password"];
      // $pass_hash = $data["password"];        
       
       echo $_SESSION['user_name2'];
       echo $_SESSION['password'];

       echo "<script>location.href='welcome.php'</script>";
       /* if(password_verify ($pass_hash, $_SESSION['password'] )){
        echo $_SESSION['password'];
        echo "<br>";
        echo $pass_hash;
        echo "<br>"; 
        $h = password_hash(1234,PASSWORD_DEFAULT);
        echo $h;
                echo "wow";
       }
       else{
        echo "incorrect pass";
        echo $_SESSION['password'];
        echo "<br>";
        echo $pass_hash;
        
       } */
        //header('Location: ../showUser.php?id=' . $_POST["id"]);
    }
    else{
        echo "<script>alert('uname or pass incorrect!')</script>";
        echo "<script>location.href='../login_register.php'</script>";
	
        $message = '<label>Wrong Data</label>';
        echo $message;
    }
       // return $count;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function addUser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into user (user_id, user_name, password,email, date_of_birth, gender, address, type)
VALUES (:user_id, :user_name, :password, :email, :date_of_birth, :gender, :address, :type)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':user_id' => $data['user_id'],
        	':user_name' => $data['user_name'],
        	':password' => $data['password'],
        	':email' => $data['email'],
        	':date_of_birth' => $data['date_of_birth'],
        	':gender' => $data['gender'],
        	':address' => $data['address'],
        	':type' => $data['type']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function addUser2($data){
	$conn = db_conn();
    $selectQuery = "INSERT into printer_info (user_name, password,shop_name, address)
VALUES (:user_name, :password, :shop_name, :address)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':user_name' => $data['user_name'],
        	':password' => $data['password'],
        	':shop_name' => $data['shop_name'],
        	':address' => $data['address']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateUser($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user set user_name = ?, password = ?, email = ?,address = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['user_name'], $data['password'], $data['email'], $data['address'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteUser($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `user` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}