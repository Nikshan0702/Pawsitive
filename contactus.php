<?php include 'header.php'; ?>

    <style>
    * {
    width: 100%;
    box-sizing:border-box;
    padding: 0;
    margin: 0;
    font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
        
    }


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
    width: 90%;
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

        body {
    margin: 0;
    font-family: Arial, sans-serif;
}
 
/* nav {
    background-color: #e0d4d4;
    color: #1d1414;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 20px;
}

.logo-container {
    display: flex;
    align-items: center;
}

.logo {
    width: 100px;
    height: 100px;
    margin-right: 10px;
}

.logo-text {
    margin: 0;
    position: absolute;
    left: 160px;
    top: 20px;
}

.nav-links {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 10px 15px;
    position: absolute;
    left: 150px;
    top: 65px;
    background-color: white;
}

.nav-links li {
    margin-right: 20px;
}

.nav-links li a {
    color: #1d1414;
    text-decoration: none;
}

.search-container {
    display: flex;
    align-items: center;
    padding-left: 700px;
    padding-bottom: 40px;
    padding-top: 45px;
}

.search-container input {
    padding: 5px 20px;
    margin-right: 10px;
}

.auth-links button {
   
    color: #1d1414;
    text-decoration: none;
    margin: 10px;
    padding: 10px 20px;
} */

/* header {
    background-color: #f9f9f9;
    padding: 20px;
    text-align: center;
} */


.contact {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.container {
    max-width: 1000px;
    margin: 0px auto;
    padding: 100px;
    border: 1px solid #ccc;
    border-radius: 20px;
    background-color: #f9f9f9;
}

.content {
    margin-bottom: 30px;
}

.contactInfo {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    
}

.box {
    flex: 10;
    margin: 1 15px;
    padding: 100px;
    background-color: #ffd3d3;
    
   
}

.box .icon {
    font-size: 30px;
    margin-bottom: 10px;
}

.contactForm {
    width: 100%;
}

.contactForm form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.inputBox {
    width: 100%;
    margin-bottom: 20px;
}

.inputBox input, .inputBox textarea {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.inputBox input[type="submit"] {
    background-color: #f51818;
    color: #fff;
    border: none;
    cursor: pointer;
}

.inputBox input[type="submit"]:hover {
    background-color: #17ad17;
}
/* .footer {
    background-color: #e0d4d4;
    padding: 30px 150px;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: #1d1414;
}

.footer p {
    display: flex;
    margin: 0;
    padding: 20px px;
    padding-left: 50px;
    
}

.footer .navbar {
    background-color: white;
}

.footer .navbar a {
    color: #1d1414;
}

.footer a:hover {
    text-decoration: underline;
} */
    </style>


   

    <section class="contact">
        <div class="container">
            
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Location</h3>
                        <p>No,51/70 Pachora Road,<br>Pune, India,<br>14568</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Telephone</h3>
                        <p>+9412345678</p>
                        <p>+9412345678</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>abc@gmail.com</p>


                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method="post" action="insert.php">
                    <h2>Send Query</h2>
                    <div class="inputBox">
                        <input type="text" name="u.name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="u.email" required="required">
                        <span>Email Address</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="u.message" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" >
                    </div>
                </form>
            </div>
        </div>
    </section>

    
