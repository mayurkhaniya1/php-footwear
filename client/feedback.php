<?php
include("header.php");
?>
	<!-- contact section start -->
    <div class="collection_text">Feedback Us</div>
    <div class="layout_padding contact_section">
    	<div class="container">
    		<h1 class="new_text"><strong>Feedback Now</strong></h1>
    	</div>
    	<div class="container-fluid ram">
    		<div class="row">
    			
      <div class="col-md-6"> 
        <div class="email_box"> 
          <div class="input_main"> 
            <div class="container"> 
              <form action="feedbackcon.php" method="post">
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Name" name="name" id="name">
                </div>
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Mobile Number" name="mobile" id="mobile">
                </div>
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Email" name="email" id="email">
                </div>
				<div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Feedback" name="feedback" id="feedback">
                </div>
            </div>
            <div class="send_btn"> 
              <button class="main_bt">Submit</button>
            </div>
			</form>
          </div>
        </div>
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
   	<!-- contact section end -->
<?php
include("footer.php");?>