  <html lang="en">
   
    <?php define('ROOT_PATH', __DIR__); ?>
    <?php include ROOT_PATH . "/php/link.php"; ?> 
    <?php include(ROOT_PATH . "/php/functions.php"); ?> 
    
    <?php include("parts/head.php"); ?>
  <body>
    <?php include("parts/headinfo.php"); ?>
    <?php include("parts/menu.php") ?>
   
        
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread"><?php echo $vector[4] ?> Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
						<form action="#" method="post">
              <div class="form-group">
                <input type="text" name="nume" class="form-control" placeholder="Your Name" value="<?php if(isset($_SESSION['id'])){ echo $_SESSION['nume']; } ?>">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php if(isset($_SESSION['id'])){ echo $_SESSION['email']; } ?>">
              </div>
              <div class="form-group">
                <input type="text" name="subiect" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="mesaj" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
                        <?php
                if((isset($_POST['nume']))AND(isset($_POST['email']))AND(isset($_POST['subiect']))AND(isset($_POST['mesaj']))){
               
               if((strlen($_POST['nume'])>3)AND(strlen($_POST['nume'])<40)AND(strlen($_POST['email'])>3)AND(strlen($_POST['email'])<40)AND(strlen($_POST['subiect'])>3)AND(strlen($_POST['subiect'])<80)){
                    
                $nume = htmlentities($_POST['nume']);
                $email = $_POST['email'];
                $subiect = htmlentities($_POST['subiect']);
                $mesaj = htmlentities($_POST['mesaj']);   
                 
                
                $sendMessage = "INSERT INTO `message` (email, message, subject,name) VALUES ('$email','$mesaj','$subiect','$nume')"; 
                
               
                $message = "";
        $message .= "Full Name: {$nume} \r\n";
        $message .= "Email: {$email} \r\n";
        $message .= "Message: {$mesaj} \r\n";
        $message .= "Message Date: " . date('Y-m-d H:i:s') ."\r\n" ;
        $message .= "--------------- \r\n";

        $bytes_written = file_put_contents('./messages.txt', $message, FILE_APPEND | LOCK_EX);

        if (false === $bytes_written) {
            die("Error, no bytes written");
        } else {
            echo "$bytes_written written to file";
        }  
                
                
                
                
                if($conn->query($sendMessage) === TRUE){
                    echo '<h2>Message Sent</h2>';
                    
 
                }else{
                     echo 'Error';
                     echo "Error: " . $sendMessage . "<br>" . $conn->error;
                }
                
                
                
                
                
                
                 }else{ echo ''; }
                }else{ echo ''; }
                ?>                    
                                            
                                            
                                            
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
  
      
      
      
      
    <?php include("parts/footer.php"); ?>
    

 <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

