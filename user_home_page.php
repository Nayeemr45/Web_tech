

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/user1.css">
  <style>
   
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
  <?php //foreach ($Searched_login_Users as $i => $user): ?>
  <form action="upload.php" method="post" enctype="multipart/form-data">
  Select document to save:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="hidden" name="id" value="<?php echo $Searched_login_Users['id'] ?>">
  <input type="submit" value="Save Document" name="submit">
  </div>
 <!--  <div class="view_pdf">
  <div id="viewpdf"></div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
  
  <script>
    var viewer = $('#viewpdf');
    PDFObject.embed('Appliction--2.pdf');
  </script>
  
  </div> --><!-- end viewpdf -->
</form>
<?php //endforeach; ?>

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
      <table class="table table-hover auto-index">
  <thead class="bg-info th">
    <tr>
      <th scope="col">serial</th>
			<th scope="col">File Name</th>
			<th scope="col">p_id</th>
			<th scope="col">pr</th>
			<th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
		<?php foreach ($show_file as $i => $show): ?>
			<tr>
            	<td><a href="showfile.php?id=<?php echo $show['id'] ?>"><!-- <?php //echo $show['user_id'] ?> --></a></td>
        <td><?php $str=$show['path_location']; 
                  //Removing Directory name
                  //$result= substr_replace($str ,"",0,11) ;
                  echo $str;

                  ?></td>

				<td><?php echo $show['printer_id'] ?></td>
				<td><?php echo $show['print_id'] ?></td>
	</tr>
    <?php endforeach; ?>
		

        </tbody>
</table>

   </div><!-- end show file -->
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>