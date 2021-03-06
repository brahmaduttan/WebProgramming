<html>
<body>

<h1>Registeration Form</h1>
<form method="post" action="#">
  Name: <input type="text" name="name"><br>
  Units Consumed : <input type="number" name="units"><br>
  Rate(Rs.) : <input type="number" name="rate"><br><br>
  <input type="submit">
</form>

<?php

$name = "";
$email = "";
$phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field

  $name = $_POST['name'];
  $units = $_POST['units'];
  $rate = $_POST['rate'];

  echo "-------------------------------------------------------------------------";
  echo "<h3>Kerala State Electricity Board (KSEB)</h3>";
  echo "<br><br>";
  echo "Consumer name : ".$name."<br>";
  echo "Units Consumed : ".$units."<br>";
  echo "Rate per unit : Rs.".$rate."<br><br>";

  echo "<h4>Total : Rs.".($rate*$units)."</h4><br>";
  echo "-------------------------------------------------------------------------";

}

?>

</body>
</html>