<html>
<body>
  
<center>
        <table border="1">
        <form name="form1" action="#" method="POST">
            <tr>
                <th colspan="2"><center><h2>User Registration</h2></center></th>
            </tr>
            <tr>
                <td><label>Name</label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label>UserName</label></td>
                <td><input type="text" name="u_name"></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td><input type="password" name="p_word"></td>
            </tr>
            <tr>
                <td><label>District</label></td>
                <td><input type="text" name="dist"></td>
            </tr>
            <tr>
                <td><label>Category</label></td>
                <td><input type="radio" class="form-control" name="cat_type" placeholder="" required="required">Panchayath
                    <input type="radio" class="form-control" name="cat_type" placeholder="" required="required">Muncipality<br></td>
            </tr>
            <tr>
                <td><label>Panchayath/Muncipality Name</label></td>
                <td><input type="text" name="cat_name"></td>
            </tr>
            <tr>
                <td colspan="2"><center><button onclick="" name="register">Register</button></center></td>
            </tr>
            </form>
        </table>
    </center>

<?php

include_once 'dbconnection.php';
$name = "";
$username = "";
$password = "";
$district = "";
$category = "";
$category_name = "";
if(isset($_POST['register']))
{	 
	 $name = $_POST['name'];
	 $username = $_POST['u_name'];
	 $password = $_POST['p_word'];
	 $district = $_POST['dist'];
	 $category = $_POST['cat_type'];
	 $category_name = $_POST['cat_name'];
	
   $valid = true;

   if (empty($name)) {
     echo "<script>alert('Please enter name.')</script>";
     $valid = false;
   }
 
   if (empty($username)) {
     echo "<script>alert('Please enter username.')</script>";
     $valid = false;
   } 
 
   if (empty($password)) 
    {
     echo "<script>alert('Please enter password.')</script>";
     $valid = false;
    }
  elseif (strlen($_POST["p_word"]) <= '6') 
    {
      $passwordErr = "Your Password Must Contain At Least 6 Characters!";
    }
  elseif(!preg_match("#[0-9]+#",$password)) 
    {
      $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
  elseif(!preg_match("#[A-Z]+#",$password)) 
    {
      $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
  elseif(!preg_match("#[^\W]+#",$password)) 
    {
      $passwordErr = "Your Password Must Contain At Least 1 Special Charecter!";
    } 
    else 
    {
      $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
    }

  if (empty($district)) {
    echo "<script>alert('Please enter your district')</script>";
    $valid = false;
  }

  if (empty($category)) {
    echo "<script>alert('Please enter category type')</script>";
    $valid = false;
  } 

  if (empty($category_name)) {
    echo "<script>alert('Please enter category name.')</script>";
    $valid = false;
  }
  if($valid){
    $name = "";
    $username = "";
    $password = "";
    $district = "";
    $category = "";
    $category_name = "";
    echo "<script>alert('Submission successful!')</script>";
    
  }
	 $sql = "INSERT INTO green_panchayah (name,username,password,district,category,category_name) VALUES ('$name','$username','$password','$district','$category','$category_name')";
	 if (mysqli_query($dbconn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($dbconn);
	 }
	 mysqli_close($dbconn);
}

?>
</body>
</html>