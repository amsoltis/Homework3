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

$sql = "SELECT InstructorID, LastName, FirstName FROM Instructor";
$result = $conn->query($sql);
       
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo <tr>
                  <td> <?$row["InstructorID"]?></td>
                  <td> <?$row["LastName"]?></td>
                  <td> <?$row["FirstName"]?></td>
                </tr>;
    }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table>
}
$conn->close();
?>