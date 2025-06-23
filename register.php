<?php

$full_name=$_POST['full_name'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];


$con=mysqli_connect('localhost','root','','sign up');

$sql = "INSERT INTO user_data (full_name, email, contactno, password, confirm_password) VALUES ('$full_name', '$email', '$contactno', '$password', '$confirm_password')";

$r=mysqli_query( $con, $sql ); 

if($r)
{
    echo"success";
    header("Location: Loginpage.php"); 
    exit(); 
}
else 
{
    echo "wrong";
}

?>
