<?php
include('connectDB.php');
$Movie_name = $_POST['Movie_name'];
$Actor = $_POST['Actor'];
$Diraction = $_POST['Diraction'];
$Studio = $_POST['Studio'];
$Time = $_POST['Time'];
$Short_Story = $_POST['Short_Story'];

$Type = $_POST['Type'];
$sql = "update type_movie set
Type = '".$Type."'
where Movie_name = '".$Movie_name."'";

$query = mysqli_query($cid,$sql);

$sql = "update movies set
Actor = '".$Actor."',
Diraction = '".$Diraction."',
Studio = '".$Studio."',
Time = '".$Time."',
`Short Story` = '".$Short_Story."'
where Movie_name = '".$Movie_name."'";

$query = mysqli_query($cid,$sql);
?>