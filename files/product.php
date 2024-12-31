<?php include("header.php"); ?>
	<!-- contact section start -->
        <div class="layout_padding contact_section">
    	<div class="container">
    		<h1 class="new_text" align="center"><strong>Product Form</strong></h1>
    	</div>
    	<div class="container-fluid ram">
    		<div class="row">
    			
      <div class="col-md-6"> 
        <div class="email_box"> 
          <div class="input_main"> 
            <div class="container"> 
              <form action="productcon.php" method="post" enctype="multipart/form-data">
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Name" name="name">
                </div>
                
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Category" name="category">
                </div>
                
                <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Price" name="price">
                </div>
                
                <div class="form-group"> 
                  <input type="file" class="email-bt" placeholder="Image" name="image">
                </div>
                
                 <div class="form-group"> 
                  <input type="text" class="email-bt" placeholder="Description" name="description">
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


