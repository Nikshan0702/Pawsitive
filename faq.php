
<?php include 'header.php'; ?>
<style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Quicksand",sans-serif;
  background: #705454;
  color: #fff;
}

section{
  min-height: 100vh;
  width: 80%;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items:first baseline;
}

.heading{
  font-size: 3rem;
  margin: 2rem 10rem;
}

.faq{
  max-width: 500px;
  margin-top: 2rem;
  padding-bottom: 1rem;
  border-bottom: 1rem solid #fff;
  cursor: pointer;
}

.question{
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.question h3{
  font-size: 1.8rem;
}

.answer{
  max-height: 0;
  overflow: hidden;
}

.answer p{
  padding-top: 1rem;
  line-height: 1.6;
  font-size: 1.4rem;
}
.faq.activate .answer{
  max-height: 300px;
}
.container1{
  width: 250%;
}
.container2{
  width: 250%;
}
.containerAll{
  display: flex;
 }
</style>
  <div class="heading">
    <h2 class="headline">FAQs</h2>
  </div>
   <div class="containerAll">
  <div class="container1">
  <section> 
     <div class="faq">
      <div class="question">
        <h3>What services do you offer?</h3>

        <svg width="55" height="30" viewBox="'0 0 42 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>

        </svg>
        
    
      </div>
      <div class="answer">
        <p>
          Our pet care system offers a range of services including pet sitting, dog walking, grooming, 
          and veterinary care coordination.
        </p>
      </div>
    </div>

    <div class="faq">
      <div class="question">
        <h3>How to book pet care services online?</h3>
        
        <svg width="55" height="30" viewBox="'0 0 42 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>

        </svg>
      </div>
      <div class="answer">
        <p>
          Booking pet care services is easy! Simply create an account on our platform, browse through available services, 
          select your preferred option, and choose a date and time that works for you.
        </p>
      </div>
    </div>

    <div class="faq">
      <div class="question">
        <h3>Are your caregivers experienced and trustworthy?</h3>
        
        <svg width="55" height="30" viewBox="'0 0 42 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>

        </svg>
      </div>
      <div class="answer">
        <p>
          Absolutely! We thoroughly vet all of our pet sitters and caregivers through background checks and interviews. 
          They are experienced, trained, and passionate about providing the best care for your furry friends.
        </p>
      </div>
    </div>
    <div class="faq">
      <div class="question">
        <h3>What safety measures do you have?</h3>
        
        <svg width="55" height="30" viewBox="'0 0 42 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>

        </svg>
      </div>
      <div class="answer">
        <p>
          The safety and well-being of your pet are our top priorities. Our pet sitters are trained in pet first aid and CPR,
           and we provide detailed instructions to ensure your pet's specific needs are met.
        </p>
      </div>
    </div>
  </section>
  </div>
  <div class="container2">
    <section> 
       <div class="faq">
        <div class="question">
          <h3>Can I schedule recurring appointments?
          </h3>
  
          <svg width="55" height="30" viewBox="'0 0 42 25">
            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
  
          </svg>
          
      
        </div>
        <div class="answer">
          <p>
            Yes, you can! Our platform allows you to schedule recurring appointments
             for services such as dog walking and pet sitting, making it convenient 
             for you to ensure your pet's needs are consistently met.
          </p>
        </div>
      </div>
  
      <div class="faq">
        <div class="question">
          <h3>How do I cancel or reschedule?</h3>
          
          <svg width="55" height="30" viewBox="'0 0 42 25">
            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
  
          </svg>
        </div>
        <div class="answer">
          <p>
            We understand that plans can change. You can easily cancel or reschedule a 
            booking through your account on our platform. We just ask that you give us 
            as much notice as possible to accommodate changes.
          </p>
        </div>
      </div>
  
      <div class="faq">
        <div class="question">
          <h3>How do you handle pet emergencies?</h3>
          
          <svg width="55" height="30" viewBox="'0 0 42 25">
            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
  
          </svg>
        </div>
        <div class="answer">
          <p>
            Our pet sitters are trained to handle emergencies and will follow the 
            instructions you provide in your pet's profile. In the event of a medical 
            emergency, we will contact you immediately and seek veterinary care if necessary.
          </p>
        </div>
      </div>
      <div class="faq">
        <div class="question">
          <h3>How is my personal information secured?</h3>
          
          <svg width="55" height="30" viewBox="'0 0 42 25">
            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
  
          </svg>
        </div>
        <div class="answer">
          <p>
            We take the security and privacy of your personal information very seriously. 
            Our platform uses industry-standard encryption to protect your data, and we 
            adhere to strict privacy policies to safeguard your information from unauthorized access or misuse.
          </p>
        </div>
      </div>
    </section>
    </div>
  </div>
  <script src = "faq.js"></script>
  <?php include 'newfooter.php' ?>