<?php

require 'contactconfig.php';

$username = $_POST["u.name"];
$useremail = $_POST["u.email"];
$usermessage = $_POST["u.message"];

$sql = "INSERT INTO pawsite1 VALUES ('$username','$useremail','$usermessage')";

if($con->query($sql))
{
  echo "Insert Successful";
}
else
{
  echo "Error".$con->error;
}
$con->close();
?>