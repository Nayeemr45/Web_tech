<?php  
require_once '../model.php';


require_once 'welcome2.php';

$printerid = $_SESSION['id'];
$shop_name = $_SESSION['shop_name'];

$path_id=$_GET['path_id'];
$price_id=$_GET['price_id'];

$userid=$_GET['user_id'];

$path_location=$_GET['path_location'];



addPrint_info($printerid, $shop_name ,$path_id ,$price_id);

echo "<script>location.href='welcome2.php'</script>";

?>

