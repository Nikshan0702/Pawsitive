<?php
$conn = mysqli_connect('localhost', 'root', '', 'sign up');
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$edit = isset($_GET['edit']) ? $_GET['edit'] : '';


mysqli_close($conn);
?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'sign up');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "UPDATE user_data SET 
            full_name='$full_name', 
            email='$email', 
            contactno='$contactno', 
            password='$password', 
            confirm_password='$confirm_password'
            WHERE password='$edit'";

    if (mysqli_query($conn, $sql)) {
        echo '<script> location.replace("admin1.php")</script>';
    } else {
        echo "Something Error" . $conn->error;
    }
}

mysqli_close($conn);
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Add</title>
        <style>
        body 
        {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container
        {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label
        {
            display: block;
            font-weight: bold;
            margin-bottom: auto;
        }

        .formdec
        {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        #button
        {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover 
        {
            background-color: #9c5312; 
        }
    </style>
    </head>
    <body>
        <div class="container">
        <form method="post">
        <label>FULL NAME</label><br>
            <input type="text" required class="full_name" id="full_name" name="full_name">

            <br><label>EMAIL ADDRESS</label>
            
            <input type="text"required class="email" id="email" name="email"><br>

            <label>MOBILE NUMBER</label>

            <input type="text"required maxlength="10" pattern="{0-9}[10]" class="contactno" id="contactno" name="contactno"><br>

            <label>PASSWORD</label>

            <input type="password" required class="password" id="password" name="password"><br>
            
            <label>CONFIRM PASSWORDr</label>

            <input type="password" required  class="confirm_password" id="confirm_password" name="confirm_password"><br>

            <button type="submit" id="submit" name="submit">Submit</button>
        </form>
        <div>
    </body>
</html>