<?php

$conn = mysqli_connect('localhost','root','','sign up');


if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection Success";

?>