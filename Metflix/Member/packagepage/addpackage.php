<?php include("condb.php");
	  session_start();

$card = $_POST["card"];
$package = $_POST["package"];
$ID = $_SESSION['ID'];


$duplicate=mysqli_query($con,"select * from payments where ID='$ID'");
if (mysqli_num_rows($duplicate)>0)
{
	$sql = "UPDATE `payments` SET `Package` = '."$package".' WHERE `payments`.`Payment_ID` = '".$ID."';)";
	$query = mysqli_query($con,$sql);
}
else
{
	$sql = "INSERT INTO payments (Payment_ID,`Card_Number`,Package) VALUES ('".$ID."','".$card."','".$package."')";
	$query = mysqli_query($con,$sql);
	$sql2 = "INSERT INTO must (ID,Payment_ID) VALUES ('".$ID."','".$ID."')";
	$query = mysqli_query($con,$sql2);
}




?>