<?php include 'header.php'; ?>

  <style>

  body{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items:center;
    min-height: 100vh;
    font-family: 'Popins',sans-serif;
  }
  
  .container{
    display: flex;
    flex-wrap: wrp;
    justify-content: space-between;
  }
  
  .container .box{
    position:relative;
    
    padding: 140px;
    background: #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,.1);
    border-radius: 4px;
    margin: 20px;
    box-sizing: border-box;
    overflow: hidden;
    text-align: center;
  }
  
  .container .box:before
  {
    content: '';
    width: 50%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: rgba(255,255,255, .2) ;
    z-index: 2;
    pointer-events: none;
  }
  
  .container .box .icon{
    position: relative;
    width: 80px;
    height: 80px;
    color: #fff;
    background: #000;
    display: flex;
    justify-content: center;
    margin: 0 auto;
    border-radius: 50%;
    font-size: 40px;
    font-weight: 700;
    transition: 1s;
  }
  
  .container .box:nth-child(1) .icon{
    box-shadow: 0 0 0 #e91e63;
    background: #e91e63;
  }
  
  .container .box:nth-child(1):hover .icon{
    box-shadow: 0 0 0 400px #e91e63;
  }
  
  .container .box:nth-child(2) .icon{
    box-shadow: 0 0 0 #1e47e9;
    background: #1e47e9;
  }
  
  .container .box:nth-child(2):hover .icon{
    box-shadow: 0 0 0 400px #1e47e9;
  }
  
  .container .box:nth-child(3) .icon{
    box-shadow: 0 0 0 #0de684;
    background: #0de684;
  }
  
  .container .box:nth-child(3):hover .icon{
    box-shadow: 0 0 0 400px #0de684;
  }
  
  .container .box .content{
    position: relative;
    z-index: 1;
    transition: 0.5s;
  }
  
  .container .box:hover .content{
    color: #fff;
  }
  
  .container .box .content h3{
    font-size: 20px;
    margin: 10px 0;
    padding: 0;
  }
  
  .container .box .content p{
    margin: 0;
    padding: 0;
  
  }
  
  
  
  </style>
  <div class = "container">
    <div class="box">
      <div class="icon">01</div>
      <div class="content">
        <h3> Book a dog walker/sitter</h3>
        <p>Our "Book a Dog Walker" service page simplifies scheduling walks 
          tailored to your pet's needs. Trust our experienced walkers for 
          safe and enjoyable outings. Easily manage your pet's routine with 
          flexible booking options. Join satisfied pet owners and ensure your
          furry friend gets the care they deserve. Book now for peace of mind 
          and convenience.

        </p>
        <a href="#">Read More</a>
      </div>
    </div>
    <div class="box">
      <div class="icon">02</div>
      <div class="content">
        <h3> Appoinment for groomer</h3>
        <p>"Appointment for Groomer" offers hassle-free scheduling for your 
          pet's grooming needs. Our skilled groomers provide top-notch care 
          for your furry companion. Easily book grooming sessions tailored to 
          your pet's preferences. Join satisfied pet owners and experience 
          professional grooming services. Secure your appointment now for a 
          happy, healthy pet.
        </p>
        <a href="#">Read More</a>
      </div>
    </div>
    <div class="box">
      <div class="icon">03</div>
      <div class="content">
        <h3> Appoinment for veterinarian</h3>
        <p>"Appointment for Veterinarian" streamlines the process of scheduling 
          essential veterinary care for your pet. Our compassionate vets offer 
          comprehensive services to keep your furry friend healthy. Book 
          appointments for routine check-ups, vaccinations, or urgent care needs 
          with ease. Join pet owners who trust our expertise and dedication to their 
          pet's well-being. Secure your appointment now to ensure your pet receives 
          the best possible care.
        </p>
        <a href="#">Read More</a>
      </div>
    </div>
  </div>