<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <!-- table -->
<table class="table table-hover">
  <thead class="bg-info th">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">User_id</th>
			<th scope="col">File Name</th>
			<th scope="col">Action</th>
    </tr>
  </thead>
	<tbody>

		<?php foreach ($all_data as $i => $data_queue): ?>
			<tr>
				<td><a href="show_searched_file.php?id=<?php echo $data_queue['id'] ?>"><?php echo $data_queue['id'] ?></a></td>
				<td><?php echo $data_queue['user_id'] ?></td>
				<td><?php echo $data_queue['path_location'] ?></td>
        <td> <input type="button" id="bt" onclick="print('../uploads/<?php echo $data_queue['user_id'] ?>/<?php echo $data_queue['path_location'] ?>')" value="Print PDF" /></td>

<!--  				<td><a href="../print.php?id=<?php echo $data_queue['user_id'] ?>">Print</a></td>
 -->            </tr>
		<?php endforeach; ?>
	</tbody>

</table>
<?php echo '<button><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></button>'; ?>

<!-- end table -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
	let print = (doc) => {
    	let objFra = document.createElement('iframe');   // Create an IFrame.
        objFra.style.visibility = 'hidden';    // Hide the frame.
        objFra.src = doc;                      // Set source.
        document.body.appendChild(objFra);  // Add the frame to the web page.
        objFra.contentWindow.focus();       // Set focus.
        objFra.contentWindow.print();      // Print it.
    }
    
    
    // Using regular js features.
    
//     function print(doc) {
//         var objFra = document.createElement('iframe');
//         objFra.style.visibility = 'hidden';
//         objFra.src = doc;                  
//         document.body.appendChild(objFra);
//         objFra.contentWindow.focus();  
//         objFra.contentWindow.print();  
//     }
</script>
</body>
</html>