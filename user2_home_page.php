<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap file -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Custom Css file -->
    <link rel="stylesheet" href="../CSS/user2.css">
    <link rel="stylesheet" href="../CSS/adminlte.min.css">
    <link rel="shortcut icon" href="../images/ps.PNG">

   
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light main_nav">
      <a class="navbar-brand" href="#"><span style= "color : #ff4a4a">Print</span> solution</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto text-right">
          <li class="nav-item active">
            <a class="nav-link" href="#" id="home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../how_it_works3.php">How it works</a>
          </li>
          <li class="nav-item">
          <a class="nav-link log_reg" href="#">Logged in as <span style="color : #ea3f80;  text-transform: uppercase;"><strong><?php echo $logged_as; ?></strong></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link log_reg" href="logout3.php"><span style ="color : #00346b">LogOut</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="sidebar" id="sidebar">
      <ul>
        <li><a href="#" id="home" class="btn">
          <span class="title">Home</span>
          </a>
        </li>
        <li><a href="#" id="print_file" class="btn">
          <span class="title">Print file</span>
          </a>
        </li>
        <li><a href="#" id="print_info" class="btn">
          <span class="title">Print Info</span>
          </a>
        </li>
        <li><a href="#" id="profile" class="btn">
         <span class="title">Profile</span>
          </a>
        </li>
      </ul>
    </div>
  



 <!--    <div class="header">
      <h1>Total amount : <span style="color:blue;"><?php echo $totalamount1; ?></span>/= BDT</h1>
    </div>
 -->
    <div class="inside_part">
      <div class="part_1">
      <div class="content">
                <div class="container-fluid">
                    <div class="card-deck">

                        <div class="card-1">
                            <div class="card bg-info">
                                <div class="card-body text-left">
                                    <h3><?php if(isset($totalamount1)){echo $totalamount1;} else{echo "0";} ?>/= BDT</h3>
                                    <p class="card-text">Toatal amount</p>
                                    <div class="footer">
                                        <p class="footer-text">More Info</p>
                                    </div>
                                </div>
                            </div> 
                        </div><!-- end card-1 -->
                        <div class="card-4">
                            <div class="card bg-warning">
                                <div class="card-body text-left">
                                    <h3><?php if(isset($total_print_file)){echo $total_print_file;} else{echo "0";} ?></h3>
                                    <p class="card-text">Printed file</p>
                                    <div class="footer">
                                        <p class="footer-text">More Info</p>
                                    </div>                                
                                </div>
                            </div> 
                        </div><!-- end card-1 -->
                    </div><!-- end card-deck -->
                </div><!-- end container-fluid -->
            </div><!-- end content --> 
          </div><!-- end part_1 -->

      <div class="part_2">
        <div class="print_file">
          <h1>SEARCH FOR USERS :</h1>

        <nav class="navbar navbar-light">
        
          <form class="form-inline" method="post" action="find_print_queue.php" id="myForm" enctype="multipart/form-data">


            <div class="form-group">
              <label for="User_id">Use Id :</label>
              <input type="text" id="user_id" name="user_id" class="form-control" placeholder="Enter User Id" required>
            </div>
          
            <div class="form-group">
              <label for="password">Password :</label>
              <input type="password" id="password" name="password" class="form-control"  placeholder="Enter Password" required>
            </div>
            <button class="btn btn-info my-2 my-sm-0" type="submit"  name="find_print_queue">Search</button>
          </form>
          
          <div class="qr-scan">
            <a href="../qr.php">
            <button class="btn btn-info my-2 my-sm-0">Scan</button></a>
          </div>

        </nav>
        </div><!-- end print file -->
      </div><!-- end part_2 -->

      <div class="part_3">
      <table class="table table-hover">
        <thead class="bg-info th">
            <tr>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">print Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($show_info as $i => $s_i): ?>
                <tr>
<!--                     <td><a href="showUser.php?id=<?php echo $user['id'] ?>"><?php echo $user['user_id'] ?></a></td>
 -->                <td><?php echo $s_i['user_name'] ?></td>
                    <td><?php echo $s_i['email'] ?></td>
                    <td><?php echo $s_i['gender'] ?></td>
                    <td><?php echo $s_i['price_amount'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
      </div><!-- end part_3 -->

      <div class="part_4">
        <div class="profile">       
          <div class="profile_button">
            <button id="show" type="button" class="btn btn-info btn-lg but_css">Show Info</button>
            <button id="edit" type="button" class="btn btn-secondary btn-lg but_css">Edit Info</button>
          </div><!-- end profile_button -->
          
          <?php foreach ($Searched_login_Users as $i => $user): ?>

          <div class="show_info">
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
                <span class ="span_color"><?php echo $user['email']; ?></span>
              </div>
              <div class="form-group">
                <label for="shop_name">Shop Name :</label>
                <span class ="span_color"><?php echo $user['shop_name']; ?></span>
              </div>
              <div class="form-group">
                <label for="address">Address :</label>
                <span class ="span_color"><?php echo $user['address']; ?></span>
              </div>
          </div><!-- end show_info -->
          <?php endforeach; ?>

          <?php foreach ($Searched_login_Users as $i => $user): ?>
          <div class="edit_info">
            <form action="updateUser.php" method="POST">
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
                <label for="shop_name">Shop Name :</label>
                <input value="<?php echo $user['shop_name'] ?>" type="text" id="shop_name" name="shop_name" class="form-control"  placeholder="Enter Shop Name">
              </div>
              <div class="form-group">
                <label for="address">Address :</label>
                <input value="<?php echo $user['address'] ?>" type="text" id="address" name="address" class="form-control"  placeholder="Enter Address">
              </div>
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
              <button class="btn btn-info btn-lg but_css" type="submit" name = "updateUser2" value="Update">Update</button>
            </form>
          </div>  
          <?php endforeach; ?>    
        </div>
      </div><!-- end part_4 -->
    </div><!-- end inside_part -->
</div>

<!-- Bootstrap file -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Javascript file -->
<script src="../js/user2_home_page.js"></script>
</body>
</html>