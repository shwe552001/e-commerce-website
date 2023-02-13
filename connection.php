<?php      
    $host = "localhost";  
    $user = "root";  
    $pswd = '';  
    $db_name = "dblog";  
      
    $con = mysqli_connect($host, $user, $pswd, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>