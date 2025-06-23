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

    $sql = "INSERT INTO user_data (full_name, email, contactno, password, confirm_password) 
            VALUES ('$full_name', '$email', '$contactno', '$password', '$confirm_password')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>location.replace("admin1.php")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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

        .container {
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
            margin-bottom: 10px;
        }

        .formdec{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        #submit
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
            background-color: #0056b3;
        }
    </style>
    </head>
    <body>
        <div class="container " >
        <form method="post" action="add.php">
            <label>FULL NAME</label><br>
            <input type="text" required class="full_name" id="full_name" name="full_name"><br>
            <label>EMAIL ADDRESS</label><br>
            <input type="text"required class="email" id="email" name="email"><br>
            <label>MOBILE NUMBER</label><br>
            <input type="tel"required class="contactno" id="contactno" name="contactno"><br>
            <label>PASSWORD</label><br>
            <input type="text" required class="password" id="password" name="password"><br>
            <label>CONFIRM PASSWORDr</label><br>
            <input type="text" required maxlength="10" pattern="{0-9}[10]" class="confirm_password" id="confirm_password" name="confirm_password"><br>
            <button type="submit" id="submit" name="submit">Submit</button>
        </form>
        <div> 
    </body>
</html>