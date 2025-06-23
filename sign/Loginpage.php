<?php
    
    include('login.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>

    <link rel="stylesheet" href="styles.css">
    <script src="login.js"></script>
    
</head>
<style>
    body
    {
       background-image: url(new01.jpg);
        background-size: cover;
       

height: 100vh;
width :100%;
display: flex;
justify-content: center;
align-items: center;
background:linear-gradient(blue,rgb(232, 140, 166));
/* background-image:url(backup.jpg); */

 


        
       

    }
    
{
    margin :0;
    padding: 0;
    box-sizing :border-box;
    font-family:'poppins',sans-serif;
}




form
{
    
    width:25rem;
    height:25rem;
    display:flex;
    flex-direction:column;
    background:rgb(238, 238, 232);
    border-radius: 10px;
    margin-right:600px;
   
   

}
h1
{
    font-size:25px;
    text-align:center;
    color:rgb(30, 26, 26);
    text-align:center;



}
label
{
    font-size:20px;
    color:black;
    margin-left:10%;
    opacity:0.8;
    padding-top: 5%;
    margin-right:10%;
    text-align:center;

}

input
{
    width:80%;
    margin:5%auto;
    margin:none;
    border:none;
    outline:none;
    background:transparent;
    border-bottom:1px solid rgb(19, 20, 25);
    color:rgb(26, 24, 24);
    opacity:0.7;

}
button
{
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: #4CAF50; 
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    width:100px;
    display:inline-block;

}
a{
    
    text-align:center;
    color:rgb(14, 14, 14);
    padding-bottom:5;
    text-decoration-line: none;
    
}
    
</style>
<body style="background-image: url(new01.jpg);  background-size: cover;">

  

    <form method="POST" action="login.php" onsubmit="return log()">
        <br><br>
        <h1>LOG IN</h1>
        <label >Username</label>
        <input type="text" required id="full_name"  name="full_name">
        <label>Password</label>
        <input type="password"  required id="password" name="password">
        <center><button type="submit">LOG IN</button></center>
        <br>
       
         <a href="registerpage.php">Do you have account?  Sign in</a>

    </form>    
</body>

<script>

</script>
</html>






