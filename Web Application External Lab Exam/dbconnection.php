<?php
 $SERVER_NAME="localhost";
 $USERNAME="root";
 $PASSWORD="";
 $DB_NAME="government";
 
 $dbconn = mysqli_connect($SERVER_NAME,$USERNAME,$PASSWORD,$DB_NAME);
     
     if(mysqli_connect_error()){
     echo "failed to connect";
     exit();
     }
     echo "Connection successfull...!!!";
?>