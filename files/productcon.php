<?php
include("session.php");
?>
<?php
include("con1.php");
$name=$_POST["name"];
$category=$_POST["category"];
$price=$_POST["price"];
$image=$_FILES["image"]["name"];
move_uploaded_file($_FILES['image']['tmp_name'],"product/".$image);
$imgpath="product/".$image;
$description=$_POST["description"];
$query="insert into product(name,category,price,image,description)values('$name','$category','$price','$imgpath','$description')";
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert ("Record Not Inserted");
window.location="productmaster.php";
</script>
<?php
}
else
{
	header("location:productmaster.php");
}
?>
