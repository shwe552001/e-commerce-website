<?php  
    
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'dblog';  
$usn=$_POST['username'];
$email=$_POST['email'];
$pswd=$_POST['pass'];
$city=$_POST['city'];

  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}    
  
$sql = "INSERT INTO LOG(username,email,pswd,city) VALUES ('$usn','$email','$pswd','$city')";  
if(mysqli_query($conn, $sql)){  
 header("location:indexnew.php");
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>