<?php  
require_once 'controller/Userinfo.php';

$shows = fetchShow_print_file();

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
<div class="container-fluid">
		<table class="table table-hover">
  <thead class="bg-info th">
    <tr>
      <th scope="col">User_id</th>
			<th scope="col">File Name</th>
			<th scope="col">p_id</th>
			<th scope="col">pr</th>
    </tr>
  </thead>
  <tbody>
		<?php foreach ($shows as $i => $show): ?>
			<tr>
            	<td><a href="show_print_file.php?id=<?php echo $show['id'] ?>"><?php echo $show['user_id'] ?></a></td>
				<td><?php $str=$show['path_location']; $n="uplo"; echo ltrim($str , $n) ?></td>
				<td><?php echo $show['printer_id'] ?></td>
				<td><?php echo $show['print_id'] ?></td>
	</tr>
    <?php endforeach; ?>
		

        </tbody>
</table>

	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>