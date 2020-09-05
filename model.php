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
function finding_print_queue($user_id){
    $conn = db_conn();
    $selectQuery = "SELECT print_queue.*,user.user_id FROM `print_queue` INNER JOIN `user` on print_queue.user_id = user.id WHERE user.user_id= '$user_id'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function login_User_info($user_id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` WHERE user_id = '$user_id'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function print_file($user_id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `print_queue` WHERE user_id = '$user_id' ORDER BY `id` DESC";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function show_file($user_id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `path_info` WHERE user_id = '$user_id' ORDER BY `id` DESC";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function show_print_file($user_id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `path_info` WHERE user_id = '$user_id' ORDER BY `id` DESC";
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
        //echo $count;
        session_start();
        if($count > 0)
    {   
        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            /* $n=$stmt->fetch();
            print_r($n); */
            $_SESSION["id"] =$row['id'];
            //echo $_SESSION["id"]. "<br>";
            
            $_SESSION["user_id"] = $data["user_id"];
            $_SESSION["user_name"] = $data["user_name"];
            $_SESSION["password"] = $data["password"];
          
            echo "<script>location.href='welcome.php'</script>";
         
        }
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
        $_SESSION["user_name"] = $data["user_name"];
       $_SESSION["password"] = $data["password"];
      // $pass_hash = $data["password"];        
       
       echo $_SESSION['user_name'];
       echo $_SESSION['password'];

       echo "<script>location.href='welcome2.php'</script>";
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
function collectdata($data){

	$conn = db_conn();
    $selectQuery = "SELECT * FROM `path_info` WHERE id = :id";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	'id' => $data['id']
        ]);
        $count=$stmt->rowCount();
        session_start();
        //echo $count;
        if($count > 0)
    {   
        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $_SESSION["id"] =$row['id'];         
            $c_data["user_id"] = $row["user_id"];
            $c_data["user_name"] = $row["path_location"];
          
            echo "<script>location.href='info.php'</script>";
         
        }
    }
    else{

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
function addPrint_queue($id){
    $conn = db_conn();
    $selectQuery = "INSERT into print_queue (user_id, path_location, path_id)
SELECT user_id, path_location, id FROM path_info WHERE path_info.id=$id";
    try{
        $stmt = $conn->query($selectQuery);
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
function upload_file($data){
	$conn = db_conn();
    $selectQuery = "INSERT into path_info (user_id, path_location)
VALUES (:user_id, :path_location)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':user_id' => $data['user_id'],
        	':path_location' => $data['path_location']
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
function updateUser1($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user set user_name = ?, password = ?, email = ?,address = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['user_name'], $data['password'], $data['email'], $data['address'], $id
        ]);
        echo "<script>location.href='welcome.php'</script>";
            echo  $data['password'];
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function delete_save_file($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `path_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
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
function deletefile($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `print_queue` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}