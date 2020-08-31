<?php  
require_once '../model.php';


require_once 'info.php';
$show_file = fetchShow_file($_GET['id']);

addPrint_queue($_GET['id']);
		 echo "Added Successfully";
		 echo '<p><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></p>';

/* 		 require_once '../user_home_page.php';
 */
/* 		 echo "<script>location.href='../user_home_page.php'</script>";
 */
?>