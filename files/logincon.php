<?php
include("session.php");
?>
<?php
include("con1.php");
$username=$_POST["username"];
$password=$_POST["password"];
$query="insert into login(username,password)values('$username','$password')";
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert ("Record Not Inserted");
window.location="loginmaster.php";
</script>
<?php
}
else
{
	header("location:loginmaster.php");
}
?>
