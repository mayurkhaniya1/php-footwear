<?php
include("con1.php");
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$feedback=$_POST["feedback"];
$query=("insert into feedback (name,mobile,email,feedback) values ('$name','$mobile','$email','$feedback');");
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert("Record Not Inserted");
window.location="feedbackmaster.php";
</script>
<?php
}
else
{?>
	<script>
alert("Feedback successfull");
window.location="index.php";
</script><?php
}
?>