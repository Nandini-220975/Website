<?php
$servername="localhost";
$username="root";
$password="";
$database="mydatabase";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql="INSERT INTO users(name,email,password) VALUES('$name','$email','$pass')";
if(mysqli_query($conn,$sql)){
    echo "Data inserted successfully";
}
else{
    echo "Error".mysqli_error($conn);
}
mysqli_close($conn);
?>