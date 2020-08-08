<?php  
require_once 'controller/Userinfo.php';

$user = fetchUser($_GET['id']);

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
<div class="container">
		<table class="table table-hover">
  <thead class="bg-info th">
    <tr>
      <th scope="col">User_id</th>
			<th scope="col">User_name</th>
			<th scope="col">Password</th>
			<th scope="col">Email</th>
			<th scope="col">Date of birth</th>
			<th scope="col">Gender</th>
			<th scope="col">Address</th>
			<th scope="col">Type</th>
    </tr>
  </thead>
	<tr>
	<td><a href="showUser.php?id=<?php echo $user['id'] ?>"><?php echo $user['user_id'] ?></a></td>
				<td><?php echo $user['user_name'] ?></td>
				<td><?php echo $user['password'] ?></td>
				<td><?php echo $user['email'] ?></td>
				<td><?php echo $user['date_of_birth'] ?></td>
				<td><?php echo $user['gender'] ?></td>
				<td><?php echo $user['address'] ?></td>
				<td><?php echo $user['type'] ?></td>
	</tr>

</table>

	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>