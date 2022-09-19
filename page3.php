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

$sql = "SELECT I.InstructorID, LastName, FirstName, CourseID, CourseNumber, Section FROM Instructor I Join Courses C on I.InstructorID = C.InstructorID";
$result = $conn->query($sql);
       
 if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["I.InstructorID"]. '</td>
                  <td>' . $row["LastName"]. '</td>
                  <td> '.$row["FirstName"] .'</td>
                  <td> '.$row["CourseID"] .'</td>
                  <td>' . $row["CourseNumber"] .'</td>
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