<?php
include("session.php");
?>
<?php
include("con1.php");
$id=$_POST['id'];
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$feedback=$_POST["feedback"];
$query="update feedback set name='$name', mobile='$mobile',email='$email',feedback='$feedback' where id=".$id;
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert ("Record Not Updated");
window.location="feedbackmaster.php";
</script>
<?php
}
else
{
	header("location:feedbackmaster.php");
}
?>
