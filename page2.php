  <head>
    <?php require_once("header.php"); ?>
  </head>
<html>
  <body>
    <h1>Courses</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>CourseID</th>
      <th>InstructorID</th>
      <th>Course</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
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

$sql = "SELECT CourseID, InstructorID, CourseNumber, Section from Courses";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["CourseID"]?></td>
    <td><a href="page6.php?id=<?=$row["InstructorID"]?>"><?=$row["InstructorID"]?></a></td>
    <td><?=$row["CourseNumber"]."-"?><?=$row["Section"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
  
<footer>
Click the 'InstructorID' to see all courses taught by each professor.
</footer>
