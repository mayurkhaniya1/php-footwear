
<?php
include("header.php");
?>
<div class="collection_text">Our Product</div>
    <div class="collection_section layout_padding">
    	<div class="container">		
    	</div>
    </div>
<br> <link rel="stylesheet" href="crt.css" />

		<div class="container">
		<?php
		$connect = mysqli_connect("localhost", "root", "", "footwear_db");

				$query = "SELECT * FROM product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			
  <div class="col-md-4"> 
    <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
      <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center"> 
        <img src="../admin/<?php echo $row["image"]; ?>" class="img-responsive" /><br />
        <h4 class="text-info"><?php echo $row["name"]; ?></h4>
        <h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4>
        <input type="text" name="quantity"  class="form-control" placeholder="Quantity">
        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
      </div>
      <br>
    </form>
  </div>

			<?php
					}
				
				}
			?>
	</div>
	
<?php 
include("footer.php");
?>	   