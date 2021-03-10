<?php
session_start();
include('connectDB.php');
$ID = $_SESSION['ID'];
$Name = $_POST['Name']; 
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$sql = "update profile set
Username= '".$Username."'
where ID = '".$ID."'";

$query = mysqli_query($cid,$sql);

$sql = "update users set
Name = '".$Name."',
Email = '".$Email."',
Password = '".$Password."'
where ID = '".$ID."'";

$query = mysqli_query($cid,$sql);

?>