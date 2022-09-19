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

$sql = "SELECT CourseID, InstructorID, CourseNumber, Section FROM Courses";
$result = $conn->query($sql);
       
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

     <header>
    <a href="./page2.php">link text</a>
    </header>
        echo '<tr>
                  <td scope="row">' . $row["CourseID"]. '</td>
                  <td>' . $row["InstructorID"] .'</td>
                  <td> '.$row["CourseNumber"] .'</td>
                  <td> '.$row["Section"] .'</td>
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