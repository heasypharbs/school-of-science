<?php include("header.php")?>
 
 <!-- Individual header-->
 
   <div class="untree_co-hero overlay" style="background-image: url('images/banner.jpeg');">
     <div class="container">
       <div class="row align-items-center justify-content-center">
         <div class="col-12">
           <div class="row justify-content-center ">
             <div class="col-lg-5 text-center ">
               <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">SOSO Alumni Contact</h1>
               
 
 
           </div>
 
         </div>
 
       </div> <!-- /.row -->
     </div> <!-- /.container -->
 
   </div> <!-- /.untree_co-hero body starts -->
 
 
 
 
   <div class="untree_co-section">
     <div class="container">
 
       <div class="row mb-5">
         <div class="col-lg-5 mb-5 order-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9394.210913926358!2d4.266649816436928!3d8.123955126897192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10370d2f6cf0d563%3A0xc92b9d898e0a1c86!2sOgbomosho%20School%20of%20Science.!5e0!3m2!1sen!2sng!4v1663941289931!5m2!1sen!2sng" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 
           <div class="contact-info">
             <h6 class="line-bottom mb-4">For enquiries about the school and academic programme of the school: </h6>
                                   
             <div class="email mt-4">
               <i class="icon-envelope"></i>
               <p>Email: Principal@oyostatesosoedu.com.ng</p>
             </div>
 
             <div class="phone mt-4">
               <i class="icon-phone"></i>
               <p>Call: 080 xxx xxxx</p>
             </div>
           </div>
           <p></p><br>
  <div class="contact-info">
             <h6 class="line-bottom mb-4">For Alumni related enquiries/support:</h6>
                                  
             <div class="email mt-4">
               <i class="icon-envelope"></i>
               <p>Email: info@sosoalumniedu.com.ng</p>
             </div>
 
             <div class="phone mt-4">
               <i class="icon-phone"></i>
               <p>Call: +234 806 005 8223</p>
             </div>
 
            
             
           </div>
         </div>
         <div class="col-lg-7 mr-auto order-1" data-aos="fade-up" data-aos-delay="200">
           <form action="" method="POST">
             <div class="row">
               <div class="col-6 mb-3">
                 <input type="text" name="name" class="form-control" placeholder="Your Name">
               </div>
               <div class="col-6 mb-3">
                 <input type="email" name="email" class="form-control" placeholder="Your Email">
               </div>
               <div class="col-12 mb-3">
                 <input type="text" class="form-control" placeholder="Subject" name="subject">
               </div>
               <div class="col-12 mb-3">
                 <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
               </div>
 
               <div class="col-12">
                 <input type="submit" name="btnsubmit" value="Send Message" class="btn btn-primary">
               </div>
             </div>
           </form>
         </div>
       </div>
 
       <?php
 
 if(!empty($_POST["btnsubmit"])) {
 //echo "Test";
 //die();
 $name = $_POST["name"];
 $email = $_POST["email"];
 $subject = $_POST["subject"];
 $message = $_POST["message"];
 
 if(!empty($message)) {
 // Store contactor data in database
     $sql = $connection->query("INSERT INTO contact(name, email, subject, message, sent_date)
     VALUES ('{$name}', '{$email}',  '{$subject}', '{$message}', now())");
     if(!$sql) 
     {
         die("MySQL query failed.");
       echo
          
          '<script>alert alert-danger ("Message sending failed")</script>';
   
     } 
     
     else 
      { 
          echo
          
          '<script>alert alert-success ("We have received your Message. We will contact you shortly")</script>';
                
      }
 }
 
 }
    ?>
    
     </div>
   </div> <!-- /.untree_co-section -->
 
 
 
  
 
   <?php include("footer.php")?>