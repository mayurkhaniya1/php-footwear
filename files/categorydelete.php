<?php
include("session.php");
?>
<?php
include("con1.php");
$id=$_GET['id'];
$query="delete from category where id=".$id;
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert("Record Not Deleted");
window.location="categorymaster.php";
</script>
<?php
}
else
{
header("location:categorymaster.php");
}
?>
