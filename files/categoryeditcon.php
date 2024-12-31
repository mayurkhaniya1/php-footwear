<?php
include("session.php");
?>
<?php
include("con1.php");
$id=$_POST['id'];
$category=$_POST["category"];
$query="update category set category='$category' where id=".$id;
$result=mysqli_query($con,$query);
if ($result==NULL)
{?>
<script>
alert("Record Not Updated");
window.location="categorymaster.php"; 
</script>
<?php 
}
else
{
	header("location:categorymaster.php");
}
?>
