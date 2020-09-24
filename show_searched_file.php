<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/ps.PNG">

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
  <!--       <td> <input type="button" id="bt"  value="Print PDF" /></td>  -->
          <td>
             
           <button type="submit" name="print" onclick="print1('../uploads/<?php echo $data_queue['user_id'] ?>/<?php echo $data_queue['path_location'] ?>')">Preview</button>
          
           <button type="submit" name="print" onclick="print('../uploads/<?php echo $data_queue['user_id'] ?>/<?php echo $data_queue['path_location'] ?>')">Print PDF</button>
           
           <a href="print_info.php?path_id=<?php echo $data_queue['path_id'] ?>&& price_id=<?php echo $data_queue['price_id']?>&& user_id=<?php echo $data_queue['user_id']?> && path_location=<?php echo $data_queue['path_location']?>">
           <button type="submit" name="print" >ADD</button></a>
           
           <p><span style="color:red;">*</span> Must Click <span style="color:blue;">ADD </span>Button After <span style="color:blue;">print</span></p>
         
          </td>

		<?php endforeach; ?>

  </tbody>

</table>
<?php echo "<button style='float:right;'><a href='welcome2.php'>Logout</a></button>"; ?>

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
    
	let print1 = (doc) => {
    	let objFra = document.createElement('iframe');   // Create an IFrame.
        objFra.style.visibility = 'show';    // Hide the frame.
        objFra.style.width = '820px';    
        objFra.style.height = '720px';    
        objFra.src = doc;                      // Set source.
        document.body.appendChild(objFra);  // Add the frame to the web page.
        objFra.contentWindow.focus();       // Set focus.
    }
</script>
</body>
</html>