<?php 
session_start();
if($_SESSION["user"]=="")
{?>
	<script>
	alert("You must have to login first");
	window.location="login.php";
	</script>
<?php
 }
?>