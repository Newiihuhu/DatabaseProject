<?php session_start(); 
include('condb.php');


    $ID = $_SESSION['ID'];

    $sql="SELECT * FROM profile 
    WHERE  ID='".$ID."' ";
    $result = mysqli_query($con,$sql);
  
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        if($_SESSION["Picture"]==null){
            $_SESSION["Picture"] = "avatar.png";
        }
        else{
            $_SESSION["Picture"] = $row["Picture"];
        }
        
    }

    $sql="SELECT * FROM users 
    WHERE  ID='".$ID."' ";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        
            $_SESSION["Name"] = $row["Name"];
        
        
    }
    

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="metStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="adminBox">
        <div class="row rowBox">
            <div class="col labelBox">
                <a href="editprofileAdmin.php"><label class="adminLabel">Admin :
                        <?php echo $_SESSION["Name"]; ?></label></a>
            </div>
            <div class="col picBox">
                <img src="..\img\<?php echo $_SESSION["Picture"];?>" alt="avatarTest Picture" height="65" width="65"
                    class="imgAvatar">
            </div>
        </div>
    </div>

    <div class="sidebar">
        <header><img src="img\DB.png" alt="Metflix" height="120" width="150"></header>
        <ul>
            <li><a href="homepageAdmin.php">Home</a></li>
            <li><a href="moviepage.php">Movies</a></li>
            <li><a href="profile.php">Profile User</a></li>
            <li><a href="Paymentpage.php">Payments</a></li>
            <li style="position: absolute; width: 50%;bottom: 10px;"><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</body>

</html>