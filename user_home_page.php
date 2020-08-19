

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!--     <link rel="stylesheet" href="CSS/user1.css">
 -->  <style>
    .header , .part_2 , .part_3 , .part_4 {
    display: none;
    justify-content: center;
    align-items: center;
    margin-top: 200px;
    margin-left: 100px;
}
.part_5{
  display: none;
    justify-content: center;
    align-items: center;
    margin-top: 100px;
    margin-left: 50px;
}
.save_file{
  margin-bottom: 200px;
}
.print_file{
  margin-bottom: 200px;
}

/* new */


 .sidebar{
  position: fixed;
  top: 60px;
  left: 0;
  background: #f8f9fa;
  width: 200px;
   height: calc(100% - 80px);
  border-bottom-left-radius: 20px;
  transition: all 0.3s ease;
}

 .sidebar ul li{
    list-style : none;
 }
 .sidebar ul li a{

    display: block;
    padding: 20px;
    color: #fff;
    position: relative;
    margin-bottom: 1px;
    color: #000;
    white-space: nowrap;
}

 .sidebar ul li a:before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 3px;
  height: 100%;
  background: #ff0000;
  display: none;
}
/* 
 .sidebar ul li a span.icon{
  margin-right: 10px;
  display: inline-block;
} */

 .sidebar ul li a span.title{
  display: inline-block;
}

 .sidebar ul li a:hover,
 .sidebar ul li a.active{
  background: #ff4a4a;
  color: #fff;
}

 .sidebar ul li a:hover:before,
 .sidebar ul li a.active:before{
  display: block;
}

.part_1{
  display : flex;
  justify-content: center;
  align-items: center;
  margin-top: 200px;
  margin-left: 100px;
  color : #ff4a4a;
}

/* profile */

.profile_button{
  top : 10px;
}
.edit_info , .show_info{
  margin-top : 20px;
}

.span_color{
  color : #dc3545;
}


@media screen and (max-width:992px){
  h1{
    width:100%;
    text-align:center;
    margin-right:auto;
    margin-left:85px;
  }
  body {
    margin-right:auto;

  }
  .part_5{
    margin-right:auto;
    margin-left:190px;
  }
  .part_4{
    margin-right:auto;
    margin-left:190px;
  }
  .part_3{
    margin-right:auto;
    margin-left:190px;
  }
  .part_2{
    margin-right:auto;
    margin-left:295px;
    font-size:15px;
  }
}
</style>
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top main_nav">
  <a class="navbar-brand" href="#"><span style= "color : #ff4a4a">Print</span> solution</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">How it works</a>
      </li>
      <li class="nav-item">
        <a class="nav-link log_reg" href="#">Logged in as <span style="color : #ff4a4a;  text-transform: uppercase;"><strong><?php echo $logged_as; ?></strong></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link log_reg" href="logout.php"><span style ="color : #00346b">LogOut</span></a>
      </li>
    </ul>
  </div>
</nav>

 
<div class="sidebar" id="sidebar">
      <ul>
        <li><a href="#" id="home" class="btn">
          <span class="title">Home</span>
          </a></li>
        <li><a href="#" id="save_file" class="btn">
          <span class="title">Save file</span>
          </a></li>
        <li><a href="#" id="print_file" class="btn">
          <span class="title">Print file</span>
          </a></li>
        <li><a href="#" id="show_file" class="btn">
          <span class="title">Show file</span>
          </a></li>
        <li><a href="#" id="profile" class="btn">
         <span class="title">Profile</span>
          </a></li>
    </ul>
  </div>
  



<div class="header">
<h1>Welcome to Print Solution</h1>
</div><!-- end header -->

<div class="inside_part">
  <div class="part_1">
      <h1>Welcome to Print Solution</h1>
  </div><!-- end part_1 -->

  <div class="part_2">
  <div class="save_file">
  <div class="input-group mb-3">
  <div class="custom-file">
  <?php foreach ($Searched_login_Users as $i => $user): ?>
  <form action="upload.php" method="post" enctype="multipart/form-data">
  Select document to save:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
  <input type="submit" value="Save Document" name="submit">
  </div>

</form>
<?php endforeach; ?>

   <!--  <input type="file" name="fileToUpload" class="custom-file-input" id="inputGroupFile02">
    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
  </div>
  <div class="input-group-append">
    <span class="input-group-text" id="">Save File</span>
  </div> -->
  </div>
  </div>
  </div><!-- end save file -->
 </div><!-- end part_2 -->

  <div class="part_3">
  <div class="print_file">
  <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02">
    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
  </div>
  <div class="input-group-append">
    <span class="input-group-text" id="">Print</span>
  </div>
</div>
</div><!-- end print file -->
 </div><!-- end part_3 -->

 <div class="part_4">
   <div class="show_file">
      <p>File show from server!</p>
   </div>
 </div><!-- end part_4 -->


 <div class="part_5">
   <div class="profile">
   
   <div class="profile_button">
    <button id="show" type="button" class="btn btn-danger btn-lg but_css">Show Info</button>
    <button id="edit" type="button" class="btn btn-secondary btn-lg but_css">Edit Info</button>
    </div><!-- end profile_button -->
    <?php foreach ($Searched_login_Users as $i => $user): ?>
				<a href="showUser.php?id=<?php echo $user['id'] ?>"></a>
			
    <div class="show_info">
    <div class="form-group">
      <label for="user_id">User ID :</label>
      <span class ="span_color"><?php echo $user['user_id']; ?></span>

    </div>
    <div class="form-group">
      <label for="user_name">User Name :</label>
      <span class ="span_color"><?php echo $user['user_name']; ?></span>
    </div>
    <div class="form-group">
      <label for="password">Password :</label>
      <span class ="span_color"><?php echo $user['password']; ?></span>

    </div>
    <div class="form-group">
      <label for="email">Email :</label>
      <span class ="span_color"><?php echo $user['email'] ?></span>
    </div>
    <div class="form-group">
      <label for="date_of_birth">Date of Birth :</label>
      <span class ="span_color"><?php echo $user['date_of_birth'] ?></span>
    </div>
    <div class="form-group">
      <label for="gender">Gender :</label>
      <span class ="span_color"><?php echo $user['gender'] ?></span>
    </div>

    <div class="form-group">
      <label for="address">Address :</label>
      <span class ="span_color"><?php echo $user['address'] ?></span>
    </div>
    <div class="form-group">
      <label for="type">Type :</label>
      <span class ="span_color"><?php echo $user['type'] ?></span>
    </div>
    </div><!-- end show_info -->
		<?php endforeach; ?>

		<?php foreach ($Searched_login_Users as $i => $user): ?>
    <a href="showUser.php?id=<?php echo $user['id'] ?>"></a>
      <div class="edit_info">
      <form action="updateUser.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="user_name">User Name :</label>
      <input value="<?php echo $user['user_name'] ?>" type="text" id="user_name" name="user_name" class="form-control"  placeholder="Enter User Name">
    </div>
    <div class="form-group">
      <label for="password">Password :</label>
      <input value="<?php echo $user['password'] ?>" type="text" id="password" name="password" class="form-control"  placeholder="Enter Password">
    </div>
    <div class="form-group">
      <label for="email">Email :</label>
      <input value="<?php echo $user['email'] ?>" type="text" id="email" name="email" class="form-control"  placeholder="Enter Email">
    </div>

    <div class="form-group">
      <label for="address">Address :</label>
      <input value="<?php echo $user['address'] ?>" type="text" id="address" name="address" class="form-control"  placeholder="Enter Address">
    </div>
    <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
    <input class="btn btn-danger btn-lg but_css" type="submit" name = "updateUser1" value="Update">
    </form>
      </div><!-- end edit_info -->
      <?php endforeach; ?>

  </div><!-- end profile -->
 </div><!-- end part_5 -->


</div><!-- end inside_part -->

    </div><!-- end contaiber -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<script type="text/javascript">
          document.getElementById('home').addEventListener("click", function()
          { document.querySelector('.header').style.display = "flex";
            document.querySelector('.part_1').style.display = "none";
            document.querySelector('.part_2').style.display = "none";
            document.querySelector('.part_3').style.display = "none";
            document.querySelector('.part_4').style.display = "none";
            document.querySelector('.part_5').style.display = "none";

         });
          document.getElementById('save_file').addEventListener("click", function()
          { 
            document.querySelector('.part_1').style.display = "none";
            document.querySelector('.part_2').style.display = "flex";
            document.querySelector('.header').style.display = "none";
            document.querySelector('.part_3').style.display = "none";
            document.querySelector('.part_4').style.display = "none";
            document.querySelector('.part_5').style.display = "none";

         });
          document.getElementById('print_file').addEventListener("click", function()
          { 
            document.querySelector('.part_1').style.display = "none";
            document.querySelector('.part_3').style.display = "flex";
            document.querySelector('.header').style.display = "none";
            document.querySelector('.part_2').style.display = "none";
            document.querySelector('.part_4').style.display = "none";
            document.querySelector('.part_5').style.display = "none";

         });
          document.getElementById('show_file').addEventListener("click", function()
          { 
            document.querySelector('.part_1').style.display = "none";
            document.querySelector('.part_3').style.display = "none";
            document.querySelector('.header').style.display = "none";
            document.querySelector('.part_2').style.display = "none";
            document.querySelector('.part_4').style.display = "flex";
            document.querySelector('.part_5').style.display = "none";

         });
          document.getElementById('profile').addEventListener("click", function()
          { 
            document.querySelector('.part_1').style.display = "none";
            document.querySelector('.part_3').style.display = "none";
            document.querySelector('.header').style.display = "none";
            document.querySelector('.part_2').style.display = "none";
            document.querySelector('.part_4').style.display = "none";
            document.querySelector('.part_5').style.display = "flex";
            document.querySelector('.edit_info').style.display = "none";
         });
         document.getElementById('show').addEventListener("click", function()
          { 
            document.querySelector('.show_info').style.display = "grid";
            document.querySelector('.show_info').style.gridRow="2 / span 2";
            document.querySelector('.edit_info').style.display = "none";

          });
         document.getElementById('edit').addEventListener("click", function()
          { 
            document.querySelector('.edit_info').style.display = "grid";
            document.querySelector('.edit_info').style.gridRow="2 / span 2";
            document.querySelector('.show_info').style.display = "none";

          });
          
        </script>
        <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("sidebar");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}
</script>
</body>
</html>