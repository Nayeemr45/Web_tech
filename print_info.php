<?php 

require_once 'controller/Userinfo.php';
$show_file = fetchShow_file($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
<?php foreach ($show_file as $i => $show): ?>

    <input type="hidden" value="<?php $show['user_id']?>" id="user_id" name="user_id" class="form-control">
    <input type="hidden" value="<?php $show['printer_id']?>" id="path_location" name="" class="form-control">
    <input type="hidden" value="<?php $show['id']?>" id="id" name="id" class="form-control">
  
 <button type="submit" name = "print" class="btn btn-primary">Confirm</button>
 <?php endforeach; ?>

</form>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>