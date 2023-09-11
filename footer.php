<?php include("connection.php")?>
 
 <div class="site-footer">
  <div class="container">

     <div class="row">
       <div class="col-lg-3 mr-auto">
         <div class="widget">
           <h4>About Us </h4>
           <p>Our stories—through our individual achievements and collaborative contributions—enliven the legacy of the school in our hearts and community. </p>
         <div class="widget">
            <ul class="list-unstyled social">
             <li><a href="#"><span class="icon-instagram"></span></a></li>
             <li><a href="#"><span class="icon-twitter"></span></a></li>
             <li><a href="#"><span class="icon-facebook"></span></a></li>
             <li><a href="#"><span class="icon-linkedin"></span></a></li>
             <li><a href="#"><span class="icon-whatsapp"></span></a></li>      
           </ul>
         </div> <!-- /.widget --></div> <!-- /.widget -->
         
       </div> <!-- /.col-lg-3 -->

      <div class="col-lg-2 ml-auto">
         <div class="widget">
           <h4>Quick Links</h4>
           <ul class="list-unstyled float-left links">
             <li><a href="about_alumni.php">About</a></li>
             <li><a href="project.php">Projects</a></li>
             <li><a href="about_alumni.php">Excos</a></li>
             <li><a href="contact.php">Contact</a></li>
             <li><a href="payment.php">Donation</a></li>
           </ul>
         </div> <!-- /.widget -->
       </div> <!-- /.col-lg-3 -->

    <div class="col-lg-3">
         <div class="widget">
           <h4>Contact</h4>
           <address>Opposite INEC office, Oke Owode, Ogbomoso</address>
           <ul class="list-unstyled links mb-4">
             <li><a href="tel:+2348060058223">+234 806 005 8223</a></li>
             <li><a href="tel:+2348030698768">+234 803 069 8768</a></li>
             <li><a href="mailto:info@sosoalumniedu.com.ng">info@sosoalumniedu.com.ng</a></li>
           </ul>
           
         </div> <!-- /.widget -->
       </div> <!-- /.col-lg-3 -->



<div class="col-lg-3">
         <div class="widget " >
           <h4>Our Newsletter</h4>
           <p>Would you like to receive email updates from the Alumni Association? Please feel free to send us your detail in the box below:</p>
           <form action="" method="post" >
              <input class="line-bottom " class="form-control" type="Text" name="name" placeholder="Name">
             <input class="line-bottom " class="form-control" type="email" name="email" placeholder="Email">
             <input class="line-bottom mb-4 " type="submit" value="Subscribe"name="btnsubmit" >
           </form>
     </div> <!-- /.row -->
     
     <?php
include ("connection.php");
if(!empty($_POST["btnsubmit"])) {
//echo "Test";
//die();

$email = $_POST["email"];


if(!empty($email))
{
// Store contact data in database
   $sql = $connection->query("INSERT INTO newsletter(email, sent_date)
   VALUES ('{$email}', now())");
      if(!$sql) 
   {
       die("MySQL query failed.");
     echo '<script>alert("Message sending faliled")</script>';
 
   } 
   
   else 
    { echo '<script>alert("We have received your Message. We will contact you shortly")</script>';
              
    }
}

}
  ?>
  
</div>
</div>





     <div class="row mt-5">
       <div class="col-12 text-center">
         <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved &mdash; SOSO Alumni Association
         </div>
       </div>
     </div> <!-- /.container -->
   </div> <!-- /.site-footer -->

   <div id="overlayer"></div>
   <div class="loader">
     <div class="spinner-border" role="status">
       <span class="sr-only">Loading...</span>
     </div>
   </div>

   <script src="js/jquery-3.4.1.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/jquery.animateNumber.min.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <script src="js/jquery.fancybox.min.js"></script>
   <script src="js/jquery.sticky.js"></script>
   <script src="js/aos.js"></script>
   <script src="js/custom.js"></script>

 </body>

 </html>
