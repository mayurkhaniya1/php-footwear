<?php include("header.php"); ?>
	<!-- contact section start -->
        <div class="layout_padding contact_section">
    	<div class="container">
    		<h1 class="new_text" align="center"><strong>Feedback Form</strong></h1>
    	</div>
    	<div class="container-fluid ram">
    		<div class="row">
    			
      <div class="col-md-6"> 
        <div class="email_box"> 
          <div class="input_main"> 
            <div class="container"> 
              <form action="feedbackcon.php" method="post">
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Name" name="name">
                </div>
                
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Mobile" name="mobile">
                </div>
                
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Email" name="email">
                </div>
                
               <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Feedback" name="feedback">
                </div> 
                <div class="send_btn"> 
              <button class="main_bt">Submit</button>
            </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    </div>
<?php include("footer.php"); ?>

