<?php 

$students = array("Nihal", "Bhramman", "Shaad", "Nithin", "Amjyad", "Arjun", "Abhilash", "Razik");
echo "Normal Array : <br>";
print_r($students);
echo "<br> Ascending Sort : <br>";
asort($students);
print_r($students);
echo "<br> Descending Sort : <br>";
arsort($students);
print_r($students);

?>