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
            <h1 class="mb-2 bread">Create Account</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
 
    <?php  
      $firstName = $_POST['nume'] ?? '';
      $lastName = $_POST['prenume'] ?? '';
      $email = $_POST['email'] ?? '';
      $pass1 = $_POST['pass'] ?? '';
      $pass2 = $_POST['pass2'] ?? '';
      
      $passMd = md5($pass1);
      $codPass = 1122;
      $protectedPass = $codPass . $passMd . '@&^%';
      
      if(isset($_POST['submit'])){
         $errors = [];
          
          if(strlen($firstName)<3){
              $errors[] = 'Numele este prea scurt! (Peste 3 Caractere)';
          }
           if(strlen($firstName)>20){
              $errors[] = 'Numele este prea lung! (Sub 20 de Caractere)';
          }        
           if(strlen($lastName)<3){
              $errors[] = 'PreNumele este prea scurt! (Peste 3 Caractere)';
          }
           if(strlen($lastName)>20){
              $errors[] = 'PreNumele este prea lung( Sub 20 de caractere)';
          }
           if($pass1!=$pass2){
              $errors[] = 'Nu ai introdus ambele parole la fel!!'; 
          }
           if(false == filter_var($email, FILTER_VALIDATE_EMAIL)){
               $errors[] = 'Adresa de email nu este valida!';
          }
          if(strlen($pass1)<6){
               $errors[] = 'Parola este prea scurta!!!(Minim 6 Caractere)';
          }
          if(strlen($pass1)>20){
               $errors[] = 'Parola este prea lunga!!!(Maxim 20 de Caractere)';
          }
          
          
          if(count($errors)==0){
              //select nume din DB
              //Verifica daca exista
              //daca nu exista adauga utillizator si redirectioneaza pe pagina de login
              
           $selectMail = "SELECT * FROM utilizator WHERE `email`='$email' ";
                $resultselectMail = $conn->query($selectMail);
                if ($resultselectMail->num_rows > 0) {
                     echo '<center><h4><font color=red>Emailul exista in baza de date!!!</h4></font>';
                } else {
                    
      
            $sql = "INSERT INTO utilizator (nume, prenume, email, parola)
VALUES ('$firstName', '$lastName', '$email', '$protectedPass')";

              if (mysqli_query($conn, $sql)) {
                  echo "<center><h3>Account has created successfully!!!</h3></center><br />";
                  echo "<center><h3>Click to Login!!!</h3></center>";
              } else {
               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
            }
    
    
              echo 'ok';
          }else{
              echo '<center><font color=red>Eroare - ';
              echo " ".$errors[0] . '</font></center>';
          }
      }
      
    ?>  
        <center> 
      <form method="POST">
          <table id="formRegister">     
              <tr><td><label for="name">Firstname</label>         </td><td><input class="inputReg" type="text" id="name" name="nume"  value="<?php echo $firstName; ?>" /> </td></tr>
          <tr><td><label for="prenume">Lastname</label>        </td><td><input class="inputReg" type="text" id="prenume" name="prenume" value="<?php echo $lastName; ?>" /> </td></tr>
          <tr><td><label for="email">Email</label>            </td><td><input class="inputReg" type="email" id="email" name="email" value="<?php echo $email; ?>" /> </td></tr>
          <tr><td><label for="pass">Password</label>          </td><td><input class="inputReg" type="password" id="pass" name="pass" /> </td></tr>
          <tr><td> <label for="pass2">Retype Password</label> </td><td><input class="inputReg" type="password" id="pass2" name="pass2" /> </td></tr>
          <tr>
              <td><br /><br /><input type="submit" name="submit" value="Create Account" /></td>
              <td><br /><br /><input type="reset" name="reset" value="Reset" /></td>
          </tr>
          </table>
      </form>
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

