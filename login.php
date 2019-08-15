 <html lang="en">
   
    <?php define('ROOT_PATH', __DIR__); ?>
    <?php include ROOT_PATH . "/php/link.php"; ?> 
    <?php include(ROOT_PATH . "/php/functions.php"); ?> 
    
    <?php include("parts/head.php"); ?>
  <body>
    <?php include("parts/headinfo.php"); ?>
   

<?php 
  if((isset($_POST['email']))AND(strlen($_POST['email'])>1)AND(strlen($_POST['email'])<50)){
      if((isset($_POST['pass']))AND(strlen($_POST['pass'])>0)AND(strlen($_POST['pass'])<50)){
          
          $email = $_POST['email'];
          $passMd = md5($_POST['pass']);
          $codPass = 1122;
          $protectedPass = $codPass . $passMd . '@&^%'; 
          
        $selectMail = "SELECT * FROM utilizator WHERE `email`='$email' AND `parola`='$protectedPass'";
        $resultselectMail = $conn->query($selectMail);
        
        if ($resultselectMail->num_rows > 0) {
            while($row = $resultselectMail->fetch_assoc()) {
                
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['nume'] = $row['nume'];

               
       
        }
            
     
        } else {
            echo  '<center><h4><font color=red>Error!!</h4></font>';
        }
                  
          
      }else{
        echo 'Password is not correct!';     
      }      
      }else{
      echo '';
  }
  
 ?> 


 <?php include("parts/menu.php") ?>
   
               <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Login</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

 
        <center>
      <div class="logFormPage"> 
      <?php if(!isset($_SESSION['id'])){ ?>    
      <form method="post">
          <table>
              <tr><td> <label for="email">Email:</label>   </td><td>  <input type="email" name="email" id="email" /><br /></td></tr>
              <tr><td> <label for="pass">Password:</label>  </td><td> <input type="password" name="pass" id="pass" /><br /></td></tr>
          </table>
          <input type="submit" name="submit" value="LogIn" /> 
      </form>
      <?php }else{  echo '<center><h4><font color=red>Bine ai venit '. $_SESSION['nume'] .'</h4></font> <br />'
              . '<a href="logout.php">LogOut</a>'
              . ''; } ?>    
      </div>    
  </center>
  
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