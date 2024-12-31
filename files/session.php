<?php 
session_start();
if($_SESSION["user"]=="")
{?>
	<script>
	alert("You must have to login first");
	window.location="../client/login.php";
	</script>
<?php
 }
?>