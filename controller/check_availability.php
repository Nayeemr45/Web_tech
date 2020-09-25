<?php 
require_once '../model.php';

// Establish database connection 
//include("dbconfig.php");
// code user Email availablity
if(!empty($_POST["email"])) {
  $email= $_POST["email"];
/*   if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {
    echo "error :you did not enter a valid email.";
  }
  else { */
    check_email($email);
/* }
 */}
// End code check email
// code user ID No availablity
 if(!empty($_POST["user_id"])) {
  $user_id= $_POST["user_id"];
  
  check_user_id($user_id);
}

?>