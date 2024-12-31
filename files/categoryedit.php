<?php include("header.php");?>
<?php
$id=$_GET['id'];
include("con1.php");
$query="select * from category where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<form action="categoryeditcon.php" method="post">
                <div class="form-group"> 
                  <input type="Category" class="email-bt" placeholder="Category" name="category">
                </div ><div class="send_btn"> 
              <button class="main_bt">submit</button>
            </div>
              </form>
            </div>
           
<?php
}
?>
<?php include("footer.php");?>