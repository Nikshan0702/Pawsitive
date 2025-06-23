<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered User details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h3 
        {
            text-align: center;
            margin-bottom: 20px;
        }

        table 
        {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
            background-color: aliceblue; 
        }

        th, td 
        {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th 
        {
            background-color: #f2f2f2;
        }

        tr:hover 
        {
            background-color: #f9f9f9;
        }

        button 
        {
            padding: 8px 16px;
            background-color: #007bff;
            color: #9c5312;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button a 
        {
            text-decoration: none;
            color: #fff;
        }

        button:hover 
        {
            background-color: #0056b3;
        }
    </style>
    </head>
    <body>
        <div class="container">
            <h3>Registered User details</h3>
        </div>
        <div>
            <button><a href="add.php">Add new</a></button>
        </div>
        <div>
            <table border= "1">
                <thead>
                <tr>
                    <th>full_name</th>
                    <th>email</th>
                    <th>contactno </th>
                    <th>password</th>
                    <th>confirm_password</th>
                    
                </tr>
                </thead>
                <tbody>
                    <td>
                    <?php
                        $conn = mysqli_connect('localhost','root','','sign up');
                        if (!$conn) 
                        {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                    
                                

                            $sql = " select * from user_data ";
                            $run = mysqli_query($conn, $sql);
                            $password= 1;

                            while($row = mysqli_fetch_array($run))
                            {
                                $full_name = $row['full_name'];
                                $email = $row['email'];
                                $contactno = $row['contactno'];
                                $password = $row['password'];
                                $confirm_password = $row['confirm_password'];
                                
                            ?>

                                   <tr>
                                        <td><?php echo $full_name ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $contactno ?></td>
                                        <td><?php echo $password ?></td>
                                        <td><?php echo $confirm_password ?></td>
                                    
                                        <td>
                                        <button><a href='edit.php?edit=<?php echo $password ?>'>Edit</a> </button>
                                        <button><a href='delete.php?delete=<?php echo urlencode($password) ?>'>Delete</a></button>




                                        </td>
                                   </tr>
                            <?php $password++; } ?>
                    </td>
                <tbody>
            </table>
        </div>

    </body>
</html>