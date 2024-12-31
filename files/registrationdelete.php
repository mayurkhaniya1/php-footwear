<?php
include("session.php");
?>
<?php
include("con1.php");
$id=$_GET['id'];
$query="delete from registration where id=".$id;
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert("Record Not Deleted");
window.location="registrationmaster.php";
</script>
<?php
}
else
{
header("location:registrationmaster.php");
}
?>
