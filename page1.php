<?php require_once("header.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

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


        echo '
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
<div class="container">
 <div class="col-md-12">
 <div class="page-header">
 <h1>
 How to use bootstrap tables to  Display data from MySQL using PHP
 </h1>
 </div>
 
 
 <div class="panel panel-success">
 <div class="panel-heading "> 
 <span class=""> This Source Code Provided By<br>
 <a href="http://sourcecodessite.com">SourceCodeSite.com</a> </span> 
 
 </div>
 
 <div class="panel-body">
 <div class="row">
 <div class="col-md-12">
 
 <table id="table"
                 	data-show-columns="true"
                 data-height="460">
 </table>
 </div>
 </div>
</div> 
</div>
</div>
</div>';





    }
} else {
    echo "0 results";
} 
?>