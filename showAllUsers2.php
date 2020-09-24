<?php  
require_once 'controller/Userinfo.php';

$users2 = fetchAllUser2();

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
			margin-left: 101px;

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
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
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
                    <td><?php echo $user2['email'] ?></td>
                    <td><?php echo $user2['shop_name'] ?></td>
                    <td><?php echo $user2['address'] ?></td>
				<td><a href="editUser2.php?id=<?php echo $user2['id'] ?>">Edit</a>&nbsp<a href="controller/deleteUser2.php?id=<?php echo $user2['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
<?php echo "<button style='float:right;'><a href='controller/welcome3.php'>Back</a></button>"; ?>


		</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>