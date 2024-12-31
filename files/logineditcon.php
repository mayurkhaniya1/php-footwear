<?php
include("session.php");
?>
<?php
include("con1.php");
$id=$_POST['id'];
$username=$_POST["username"];
$password=$_POST["password"];
$query="update login set username='$username',password='$password' where id=".$id;
$result=mysqli_query($con,$query);
if ($result==NULL)
{?>
<script>
alert("Record Not Updated");
window.location="loginmaster.php"; 
</script>
<?php
}
else
{
	header("location:loginmaster.php");
}
?>