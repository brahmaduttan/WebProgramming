
<html>
<head>
<title>ELECTRICITYBILL</title>
</head>
<body>
<br><br>

<?php
$consumer_number=$_GET["consumer_number"];
$consumer_name=$_GET["consumer_name"];
$previous_reading=$_GET["previous_reading"];
$present_reading=$_GET["present_reading"];
$unit=$present_reading-$previous_reading;
if($unit<100){
$amt=$unit*3;
}elseif(100<=$unit&&$unit<=200){
$amt=$unit*4;
}elseif(200<=$unit&&$unit<=300){
$amt=$unit*5;
}else{
$amt=$unit*6;
}
echo'<table width="40%" border="0" cellspacing="0" cellpadding="10">
<tr><th colspan="2"><h2>ELECTRICITYBILL</h2></th></tr>';
echo"<tr>
<td>Consumer Number</td>
<td>$consumer_number</td>
</tr>";
echo"<tr><td>Customer Name</td>
<td>$consumer_name</td>
</tr>";
echo"<tr><td>Previous Reading</td>
<td>$previous_reading</td>
</tr>";
echo"<tr><td>Present Reading</td>
<td>$present_reading</td>
</tr>";
echo"<tr><td>Unit consumed</td>
<td>$unit</td>
</tr>";
echo"<tr><td>Amount</td>
<td>$amt</td>
</tr>";
echo'<tr><th colspan="2"></th></tr></table></body></html>';
?>