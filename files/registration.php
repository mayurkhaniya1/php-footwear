<?php
include("header.php");
?>
	<!-- contact section start -->
    
    <div class="layout_padding contact_section">
    	<div class="container">
    		<h1 class="new_text" align="center"><strong>Registration Form</strong></h1>
    	</div>
    	<div class="container-fluid ram">
    		<div class="row">
    			
      <div class="col-md-6"> 
        <div class="email_box"> 
          <div class="input_main"> 
            <div class="container"> 
              <form action="registrationcon.php" method="post">
                <div class="form-group" align="center"> 
                  <input type="text" class="email-bt" placeholder="Name" name="name">
                </div>
				<div class="form-group"> 
                  <textarea class="massage-bt" placeholder="Address" rows="5" id="comment" name="address"></textarea>
                </div>
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="City" name="city">
                </div>
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Pincode" name="pincode">
                </div>
				<div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="State" name="state">
                </div>
				<div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Username" name="username">
                </div>
				<div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Password" name="password">
                </div>
				<div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Gender" name="gender">
                </div>
				<div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Mobile Number" name="mobile">
                </div>
				<div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Email" name="email">
                </div>
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Date Of Birth" name="dob">
                </div>
				 <div class="send_btn"> 
              <button class="main_bt">Registration</button>
            </div>
				</form>
            </div>
            
          
				</div>
        </div>
      </div>
    			
      
    		</div>
    	</div>
    </div>
   	<!-- contact section end -->
<?php
include("footer.php");?>
