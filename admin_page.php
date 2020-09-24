<?php  
require_once 'controller/Userinfo2.php';

$users = fetchAllUser();
$users2 = fetchAllUser2();
$file2 = fetchShow_file_admin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/adminlte.min.css">
    <link rel="shortcut icon" href="../images/ps.PNG">

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
        <a id="p" class="nav-link log_reg" href="#">Logged in as <span style="color : #ff4a4a;  text-transform: uppercase;"><strong>ADMIN</strong></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link log_reg" href="logout2.php"><span style ="color : #00346b">LogOut</span></a>
      </li>
    </ul>
  </div>
</nav>

 
<div class="sidebar" id="sidebar">
      <ul>
        <li><a href="#" id="home" class="btn">
          <span class="title">Home</span>
          </a></li>
        <li><a href="#" id="show_user1" class="btn">
          <span class="title">Show All User1</span>
          </a></li>
        <li><a href="#" id="show_user2" class="btn">
          <span class="title">Show All User2</span>
          </a></li>
        <li><a href="#" id="show_save_file" class="btn">
          <span class="title">Show Save file</span>
          </a></li>
        <li><a href="#" id="profile" class="btn">
         <span class="title">Profile</span>
          </a></li>
    </ul>
  </div>
  



<!-- <div class="header">
    <h1>Welcome to Print Solution</h1>
</div><!-- end header --> -->

<div class="inside_part">
  <div class="part_1">
<!--       <h1>Welcome to Print Solution</h1>
 -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card-deck">
                    
                        <div class="card-1">
                            <div class="card bg-info">
                                <div class="card-body text-left">
                                    <h3><?php if(isset($total_sell)){ echo $total_sell;} else{ echo "0";} ?>/= BDT</h3>
                                    <p class="card-text">Sell</p>
                                    <div class="footer">
                                        <p class="footer-text">More Info</p>
                                    </div>
                                </div>
                            </div> 
                        </div><!-- end card-1 -->
                        <div class="card-2">
                            <div class="card bg-success">
                                <div class="card-body text-left">
                                    <h3><?php if(isset($total_user1)){ echo $total_user1;} else{ echo "0";} ?></h3>
                                    <p class="card-text">Toatal User1</p>
                                    <div class="footer">
                                        <p class="footer-text">More Info</p>
                                    </div>
                                </div>
                            </div> 
                        </div><!-- end card-2 -->
                        <div class="card-3">
                            <div class="card bg-danger">
                                <div class="card-body text-left">
                                    <h3><?php if(isset($total_user2)){ echo $total_user2;} else{ echo "0";} ?></h3>
                                    <p class="card-text">Toatal User2</p>
                                    <div class="footer">
                                        <p class="footer-text">More Info</p>
                                    </div>
                                </div>
                            </div> 
                        </div><!-- end card-3 -->
                        <div class="card-4">
                            <div class="card bg-dark">
                                <div class="card-body text-left">
                                    <h3><?php if(isset($total_save_file)){ echo $total_save_file;} else{ echo "0";} ?></h3>
                                    <p class="card-text">Save File</p>
                                    <div class="footer">
                                        <p class="footer-text">More Info</p>
                                    </div>                                
                                </div>
                            </div> 
                        </div><!-- end card-4 -->
                        <div class="card-5">
                            <div class="card bg-warning">
                                <div class="card-body text-left">
                                    <h3><?php if(isset($total_print_file)){ echo $total_print_file;} else{ echo "0";} ?></h3>
                                    <p class="card-text">Printed file</p>
                                    <div class="footer">
                                        <p class="footer-text">More Info</p>
                                    </div>                                
                                </div>
                            </div> 
                        </div><!-- end card-5 -->
                        <div class="card-6">
                            <div class="card bg-dark">
                                <div class="card-body text-left">
                                    <h3><?php if(isset($total_request_file)){ echo $total_request_file;} else{ echo "0";} ?></h3>
                                    <p class="card-text">Print request file</p>
                                    <div class="footer">
                                        <p class="footer-text">More Info</p>
                                    </div>                                
                                </div>
                            </div> 
                        </div><!-- end card-6 -->
                    </div><!-- end card-deck -->
                </div><!-- end container-fluid -->
            </div><!-- end content -->
  </div><!-- end part_1 -->

  <div class="part_2">
  <div class="Show_All_User1">
    <table class="table table-hover">
        <thead class="bg-info th">
            <tr>
            <th scope="col">User_id</th>
                    <th scope="col">User_name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $i => $user): ?>
                <tr>
                    <td><a href="showUser.php?id=<?php echo $user['id'] ?>"><?php echo $user['user_id'] ?></a></td>
                    <td><?php echo $user['user_name'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['date_of_birth'] ?></td>
                    <td><?php echo $user['gender'] ?></td>
                    <td><?php echo $user['address'] ?></td>
                    <td><?php echo $user['type'] ?></td>
                    <td><a href="editUser.php?id=<?php echo $user['id'] ?>">Edit</a>&nbsp<a href="deleteUser.php?id=<?php echo $user['id'] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div><!-- end save file -->
 </div><!-- end part_2 -->

  <div class="part_3">
  <div class="Show_All_User2">
  <table class="table table-hover">
        <thead class="bg-info th">
            <tr>
                    <th scope="col">User_name</th>
                    <th scope="col">Shop Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users2 as $i => $user2): ?>
                <tr>
                    <a href="showUser2.php?id=<?php echo $user2['id'] ?>"></a>
                    <td><?php echo $user2['user_name'] ?></td>
                    <td><?php echo $user2['shop_name'] ?></td>
                    <td><?php echo $user2['address'] ?></td>
                    <td><a href="editUser2.php?id=<?php echo $user2['id'] ?>">Edit</a>&nbsp<a href="deleteUser2.php?id=<?php echo $user2['id'] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div><!-- end print file -->
 </div><!-- end part_3 -->

 <div class="part_4">
   <div class="show_save_file">
        <table class="table table-hover auto-index">
        <thead class="bg-info th">
          <tr>
            <th scope="col">serial</th>
            <th scope="col">File Name</th>
            <th scope="col">p_id</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($file2 as $i => $show): ?>
            <tr>
                    <td><a href="showfile_admin.php?id=<?php echo $show['id'] ?>"><!-- <?php //echo $show['user_id'] ?> --></a></td>
              <td><?php $str=$show['path_location']; 
                        //Removing Directory name
                        //$result= substr_replace($str ,"",0,11) ;
                        echo $str;

                        ?></td>

              <td><?php echo $show['id'] ?></td>
              <input type="hidden" name="id" value="<?php echo $show['id'] ?>">
<!--               <td><a href="print_queue.php?id=<?php echo $show['id'] ?>"><button type="submit" name="print">Print</button></a>&nbsp<a href="delete_Save_file.php?id=<?php echo $show['id'] ?>">Delete</a></td>
 -->        </tr>
          <?php endforeach; ?>
          

              </tbody>
      </table>

   </div><!-- end show file -->
 </div><!-- end part_4 -->


 <div class="part_5" >
   <div class="profile">

   <div class="profile_button">
                <button id="show" type="button" class="btn btn-info btn-lg but_css">Show Info</button>
                <button id="edit" type="button" class="btn btn-secondary btn-lg but_css">Edit Info</button>
                </div><!-- end profile_button -->

   <?php foreach ($admin_info as $i => $admin): ?>
    <div class="show_info">

                
                  <div class="form-group">
                    <label for="user_name">User Name :</label>
                    <span class ="span_color"><?php echo $admin['user_name']; ?></span>
                  </div>

                  <div class="form-group">
                    <label for="password">Password :</label>
                    <span class ="span_color"><?php echo $admin['password']; ?></span>
                  </div>
                  <div class="form-group">
                    <label for="email">Email :</label>
                    <span class ="span_color"><?php echo $admin['email']; ?></span>
                  </div>
                  </div><!-- end show_info -->

                  <?php endforeach; ?>
                  <?php foreach ($admin_info as $i => $admin): ?>

                  <div class="edit_info">
                  <form id="frmBox" action="updateUser.php" method="POST" onsubmit="return formSubmit();">

                      <div class="form-group">
                        <label for="password">Password :</label>
                        <input value="<?php echo $admin['password'] ?>" type="text" id="password" name="password" class="form-control"  placeholder="Enter Password">
                      </div>
                      <div class="form-group">
                        <label for="email">Email :</label>
                        <input value="<?php echo $admin['email'] ?>" type="text" id="password" name="password" class="form-control"  placeholder="Enter Password">
                      </div>
                      <input type="hidden" name="id" value="<?php echo $admin['id'] ?>">
                        <input class="btn btn-info btn-lg but_css" type="submit" name = "updateUser3" value="Update">
                        
                      </form>

                      </div><!-- end edit_info -->
                      <?php endforeach; ?>

  </div><!-- end profile -->
 </div><!-- end part_5 -->


</div><!-- end inside_part -->
    </div><!-- end contaiber -->


<script type="text/javascript">
          document.getElementById('home').addEventListener("click", function()
          { document.querySelector('.part_1').style.display = "flex";
            document.querySelector('.part_2').style.display = "none";
            document.querySelector('.part_3').style.display = "none";
            document.querySelector('.part_4').style.display = "none";
            document.querySelector('.part_5').style.display = "none";

         });
          document.getElementById('show_user1').addEventListener("click", function()
          { 
            document.querySelector('.part_1').style.display = "none";
            document.querySelector('.part_2').style.display = "flex";
            document.querySelector('.part_3').style.display = "none";
            document.querySelector('.part_4').style.display = "none";
            document.querySelector('.part_5').style.display = "none";

         });
          document.getElementById('show_user2').addEventListener("click", function()
          { 
            document.querySelector('.part_1').style.display = "none";
            document.querySelector('.part_3').style.display = "flex";
            document.querySelector('.part_2').style.display = "none";
            document.querySelector('.part_4').style.display = "none";
            document.querySelector('.part_5').style.display = "none";

         });
          document.getElementById('show_save_file').addEventListener("click", function()
          { 
            document.querySelector('.part_1').style.display = "none";
            document.querySelector('.part_3').style.display = "none";
            document.querySelector('.part_2').style.display = "none";
            document.querySelector('.part_4').style.display = "flex";
            document.querySelector('.part_5').style.display = "none";

         });
          document.getElementById('profile').addEventListener("click", function()
          { 
            document.querySelector('.part_1').style.display = "none";
            document.querySelector('.part_3').style.display = "none";
            document.querySelector('.part_2').style.display = "none";
            document.querySelector('.part_4').style.display = "none";
            document.querySelector('.part_5').style.display = "flex";
            document.querySelector('.edit_info').style.display = "none";
         });
          document.getElementById('p').addEventListener("click", function()
          { 
            document.querySelector('.part_1').style.display = "none";
            document.querySelector('.part_3').style.display = "none";
            document.querySelector('.part_2').style.display = "none";
            document.querySelector('.part_4').style.display = "none";
            document.querySelector('.part_5').style.display = "flex";
            document.querySelector('.edit_info').style.display = "none";
         });
         
          document.getElementById('show').addEventListener("click", function()
{ 
  document.querySelector('.show_info').style.display = "inline";
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
<script type='text/javascript'>

(function()
{
  if( window.localStorage )
  {
    if( !localStorage.getItem('firstLoad') )
    {
      localStorage['firstLoad'] = true;
      window.location.reload();
    }  
    else
      localStorage.removeItem('firstLoad');
  }
})();

</script>
</body>
</html>