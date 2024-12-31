<?php include("header.php");?>
<?php
$id=$_GET['id'];
include("con1.php");
$query="select * from login where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<form action="logineditcon.php"method="post">
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
<td colspan="2" align="center" class="hed">
Login Form
</td>
</tr>
<input name="id" type="hidden" value="<?php echo $_GET['id']?>">
<tr>
<td>Username</td>
<td>
<input name="username" type="text" id="username"
 value="<?php echo $row["username"]
?>">

</td>

</tr>
<tr>
<td>Password</td>
<td>
<input name="password" type="password" id="password"
value="<?php echo $row["password"]?>">

</td>
</tr>
<tr>
<td colspan="2" align="center" class="hed">
<input type="submit" name="submit" 
value="Login" class="btn">
</td>
</tr>
</table>
</form>
<?php
}
?>
<?php include("footer.php");?>