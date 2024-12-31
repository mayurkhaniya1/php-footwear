
<?php
include("session.php");
?>
<?php
include("con1.php");
$id=$_GET['id'];
$query="delete from feedback where id=".$id;
$result=mysqli_query($con,$query);
if($result==Null)
{?>
<script>
alert("Record Not Deleted");
window.location="feedbackmaster.php";
</script>
<?php
}
else
{
header("location:feedbackmaster.php");
}
?>
