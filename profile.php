<?php include 'profileconfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .profile-icon {
            float: left;
        }
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 20px;
            color: white;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #ddd;
            color: black;
        }
        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }
        .content {
            margin-top: 80px;
            padding: 20px;
        }
        .editable-input {
            margin-bottom: 10px;
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<script>
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
}
</script>

<div class="navbar">
    <a class="profile-icon" href="javascript:void(0);" onclick="openNav()">&#9776;</a>
    <a href="home.php">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
</div>

<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <form class="content" method="post" action="update_profile.php">
        <?php
        // Fetch user data from the database
        $sql = "SELECT * FROM users WHERE id = 1"; // Assuming the profile data is for user with ID 1
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input class="editable-input" type="text" name="name" id="name" placeholder="Name" value="<?= $row['name'] ?>">
        <input class="editable-input" type="email" name="email" id="email" placeholder="Email" value="<?= $row['email'] ?>">
        <input class="editable-input" type="tel" name="telephone" id="telephone" placeholder="Telephone" value="<?= $row['telephone'] ?>">
        <textarea class="editable-input" name="address" id="address" placeholder="Shipping Address"><?= $row['address'] ?></textarea>
        <input type="submit" value="Submit">
    </form>
</div>

<div class="content">
    <h2>Profile</h2>
    <p>This is the profile page</p>
</div>



</body>
</html>



