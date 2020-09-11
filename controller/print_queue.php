<?php  
require_once '../model.php';


require_once 'welcome.php';
/* $show_file = fetchShow_file($_GET['id']); */


$userid = $_SESSION['user_id'];





addPrint_queue($_GET['id']);
		// echo "Added Successfully";
		// echo '<p><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></p>';

/* 		 require_once '../user_home_page.php';
 */
/* 		 echo "<script>location.href='../user_home_page.php'</script>";
*/

$filename=$_GET['path_location'];

 $path = '../uploads/'.$userid.'/'.$filename;
$totoalPages = countPages($path);
  
$price= $totoalPages*2;
  echo $price;
function countPages($path) {
  $pdftext = file_get_contents($path);
  $num = preg_match_all("/\/Page\W/", $pdftext, $dummy);
  return $num;
}
 


$path_id=$_GET['id'];
$user_id=$_GET['user_id'];

addPrice($user_id,$price,$path_id);


 
?>