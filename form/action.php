<html>
<head>
<title>RegistrationForm</title>
</head>
<body>
<center>
<br><br>
<?php
foreach($_POST as $key=>$value){
if(empty($_POST[$key])){
$message=ucwords($key)."fieldisrequired";
break;
}
}
/*PasswordMatchingValidation*/
if($_POST['password']!=$_POST['confirm_password']){
$message='Passwordsshouldbesame<br>';
}

/*EmailValidation*/
if(!isset($message)){
if(!filter_var($_POST["userEmail"],FILTER_VALIDATE_EMAIL)){
$message="InvalidUserEmail";
}
}
/*Validationtocheckifgenderisselected*/
if(!isset($message)){
if(!isset($_POST["gender"])){
$message="Genderfieldisrequired";
}
}

/*ValidationtocheckifTermsandConditionsareaccepted*/
if(!isset($message)){
if(!isset($_POST["terms"])){
$message="AcceptTermsandconditionsbeforesubmit";
}
}
print("<table width='700'><tr><th colspan=2>RegistrationDetails</th></tr>");
print("<tr><td align='right'>UserName:</td><td>".$_POST["userName"]."</td></tr>");
print("<tr><td align='right'>FirstName:</td><td>".$_POST["firstName"]."</td></tr>");

print("<tr><td align='right'>LastName:</td><td>".$_POST["lastName"]."</td></tr>");

print("<tr><td align='right'>Email:</td><td>".$_POST["userEmail"]."</td></tr>");

print("<tr><td align='right'>Gender:</td><td>".$_POST["gender"]."</td></tr>");
print("<tr><th colspan=2></th></tr></table></body></html>");
?>
