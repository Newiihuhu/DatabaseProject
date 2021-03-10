<?php
include('connectDB.php');
$Movie_name = $_POST['Movie_name']; 
$Actor = $_POST['Actor'];
$Diraction = $_POST['Diraction'];
$Studio = $_POST['Studio'];
$Time = $_POST['Time'];
$Short_Story = $_POST['Short_Story'];

$Type = $_POST['Type'];

$sql = "insert into movies(Movie_Name,Actor,Diraction,Studio,Time,`Short Story`)values('$Movie_name','$Actor','$Diraction','$Studio','$Time','$Short_Story')";
$query = mysqli_query($cid,$sql);
$sql = "insert into type_movie(Movie_Name,Type)VALUES('$Movie_name','$Type')";
$query = mysqli_query($cid,$sql);
?>