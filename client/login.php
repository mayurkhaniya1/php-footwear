<?php include("header.php"); ?>
	<!-- contact section start -->
    <div class="collection_text">Login Us</div>
    <div class="layout_padding contact_section">
    	<div class="container">
    		<h1 class="new_text"><strong>Login Now</strong></h1>
    	</div>
    	<div class="container-fluid ram">
    		<div class="row">
    			
      <div class="col-md-6"> 
        <div class="email_box"> 
          <div class="input_main"> 
            <div class="container"> 
              <form action="checklogin.php" method="post">
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Username" name="username">
                </div>
                <div class="form-group"> 
                  <input type="password" class="email-bt" placeholder="Password" name="password">
                </div>
                <div class="send_btn"> 
              <button type="submit" class="main_bt">Login</button>
            </div>		
              </form>
			 
            </div>
            
          </div>
        </div>
		 <br><br><br><br><br><br><br><br><br><br><br><br>
			  <h1 align="center"><strong>New User?</strong></h1>
			  <form action="registration.php">
			   <div class="send_btn"> 
              <button type="submit" class="main_bt">Registration</button>
            </div>
			  </form>
      </div>
    			
      <div class="col-md-6"> 
        <div class="shop_banner"> 
          <div class="our_shop"> 
            <button class="out_shop_bt">Our Shop</button>
          </div>
        </div>
      </div>
    		</div>
    	</div>
    </div>
<?php include("footer.php"); ?>