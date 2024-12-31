<?php include("header.php"); ?>
	
            	<div class="container">
    		<h1 class="new_text" align="center"><strong>Purchase Form</strong></h1>
    	</div>
    	<div class="container-fluid ram">
    		<div class="row">
    			
      <div class="col-md-6"> 
        <div class="email_box"> 
          <div class="input_main"> 
            <div class="container"> 
              <form action="purchasecon.php" method="post">
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="name" name="name">
                </div>
                
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="quantity" name="quantity">
                </div>
                
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="price" name="price">
                </div>
                
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="total" name="total">
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
   
<?php include("footer.php"); ?>



