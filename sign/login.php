 <?php

session_start();

if(isset($_POST['full_name']) && isset($_POST['password']))            
{
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];
    $con=mysqli_connect('localhost','root','','sign up');
    if (!$con)
     {
                die("Connection failed: " . mysqli_connect_error());
    
    
    }
           

    if(empty($full_name))
    {
        header("Location: login.php");
        exit();
    }
    else 
    {
        $sql = "SELECT * FROM user_data WHERE full_name='$full_name' AND password='$password'";
        $result = mysqli_query($con, $sql);


if(mysqli_num_rows($result) > 0)
{
        if($full_name==="admin" && $password=== "123456")
        {
            header("Location: admin1.php");
                      exit();
        }
        else
        {
            header("Location: home.php");
            exit();

        }
            exit(); // Make sure no other output is sent
} 

else
{
    echo "<script>alert('Username or Password incorrect');</script>";
    header("Location:Loginpage.php ");
            exit();
}
    }
}





?> 