<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Panchayath/Login Portal</title>
</head>
<body>
    <center>
        <table border="1">
        <form name="form1" action="waste_disposal.php" method="POST">
            <tr>
                <th colspan="2"><center><h2>GREEN PANCHAYATH/MUNCIPALITY</h2></center></th>
            </tr>
            <tr>
                <td><label>UserName</label></td>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td><button onclick="validation()" name="login">Login</button></td>
                <td><button name="signup"><a>Sign Up</a></button></td>
            </tr>
            </form>
        </table>
    </center>
    
<script>
function validation()
{

var un=document.form1.uname.value;
var pswd=document.form1.pwd.value;
if(empty(un))
{
    alert("Enter your username");
}
if(empty(pswd))
{
    alert("Enter your password");
}
}
</script>
<?php

    include_once 'dbconnection.php';

    if(isset($_POST["login"]))
    {
        if(!$dbconn)
        {
            echo"Database connection failed: ".mysql_error();
        }
        $username=$_POST['uname'];
        $password=$_POST['pwd'];
        $query="SELECT * FROM green_panchayah(username,password) WHERE username='$username'AND password='$password'";
        mysqli_query($dbconn,$query);
        {
            if(mysqli_num_rows($query) == 1)
            {
                header("location: waste_disposal.php");
            }
            else
            {
                echo"<script>alert('Please enter a valid Username and Password...!!!')</script>";
            }
        }
}
?>
</body>
</html>