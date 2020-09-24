<?php 

require_once 'controller/Userinfo.php';
$show_file = fetchShow_file($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/ps.PNG">

	<style>
		.container{
			margin-top:30px;
		}
		table,td,th{
			border:3px solid black;
		}
		.th{
			text-align:center;
			text-transform: uppercase;
			color:white;
		}
	</style>
</head>
<body>
<form action="controller/print_queue.php" method="POST" enctype="multipart/form-data" id="type">
<div class="form-group">
  <input value="<?php echo $_GET['id'] ?>" type="hidden" id="id" name="id" class="form-control">
</div>

<?php echo $_GET['id'] ?>
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
<input type="submit" name = "print" value="ADD">
</form>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>