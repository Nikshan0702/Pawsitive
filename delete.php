<?php
    $conn = mysqli_connect('localhost','root','','sign up');
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

    $delete = $_GET['delete'];

    $sql = "delete from user_data  where password = '$delete' ";


    if(mysqli_query($conn,$sql))
    {
        echo '<script> location.replace("admin1.php")</script>';  
    }
    else
    {
        echo "Some thing Error" . $conn->error;
    }
           
?>