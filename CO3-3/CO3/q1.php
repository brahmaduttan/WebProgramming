<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<br>";
  echo "<table border='1' align='center'>";
  echo "<tr><td colspan='5' align='center'><b>Student List</b></td></tr>";
  echo "<tr><th>Student ID</th><th>Name</th><th>City</th><th>Phone No.</th><th>Course</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["student_id"]."</td><td>". $row["name"]."</td><td>". $row["city"]."</td><td>". $row["phone"]."</td><td>". $row["course"]."</td></tr>";
  }
  echo "</table>";

} else {
  echo "0 results";
}


mysqli_close($conn);

?>
