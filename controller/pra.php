<?php
    $userid = "na7";
    $folder= "../Web_tech/uploads/".$userid;
    
    $check = is_dir($folder);
    $dr=getcwd();
    $target_dir ="nothing";
    //echo $target_dir;

     if($dr != "/Web_tech/uploads/"){
        echo $dr;
         chdir("../uploads/");
         //echo getcwd();
         $dr2= getcwd();
      
         if($check == true){
          //$target_dir = "../uploads/".$userid."/";  
          $d="./".$userid."/";
          chdir($d);
          //echo "old dir"."<br>";
          //echo getcwd()."<br>";
          $target_dir =getcwd();
          //echo $target_dir;
        }else{
            $d2=$userid;
            mkdir($d2);
          $d="./".$userid."/";
          chdir($d);
          //echo "new dir"."<br>";
         // echo getcwd()."<br>";
          $target_dir =getcwd();
         // echo $target_dir;

        }
    }
?>