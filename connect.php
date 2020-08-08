<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
//////////////////////////Regular Connect Server only//////////////////////
/*//regular
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// $conn = @mysqli_connect($servername, $username, $password);// if you dont want see error

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully regular";
*/
////////////////////////// OOP Connect Server only//////////////////////
/*//object oriented
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully OOP";
*/

////////////////////////// OOP Insert data only///////////////////

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO user_info (Name, Surname, Username, Password)
// VALUES ('John', 'Doe', 'john', '12345')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully using OOP";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

////////////////////////// regular Insert data only///////////////////
// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "INSERT INTO user_info (Name, Surname, Username, Password)
// VALUES ('Jimmy', 'Cox', 'jimmy', '12345')";

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully Using regular";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);

////////////////////////// OOP Insert multiple data only///////////////////
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO user_info (Name, Surname, Username, Password)
// VALUES ('Jimmy1', 'Cox', 'jimmy1', '12345');";
// $sql .= "INSERT INTO user_info (Name, Surname, Username, Password)
// VALUES ('Jimmy2', 'Cox', 'jimmy2', '12345');";

// if ($conn->multi_query($sql) === TRUE) {
//   echo "New multiple records created successfully OOP";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

////////////////////////// Regular Insert multiple data only///////////////////

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "INSERT INTO user_info (Name, Surname, Username, Password)
// VALUES ('Jimmy3', 'Cox', 'jimmy4', '12345');";
// $sql .= "INSERT INTO user_info (Name, Surname, Username, Password)
// VALUES ('Jimmy5', 'Cox', 'jimmy6', '12345');";

// if (mysqli_multi_query($conn, $sql)) {
//   echo "New records created successfully Regular";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);


////////////////////////// OOP Show data only///////////////////
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT ID, Name, Surname, Username, Password FROM user_info";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["Surname"]. " - Username: " . $row["Username"] . " - Password: " . $row["Password"] . "<br>";
//   }
//   echo "using oop <br>";
// } else {
//   echo "0 results";
// }
// $conn->close();


////////////////////////// Regular Show data only///////////////////
// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "SELECT ID, Name, Surname, Username, Password FROM user_info";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["Surname"]. " - Username: " . $row["Username"] . " - Password: " . $row["Password"] . "<br>";
//   }
//   echo "using regular <br>";
// } else {
//   echo "0 results";
// }

// mysqli_close($conn);

////////////////////////// OOP Delete data only///////////////////
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // sql to delete a record
// $sql = "DELETE FROM user_info WHERE Name='John'";

// if ($conn->query($sql) === TRUE) {
//   echo "OOP Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $conn->error;
// }

// $conn->close();

////////////////////////// Regular Delete data only///////////////////
// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// // sql to delete a record
// $sql = "DELETE FROM user_info WHERE Name='Jimmy'";

// if (mysqli_query($conn, $sql)) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . mysqli_error($conn);
// }

// mysqli_close($conn);

////////////////////////// OOP Update data only///////////////////
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "UPDATE user_info SET Username='John' WHERE Surname='Hannigan'";

// if ($conn->query($sql) === TRUE) {
//   echo "OOP Record updated successfully";
// } else {
//   echo "Error updating record: " . $conn->error;
// }

// $conn->close();

////////////////////////// Regular Update data only///////////////////
// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "UPDATE user_info SET Username='jimmy' WHERE Surname='Hannigan'";

// if (mysqli_query($conn, $sql)) {
//   echo "Regular Record updated successfully";
// } else {
//   echo "Error updating record: " . mysqli_error($conn);
// }

// mysqli_close($conn);

?>