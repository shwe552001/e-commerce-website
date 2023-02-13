<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $pswd = $_POST['pass'];  
      
        
        $username = stripcslashes($username);  
        $pswd = stripcslashes($pswd);  
        $username = mysqli_real_escape_string($con, $username);  
        $pswd = mysqli_real_escape_string($con, $pswd);  
      
        $sql = "select *from log where username = '$username' and pswd = '$pswd'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            header("location:headernewest.php");
        }  
        else{  
           
          header("location:i.html");
          echo "<h1>INVALID</h1>";
        }     
?>