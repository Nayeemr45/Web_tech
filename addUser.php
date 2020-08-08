<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
 
  .main{
    margin-top: 40px;
background-color:red;
  }
  .left,.right{
    width:300px;
  }
  .left{
    float:left;
    margin-left: 200px;

  }
  .right{
    margin-left: 200px;
    float:left;
  }
  .but{
    margin-top:10px;
    float:right;
    }
</style>
</head>
<body>


<div class="container">
<form action="controller/createUser.php" method="POST" enctype="multipart/form-data" id="type">
<div class="main">

  <div class="left">
  <div class="form-group">
    <label for="user_id">User Id :</label>
    <input type="text" id="user_id" name="user_id" class="form-control"  placeholder="Enter User Id">
  </div>
  <div class="form-group">
    <label for="user_name">User Name :</label>
    <input type="text" id="user_name" name="user_name" class="form-control"  placeholder="Enter User Name">
  </div>
  <div class="form-group">
    <label for="password">Password :</label>
    <input type="text" id="password" name="password" class="form-control"  placeholder="Enter Password">
  </div>
  <div class="form-group">
    <label for="email">Email :</label>
    <input type="text" id="email" name="email" class="form-control"  placeholder="Enter Email">
  </div>
  </div>
  <div class="right">
  <div class="form-group">
    <label for="date_of_birth">Date of Birth :</label>
    <input type="text" id="date_of_birth" name="date_of_birth" class="form-control"  placeholder="Enter Date of Birth">
  </div>
  <div class="form-group">
    <label for="gender">Gender :</label>
    <input type="text" id="gender" name="gender" class="form-control"  placeholder="Enter Gender">
  </div>
  <div class="form-group">
    <label for="address">Address :</label>
    <input type="text" id="address" name="address" class="form-control"  placeholder="Enter Address">
  </div>

  <label for="Type">Select Type :</label>

  <select class="form-control  id="type" name="type" form="type">

<option value="Student">Student</option>
<option value="Business">Business</option>
</select>

 <div class="but">
 <button type="submit" name = "createUser" class="btn btn-primary">Create</button>
 </div>
  </div>

<!--   <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  </div>

</form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

