<?php require_once("header.php"); ?>
<!doctype html>
<html lang="en">

<?php
$servername = "localhost";
$username = "asoltiso_asoltis";
$password = "Tucker0509";
$dbname = "asoltiso_homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT InstructorID, LastName, FirstName FROM Instructor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["InstructorID"]. " - Name: " . $row["LastName"].", " . $row["FirstName"]. "<br>";
    <tr>           
                    <td bgcolor="#D1FFC2"><?php echo $row["InstructorID"] ?></td>
                    <td bgcolor="#D1FFC2"><?php echo $row["LastName"] ?></td>
                    <td bgcolor="#D1FFC2"><?php echo $row["FirstName"] ?></td>
                    <td bgcolor="#D1FFC2">Debug- Delete- Edit</td>
                        </tr>      
  }
} else {
  echo "0 results";
}
$conn->close();
?>