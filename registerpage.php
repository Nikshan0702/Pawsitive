
<?php
    
    include('login.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>
    <link rel="stylesheet" href="style2.css">

    <script src="register.js"> </script>

    

    <style>
        body
        {
            background-image:url(new04.jpg);
            background-size:cover;
            height:50vh
        }
        *
{
    margin :0;
    padding: 0;
    box-sizing :border-box;
    font-family:'poppins',sans-serif;
}


.sign1{

    height: 100vh;
    width :100%;
    display: flex;
    justify-content: center;
    align-items: center;
 

}

.form1
{
    
    width:25rem;
    height:50rem;
    display:flex;
    flex-direction:column;
    background:rgba(242, 242, 238, 0.888);
    border-radius: 5px;
    opacity:
    border:3px solid rgb(180, 124, 40);
    margin-right:750px;
   
   

}
h1
{
    font-size:25px;
    text-align:center;
    color: #9c5312; 
    text-align:center;
    margin-bottom:20px;



}
label
{
    font-size:15px;
    color: #9c5312; 
    margin-left:10%;
    opacity:0.8;
    padding-top: 10%;
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
    border-bottom:1px solid rgb(216, 112, 15);
    color:rgb(26, 24, 24);
    opacity:0.7;

}
button
{
    padding: 10px 10px;
    font-size: 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: #9c5312; 
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    width:100px;
    display:inline-block;

}
a
{
    
    text-align:center;
    color: #9c5312; 
    padding-bottom:5;
    text-decoration: none;
}



    </style>
</head>
<body class="sign1">

 
    
   <div>
        
    <form class="form1" method="POST" action="register.php" onsubmit = "return register()">
        <br><br>
       <h1>CREATE ACCOUNT</h1>
       <label>FULL NAME</label>
       <input for="full_name" type="text" required  name="full_name" id="full_name">
       <label>EMAIL ADDRESS</label>
       <input for="email" type="email" required name="email" id="email">
       <label>MOBILE NUMBER</label>
       <input for="number" type="text" required name="contactno" id="contactno" >
       <label>PASSWORD </label>
       <input for="password" type="password" required name="password" id="password" >
       <label>CONFIRM PASSWORD </label>
       <input for="confirm_password" type="password" required name="confirm_password" id="confirm_password" >
       <center><button>SIGN IN</button></center><br>
       <a href="Loginpage.php">Already have an account?Log in</a>
    </form>
   </div>
    
</body>
</html>