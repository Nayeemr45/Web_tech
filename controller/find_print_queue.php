<?php

require_once '../model.php';

if (isset($_POST['find_print_queue'])) {

    try {
        
    	$all_data = finding_print_queue($_POST['user_id'],$_POST['password']);
    require_once '../show_searched_file.php';
    

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}
elseif (isset($_POST['scan'])) {

    try {
        
    /* 	$all_data = finding_print_queue($_POST['user_id'],$_POST['password']);
    require_once '../show_searched_file.php';
     */

    // echo $_POST['text'];
     $a=$_POST['text'];
     $b=strpos($a , '/');
     //echo "<br>".$b;

     $c=strlen($a);
     //echo "<br>".$c;

     $d=substr($a, $b+1);
     //echo "pass-"."<br>".$d;
     
     $e=substr($a, 0,$b);
     //echo "user-"."<br>".$e;

     $all_data = finding_print_queue($e,$d);
     require_once '../show_searched_file.php';
     

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}
