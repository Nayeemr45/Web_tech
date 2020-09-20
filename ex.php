<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.error {color: #FF0000;}

fieldset {
  margin-right: 1050px;
    margin-left: 50px;
}
legend{
  font-weight:bold;
}/* input {
  margin: 2px;
} */
.main1{
  margin-left:100px;
}
.name_li,.email_li,.db_style,.gender_style,.degree_style,.blood_g_style{
  display:flex;
}

.name_li .right,.email_li .right,.db_style .right,.gender_style .right,.degree_style .right,.blood_g_style .right{
  margin-left:-800px;
}

.left_side_ul{
  list-style-type: upper-alpha;
}
</style>
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $dobErr = $degreeErr =  $blood_gErr ="";
$name = $email = $gender = $day = $month = $year = $degree = $blood_g = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /* Name */
    $n=$_POST["name"];
  if (empty($_POST["name"])) {          /* Cannot be empty */
    $nameErr = "Cannot be empty";
  }elseif(strlen($_POST["name"])<2){      /* Contains at least two words */
    $nameErr = "Contains at least two words";
  }elseif(!ctype_alpha($n[0])){     /* Must start with a letter */
    $nameErr = "Must start with a letter";
  } else {
      $name = test_input($_POST["name"]);
                                  // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
  }
    /* Email */
  
  if (empty($_POST["email"])) {     /* Cannot be empty */
    $emailErr = "Cannot be empty";
  }else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {   /* Invalid email forma */
        $emailErr = "Invalid email format";
      }
  }
  if(empty($_POST["date"])){
    $dobErr = "Cannot be empty";
}else if(!strtotime($_POST['date'])){
    $dobErr = "invalid date";
}

    
  /* Gender */
  if (empty($_POST["gender"])) {
    $genderErr = "At least one of them must be selected";
  } else {
      $gender = test_input($_POST["gender"]);
  }
    /* Degree */

      if (empty($_POST["degree"])) {  /*Cannot be empty */
        $degreeErr = "Cannot be empty---At least two of them must be selected";
      }else{
        if(count($_POST["degree"]) <2){
          $degreeErr = "At least two of them must be selected";
        } 
        else {
        foreach($_POST['degree'] as $val)
          {
            $degree=array("$val");
          }
        }
      }
        /* Blood group */
  if (empty($_POST["blood_g"])) {
    $blood_gErr = "Must be selected";
  } else {
    $blood_g = test_input($_POST["blood_g"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h2>EXPERIMENT NAME</h2>
      <p>Designing HTML form using PHP with validation of user inputs</p>
      <h2>OBJECTIVE</h2>
      <p>This assessment item is designed to give you some practice on validating user inputs using PHP.</p>
      <h2>ASSESSMENT TASK</h2>
  <li>Design the following HTML form and perform the following validations<br><br> <form>  
    <div class="name_li">
    <div class="left">
      <fieldset>  

        <legend>NAME</legend>
        <input type="text"  name="name" >
        <input type="submit" name="submit" value="Submit"><br><br>
        <span class="error"><?php echo $nameErr;?></span><br><hr>  
</fieldset><br><br>
      </div>
      
      <div class="right">
        <ul class="left_side_ul"><span style="font-weight:bold;">Validation Rules</span>
          <li>Cannot be empty</li>
          <li >Contains at least two words</li>
          <li >Must start with a letter</li>
          <li>Can contain a-z, A-Z, period, dash only</li>
        </ul>
      </div>
    </div>
  </li>

    <li>Design the following HTML form and perform the following validations<br><br> <form>  
    <div class="email_li">
  
    <div class="left">
      <fieldset>  
        <legend>EMAIL</legend>
        <input type="text" id="email" name="email"><br><hr>
        <input type="submit" value="submit"><br><br>
        <span class="error"><?php echo $emailErr;?></span><br><hr>  
        </fieldset><br><br>
      </div>
      <div class="right">
          <ul class="left_side_ul"><span style="font-weight:bold;">Validation Rules</span>
          <li>Cannot be empty</li>
          <li>Must be a valid </li>
          <li>email_address :anything@example.com</li>
          </ul>
        </div>
    </div>
    </li>

   <li>Design the following HTML form and perform the following validations<br><br> <form>  
     <div class="db_style">
       <div class="left">
       <fieldset>  
      <legend>DATE OF BIRTH</legend>
      <label for="">date</label>
    <input type="date"  name="date" ><br><hr>
    <input type="submit" value="submit"><br><br>
<span class="error"><?php echo $dobErr;?></span><br>  
</fieldset><br><br>
       </div>
       <div class="right">
       <ul class="left_side_ul"><span style="font-weight:bold;">Validation Rules</span>
          <li>Cannot be empty</li>
          <li>Must be valid numbers (dd: 1-31, mm: 1-12, yyyy: 1953-1998)</li>
          </ul>
       </div>
     </div>
   </li>
   <li>Design the following HTML form and perform the following validations<br><br> <form>  
     <div class="gender_style">
       <div class="left">
       <fieldset>  
      <legend>GENDER</legend>
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="other">Other
  <br><hr>
<input type="submit" value="submit">
<span class="error"><?php echo $genderErr;?></span><br> 
<br><br>
</fieldset><br><br>
       </div>
       <div class="right">
       <ul class="left_side_ul"><span style="font-weight:bold;">Validation Rules</span>
          <li>At least one of them must be selected</li>
          </ul>
       </div>
     </div>
   </li>
   <li>Design the following HTML form and perform the following validations<br><br> <form>  
     <div class="degree_style">
       <div class="left">
       <fieldset>  
      <legend>DEGREE</legend>
  <input type="checkbox" name="degree[]" value="SSC">SSC
  <input type="checkbox" name="degree[]" value="HSC">HSC
  <input type="checkbox" name="degree[]" value="BSc">BSc
  <input type="checkbox" name="degree[]" value="MSc">MSc
  <br><hr>
<input type="submit" value="submit">
<span class="error"><?php echo $degreeErr;?></span><br> 

</fieldset><br><br>
       </div>
       <div class="right">
       <ul class="left_side_ul"><span style="font-weight:bold;">Validation Rules</span>
          <li>At least two of them must be selected</li>
          </ul>
       </div>
     </div>
   </li>
   <li>Design the following HTML form and perform the following validations<br><br> <form>  
     <div class="blood_g_style">
       <div class="left">
       <fieldset>  
      <legend>BLOOD GROUP</legend>
      <select name="blood_g">
                <option></option>
                <option name="blood_g">A+</option>
                <option name="blood_g">A-</option>
                <option name="blood_g">B+</option>
                <option name="blood_g">B-</option>
                <option name="blood_g">AB+</option>
                <option name="blood_g">AB-</option>
                <option name="blood_g">O+</option>
                <option name="blood_g">O-</option>
                </select>
  <br><hr>
<input type="submit" value="submit" >
<span class="error"><?php echo $blood_gErr;?></span><br><br>
</fieldset><br><br>
       </div>
       <div class="right">
       <ul class="left_side_ul"><span style="font-weight:bold;">Validation Rules</span>
          <li>Must be selected</li>
          </ul>
       </div>
     </div>
   </li>
</ol>
</form>

</body>
</html>


