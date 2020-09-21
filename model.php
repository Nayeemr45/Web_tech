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
function showAllUser2(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `printer_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function show_file_admin(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `path_info` ';
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
function showUser2($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `printer_info` where ID = ?";

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
function finding_print_queue($user_id,$password){
    $conn = db_conn();

    $selectQuery1 = "SELECT ID FROM `user` WHERE user_id = :user_id AND password = :password";

    try{

        $stmt1 = $conn->prepare($selectQuery1);
        $stmt1->execute([
        	'user_id' => $user_id,
        	'password' => $password
        ]);
        $count=$stmt1->rowCount();
        if($count > 0)
    {   
        $conn2 = db_conn();

    $selectQuery2 = "SELECT print_queue.*,user.user_id FROM `print_queue` INNER JOIN `user` on print_queue.user_id = user.id WHERE user.user_id= '$user_id'";

    
    try{
        $stmt2 = $conn2->query($selectQuery2);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    return $rows2;
}else{
    echo "invalid";

}
    }
catch(PDOException $e){
    echo $e->getMessage();
}
$conn = null;
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


function login_User2_info($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `printer_info` WHERE id = '$id'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function total_amount($id){
    $conn = db_conn();
    $selectQuery = "SELECT SUM(price_amount) AS Total FROM `print_info`  WHERE printer_id= $id";
    try{
        $stmt = $conn->query($selectQuery);
        $stmt->execute();

        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    while($rows = $stmt->fetch(PDO::FETCH_ASSOC))
    {
    $sum = $rows['Total'];
    return $sum;
    }
}

function total_print_file($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `print_info`  WHERE printer_id= $id";
    try{
        $stmt = $conn->query($selectQuery);
        $stmt->execute();

        $count=$stmt->rowCount(); 
        return $count;

    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    }





/* function User_info($id){
    $conn = db_conn();
    $selectQuery = "SELECT user_id FROM `user` WHERE id = '$id'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
} */



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

function show_print_info($id){
    $conn = db_conn();
    $selectQuery = "SELECT user.user_name,user.email,user.gender,print_info.price_amount FROM `print_info`  INNER JOIN `user` on print_info.user_id = user.id WHERE print_info.printer_id=$id";
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
        if($count > 0)
    {   
        
        

        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            if(isset($data['remember']))
        {
            setcookie ("user_login_id",$data['user_id'],time()+ (60 * 60 * 7),"/");
            setcookie ("user_login_name",$data['user_name'],time()+ ( 60 * 60 * 7),"/");
            setcookie ("user_login_password",$data['password'],time()+  (60 * 60 * 7),"/");
        }
        elseif(empty($data['remember'])){
               
                setcookie ("user_login_id",$data['user_id'],time()-1,"/");
		        setcookie ("user_login_name",$data['user_name'],time()-1,"/");
		        setcookie ("user_login_password",$data['password'],time()-1,"/");
        
    }
 /*         $n=$stmt->fetch();
            print_r($n); 
            header("Location:../index.php");  
 */            
 session_start();


 $_SESSION["id"] =$row['id'];        
 $_SESSION["remember"] = $data["remember"];
 $_SESSION["user_id"] = $data["user_id"];
 $_SESSION["user_name"] = $data["user_name"];
 $_SESSION["password"] = $data["password"];
header("Location:welcome.php");
 //echo "<script>location.href='welcome.php'</script>";
           
        }
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

        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
        
            $_SESSION["id"] =$row['id'];
            $_SESSION["shop_name"] =$row['shop_name'];

        $_SESSION["user_name"] = $data["user_name"];
       $_SESSION["password"] = $data["password"];
      // $pass_hash = $data["password"];        
       
       echo $_SESSION['user_name'];
       echo $_SESSION['password'];

       echo "<script>location.href='welcome2.php'</script>";
    }
}
    else{
        echo "<script>alert('uname or pass incorrect!')</script>";
        echo "<script>location.href='../login_register_user2.php'</script>";
	
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
function admin_login($data){

	$conn = db_conn();
    $selectQuery = "SELECT * FROM `admin` WHERE user_name = :user_name AND password = :password";
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

        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
        
        $_SESSION["id"] =$row['id'];
        $_SESSION["user_name"] = $data["user_name"];
       $_SESSION["password"] = $data["password"];
       echo "success";

       echo "<script>location.href='welcome3.php'</script>";
    }
}
    else{
        echo "<script>alert('uname or pass incorrect!')</script>";
        echo "<script>location.href='../admin.php'</script>";
	
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
function getdata(){

	$conn = db_conn();
    $selectQuery = "SELECT * FROM `print_info`";
    try{
         $stmt = $conn->prepare($selectQuery);
         $stmt->execute();
        $data=array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {   
            $data[]=$row;
        }

        $q=json_encode($data);
        return $q;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
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
    $selectQuery = "INSERT into print_queue (user_id, path_location, path_id, price_id)
SELECT path_info.user_id, path_info.path_location, path_info.id , price_info.id FROM `path_info` INNER JOIN `price_info` on path_info.id = price_info.path_id WHERE price_info.path_id=$id  AND path_info.id=$id LIMIT 0,1";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function addPrint_info($printerid, $shop_name ,$path_id ,$price_id){
    $conn = db_conn();
    $selectQuery = "INSERT into print_info (user_id, price_amount, price_id,path_id) SELECT path_info.user_id, price_info.price,price_info.id, path_info.id FROM `path_info` INNER JOIN `price_info` on path_info.id = price_info.path_id WHERE price_info.path_id= $path_id LIMIT 0,1";

    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $selectQuery = "UPDATE print_info set shop_name = ?, printer_id= ? where price_id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$shop_name, $printerid, $price_id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }



    $conn = null;
    return true;
}



function addPrice($user_id,$price,$path_id){
	$conn = db_conn();
    $selectQuery = "INSERT into price_info (user_id, price, path_id)
VALUES (:user_id, :price, :path_id)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':user_id' => $user_id,
        	':price' => $price,
        	':path_id' => $path_id
        ]);
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
    $selectQuery = "INSERT into printer_info (user_name, password, email, shop_name, address)
VALUES (:user_name, :password, :email, :shop_name, :address)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':user_name' => $data['user_name'],
        	':password' => $data['password'],
        	':email' => $data['email'],
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
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateUser2($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE printer_info set user_name = ?, password = ?, email = ?, shop_name = ?,address = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['user_name'], $data['password'], $data['email'], $data['shop_name'], $data['address'], $id
        ]);
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
function deleteUser2($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `printer_info` WHERE `ID` = ?";
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