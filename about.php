
<?php include 'header.php'; ?>

 <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

nav {
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
}

header {
    background-color: #f0f0f0;
    padding: 20px;
    text-align: center;
}

main {
    display: flex;
    flex-wrap: wrap;
}

.about {
    flex-basis: 40%;
    padding: 50px 20px;
    background-color: #fff;
    border-left: 3px solid #ddd; 
    border-top: 3px solid #ddd; 
    padding-left: 50px; 
    
}

.mission-vision {
    flex-basis: 100%;
    padding: 50px;
    display: flex;
    justify-content: flex-end; 
    align-items: flex-start;
}

.mission, .vision {
    flex-basis: calc(70% - 70px); 
    background-color: #fff;
    padding: 50px;
    
    margin-bottom: 50px;
    text-align: center;
}




.imgP    {
    width: 200px;
    height: 200px;
    margin: 0 auto 10px;
    border-radius: 50%;
}

.imgP{
    display: flex;
    justify-content: center;
    padding-left: 100px;
    padding-top: 100px;
    
}
.pet{
    display: flex;
    padding-left: 1200px ;
    padding-bottom: 100px;
    
}

.footer {
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
}
@media only screen and (max-width: 768px) {
    .img {
        display: flex;
        justify-content: right;
        margin-bottom: 30px;
        
    }

    .img img {
        margin: 0 10px;
        padding-left: 100px;
    }

    .mission-vision {
        flex-direction: column;
        align-items: center;
    }

    .mission, .vision {
        flex-basis: 50%;
    }
}

    </style>
   
    <main>
        <section class="about">
            <h2>We Pawsitive PetCare</h2>
            <p> At We Pawsite Petcare, we are more than just a service provider; we're your pet's extended family. With a deep-rooted passion for animals and years of experience, we understand the unique needs and quirks of every furry friend. Our mission is simple: to provide unparalleled care and attention to your beloved pets, ensuring their happiness, health, and safety at all times. From daily walks to specialized grooming, and even overnight stays, we offer a comprehensive range of services tailored to suit your pet's individual requirements. Trust us to be your reliable partner in ensuring your pet's well-being, because at We Pawsite Petcare, your pet's happiness is our priority. </p>
        </section>
        <div class="imgP">
            <img src="img/c2.jpg" alt="About Us Image" >
            <img src="img/c1.jpg" alt="About Us Image" >

        </div>
        

        <aside class="mission-vision">
        <img src="img/care.jpg" alt="" width="600px" height="300px" margine="20px">
        
            <div class="mission">
                <h3>Mission</h3>
                <p>At our online pet care system, our mission is to provide unparalleled support and care for pets and their owners alike. Through innovative technology and a passionate team of professionals, we aim to enhance the well-being and happiness of every furry friend, ensuring they receive the love, attention, and top-notch care they deserve  </p>
            </div>
            <div class="vision">
                <h3>Vision</h3>
                <p> At our online pet care system, our vision is to redefine the way pets are cared for, ensuring their well-being and happiness are prioritized at every step. We aim to create a community where pet owners can access reliable resources, expert guidance, and innovative solutions, fostering stronger bonds between pets and their human companions. </p>
            </div>
        </aside>
        
        
    </main>
    

 




    <?php include 'newfooter.php' ?>