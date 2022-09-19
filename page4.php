<?php require_once("header.php"); ?>
<!doctype html>
<html lang="en">

<?php
$servername = "localhost";
$username = "asoltiso_asoltis";
$password = "OUcreate!";
$dbname = "asoltiso_homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Birds";
$result = $conn->query($sql);
       
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["Birdid"]. '</td>
                  <td>' . $row["Name"] .'</td>
                  <td> '.$row["Color"] .'</td>
                  <td> '.$row["Age"] .'</td>
                  <br>
                  </tr>';
    }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table>
<body>
    <form action="handlepost.php" method="post">
Sory by Color: <input type="text" name="color"><br>
<input type="submit">
</form>
  </body>