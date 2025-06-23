<?php
    
   $con = new mysqli("localhost","root","","pawsite 1");

   if($con->connect_error)
   {
    die("Connection failed ".$con->connect_error);
   }
   else
   {
    echo "Successful";
   }

?>