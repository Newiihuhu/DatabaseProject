<?php 
include('connectDB.php');

$DELETE_NAME = $_POST['delete_name'];

$sql = "delete from type_movie where Movie_Name='".$DELETE_NAME."'";
$query = mysqli_query($cid,$sql);
$sql = "delete from movies where Movie_Name = '".$DELETE_NAME."'";
$query = mysqli_query($cid,$sql);

mysqli_close($cid);
?>