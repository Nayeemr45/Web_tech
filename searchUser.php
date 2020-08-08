
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style>
		.container{
      margin-top: 200px;
    margin-left: 400px;
    }

    .navbar{
      width: 318px;
    }

    h1{
      float: left;
    margin-bottom: 10px;
    font-size: 21px;
    margin-top: 15px;
    margin-right: -9px;
    color: #17a2b8;
    }

	</style>
</head>
<body>
   <!-- [SEARCH FORM] -->
<!--    <form method="post" action="controller/findUser.php">
      <h1>SEARCH FOR USERS</h1>
      <input type="text" name="user_name" required/>
      <input type="submit" name="findUser" value="Search"/>
    </form> -->

  <div class="container">
  <h1>SEARCH FOR USERS :</h1>

  <nav class="navbar navbar-light">
  <form class="form-inline" method="post" action="controller/findUser.php">

    <input class="form-control mr-sm-2" type="search" placeholder="Search User Name" aria-label="Search" name="user_name" required/>
    <button class="btn btn-outline-info my-2 my-sm-0" type="submit" name="findUser">Search</button>
  </form>
</nav>
  </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>