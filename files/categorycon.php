<?php
include("session.php");
?>
<?php
include("con1.php");
$category=$_POST["category"];
$query="insert into category(category)values('$category')";
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert ("Record Not Inserted");
window.location="categorymaster.php";
</script>
<?php
}
else
{
	header("location:categorymaster.php");
}
?>

