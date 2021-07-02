<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Panchayath</title>
</head>
<body><CENTER>
<div >
    <form action="Display.php" method="post" >
		<h2>Welcome</h2>
        <br>Lets hold together for our future generation to make our panchayath/munciplaity name, plastic free
       		<br>ADDRESS:<br>
		<div ><input type="text"  name="add"  required="required"></div>
		<br>
		PHONE NO.:<br>
		<input type="text" name="phone" required="required">
		<br>
		KIND OF WASTE:<br>
		<input type="radio"  name="cat1" >Plastic
            <input type="radio" name="cat2" >Others<br>
		<br>
		KG OF PLASTIC WASTE MATERIAL:<br>
		<input type="text" name="kg">
		<br><br>
		<input type="submit" name="save" value="submit">
        <div > <br><a href="logout.php">Logout</a></div>
    </form>
	
</div>
</body>
</html>