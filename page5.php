  <head>
    <?php require_once("header.php"); ?>
  </head>
  <body>
    <h1>Cars</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>CarID</th>
      <th>Color</th>
      <th>Make</th>
      <th>Year</th>
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

$sql = "SELECT * from Cars";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["CarID"]?></td>
    <td><?=$row["Color"]?></td>
    <td><?=$row["Make"]?></td>
    <td><?=$row["Year"]?></td>
    <td>
      <form method="post" action="page5post.php">
        <input type="hidden" name="id" value="<?=$row["Color"]?>" />
        <input type="submit" value="Same Color" />
      </form>
    </td>
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
Click the 'Same Color' button to filter by cars of the same color. 
</footer>
