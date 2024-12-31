<?php
include("con1.php");
$name=$_POST["name"];
$address=$_POST["address"];
$city=$_POST["city"];
$pincode=$_POST["pincode"];
$state=$_POST["state"];
$username=$_POST["username"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$query="insert into registration(name,address,city,pincode,state,username,password,gender,mobile,email,dob)values('$name','$address','$city','$pincode','$state','$username','$password','$gender','$mobile','$email','$dob')";
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert("Record Not Inserted");
window.location="registrationmaster.php";
</script>
<?php
}
else
{?>
	<script>
alert("Registration successfull");
window.location="login.php";
</script><?php
}
?>