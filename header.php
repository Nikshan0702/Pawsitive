<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
   
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="../font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <style>
        /* header section */
 
 .header {
     width: 100%;
     background-color: #525659;
     color: white;
     text-align: center;
     font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
     font-weight: 200;
     padding: 10px 0;
     font-size: small;
     font-size: xx-small;
 }
 
 .contactDetailsHeaderContainer {
     margin-right: 1px;
     width: calc(100% - 2px);
     ;
 }
 
 .contactDetailsHeader {
     display: flex;
     border: 1px solid black;
     align-items: center;
     font-size: large;
     font-weight: 700;
 }
 
 .contactDetails {
     padding: 10px 5px;
     flex: 4;
     margin: 0 70px;
 }
 
 
 .contactDetailsText {
     display: flex;
     flex-direction: row;
     list-style: none;
 }
 
 .secondOne {
     flex: 2;
 }
 
 .thirdOne {
     flex: 5;
 }
 
 
 
 .navigationBar {
     margin: 0 auto;
     width: 100%;
     height: 80px;
     background-color: rgb(0, 0, 0);
     display: flex;
     align-items: center;
     padding: 5px;
     
     
 }
 
 .imageDiv {
 
     display: flex;
     width: 100px;
     height: 80;
 }
 
 .imageDiv img {
     margin: auto 0px;
     height: 80px;
 }
 
 .brandName {
     margin: auto 0;
     color: white;
     padding-left: 10px;
 }
 
 .leftItemNav {
     flex: 1;
     display: flex;
     justify-content: space-between;
     
 }
 
 .rightNavItemBar {
     flex: 3;
     display: flex;
     
 }
 .rightNavItemBar ul li
 {
     list-style: none;
     display: inline-block;
     margin: 0 10px;
     position: relative;
     
 }
 .rightNavItemBar ul li
 {
     text-decoration: none;
     color: #FFFFFF;
 }
 .rightNavItemBar ul li ::after
 {
     content: '';
     height: 3px;
     width: 0%;
     background:#40BC9F;
     position: absolute;
     left:0;
     bottom: -10px;
     transition: 0.3s;
 }
 .rightNavItemBar ul li:hover ::after
 {
     width: 100%
 }
 
 .menuItems {
     list-style: none;
     display: flex;
     flex-direction: row;
     color: white;
     margin: 0 10px;
 }
 
 .menu {
     text-align: center;
     margin: auto auto;
 }
 
 .menu a {
     text-decoration: none;
     color: white;
     text-align: center;
     font-size: medium;
     font-weight: bold;
     
     
 }
 
 a:hover {
     color: rgb(153, 136, 136);
 }
 .dropdown {
     position:relative;
     display:inline-block;
     
   }
   
   .dropbtn {
     background-color: rgb(0, 0, 0);
     color: white;
     font-size: 14px;
     border: none;
     cursor: pointer;
     font-family: 'Gill Sans MT';
     font-weight: bold;
     font-size: medium;
   }
   .dropdown-content {
     display: none;
     position: absolute;
     background-color: rgb(0, 0, 0);
     width: 171px;
     box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
     z-index: 1;
   }
   
   .dropdown-content a{
     display: block;
     margin: 2% 0 10% 0;
     position: relative;
     left: 2vw;
     background-color: hsl(214deg 2% 39% / 0%);
     width: 98px;
     text-decoration: none;
     font-family: 'Gill Sans MT';
     font-weight: bold;
     font-size: 20px;
     color: #f7f6f2;
   }
 
   .dropdown-content a:hover {
     background-color: hsl(214deg 2% 39% / 0%);
     color: #525659; 
     font-weight: bolder;   
 }
 
   .dropdown:hover .dropdown-content {
     display: block;
   }
 </style>
 
  </head>
  <body>
      <div class="bodysectionhome">
    <!-- to show upper header -->
    <div class="header">
      <h3 class="headerTitle">Vet Online</h3>
    </div>

    <!-- Navigation Bar -->

    <div class="navigationBar">
      <div class="leftItemNav">
        <div class="imageDiv">
          <img src="logo.jpeg" alt="logo" />
        </div>
        <div class="brandName">
          <h2>
            Pawsitive <br />
            Petcare
          </h2>
        </div>
      </div>
      <div class="rightNavItemBar">
        <ul class="menuItems" >
        <li class="menu"><a href="profile.php">PROFILE</a></li>
          <li class="menu"><a href="home.php">HOME</a></li>
          <li class="menu"><a href="products.php">SHOP</a></li>
          <li class="menu"><a href="about.php">ABOUT US</a></li>
          <li class="menu"><a href="services.php">OUR SERVICES</a></li>
          <li class="menu"><a href="faq.php">FAQ's</a></li>
          <li class="menu"><a href="contactus.php">CONTACT US</a></li>
          <li class="menu">
            <div class="dropdown">
              <button type="button" class="dropbtn"> ACCOUNT</button>
              <div class="dropdown-content">
                <a id="login" href="Loginpage.php" target="_self">Log in</a>
                <a id="register" href="registerpage.php" target="_self">Register</a>
                <a id="login" href="Loginpage.php" target="_self">Admin</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>