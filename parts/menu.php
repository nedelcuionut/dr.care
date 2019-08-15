	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
                

             
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
                        <?php echo getMenuLinks($conn); ?>

	        </ul>
	      </div>
            <?php if(!isset($_SESSION['id'])){ ?>
                <p class="button-custom order-lg-last mb-0"><a href="login.php" class="btn btn-secondary py-2 px-3">Login</a></p>
                <p class="button-custom order-lg-last mb-0"><a href="register.php" class="btn btn-secondary py-2 px-3">Create</a></p>
            <?php }else{ echo 'Bine ai venit, ' . $_SESSION['nume']; 
            echo '<p class="button-custom order-lg-last mb-0"><a href="logout.php" class="btn btn-secondary py-2 px-3">LogOut</a></p>';
            
            } ?>
	    </div>
	  </nav>
