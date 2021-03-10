<?php session_start(); 
    include('condb.php');

    $ID = $_SESSION['ID'];

    $sql="SELECT * FROM profile 
    WHERE  ID='".$ID."' ";
    $result = mysqli_query($con,$sql);
  
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $_SESSION["Picture"] = $row["Picture"];
        if($_SESSION["Picture"]==null){
            $_SESSION["Picture"] = "img\avatar.png";
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
<!DOCTYPE HTML>
<!--
	Broadcast by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Metflix</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" type="image/png" href="icons/favicon.PNG" />
   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets3/metStyle.css" />
</head>

<body class="subpage">

    <!-- Header -->
    <header id="header" class="alt">
        <!--<div class="logo"><a href="index.html">Transitive <span>by TEMPLATED</span></a></div> -->
        <a href="#menu" class="toggle"><span>Menu</span></a>
    </header>

    <!-- Nav -->
    <nav id="menu">
    <a href="../index.php"><div class="adminBox">
            <div class="row rowBox">
                <div class="col labelBox">
                   <a href="../editProfilepage/editProfilepage.php"><label class="adminLabel"><?php echo $_SESSION["Name"]; ?></label></a>
                </div>
                <div class="col picBox">
                    <img src="img\<?php echo $_SESSION["Picture"];?>" alt="avatarTest Picture" height="65" width="65" class="imgAvatar">
                </div>
            </div>
        </div></a>
        <ul class="links">
            <li><a href="../homepage/homepage.php">Home</a></li>
            <li><a href="../moviespage/moviespage.php">Movies</a></li>
            <li><a href="../packagepage/packagepage.php">Package</a></li>
            <li><a href="../logout.php">Log Out</a></li>
        </ul>

    </nav>

    <!-- Main -->
    <div id="main">

        <!-- One -->
        <section class="wrapper style1">
            <div class="inner">
                <header class="align-center">
                    
                </header>
                <div class="video">
                    <div class="video-wrapper">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/n9DwoQ7HWvI" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                    <p class="caption">
                        SPIDERMAN HOMECOMING
                    </p>
                </div>
            </div>
        </section>

        <!-- Three -->
        <section class="wrapper ">
            <div class="inner">
                <header class="align-center">
                    <h2>Another movies	</h2>
                    
                </header>

                <!-- 3 Column Video Section -->
                <div class="flex flex-3">
                    <div class="video col">
                        <div class="image fit">
                            <img src="images/pic09.jpg" alt="" />
                            <div class="arrow">
                                <div class="icon fa-play"></div>
                            </div>
                        </div>
                        <p class="caption">
                            Cras eget lacus sed mauris scelerisque tincidunt
                        </p>
                        <a href="generic.html" class="link"><span>Click Me</span></a>
                    </div>
                    <div class="video col">
                        <div class="image fit">
                            <img src="images/pic10.jpg" alt="" />
                            <div class="arrow">
                                <div class="icon fa-play"></div>
                            </div>
                        </div>
                        <p class="caption">
                            Vivamus vulputate lacus non massa auctor lobortis
                        </p>
                        <a href="generic.html" class="link"><span>Click Me</span></a>
                    </div>
                    <div class="video col">
                        <div class="image fit">
                            <img src="images/pic11.jpg" alt="" />
                            <div class="arrow">
                                <div class="icon fa-play"></div>
                            </div>
                        </div>
                        <p class="caption">
                            Nam eu nisi non ante sodales interdum a vitae neque
                        </p>
                        <a href="generic.html" class="link"><span>Click Me</span></a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <div class="flex flex-3">
                <div class="col">
                    <h3>Vestibullum</h3>
                    <ul class="alt">
                        <li><a href="#">Nascetur nunc varius commodo.</a></li>
                        <li><a href="#">Vis id faucibus montes tempor</a></li>
                        <li><a href="#">Massa amet lobortis vel.</a></li>
                        <li><a href="#">Nascetur nunc varius commodo.</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Lobortis</h3>
                    <ul class="alt">
                        <li><a href="#">Nascetur nunc varius commodo.</a></li>
                        <li><a href="#">Vis id faucibus montes tempor</a></li>
                        <li><a href="#">Massa amet lobortis vel.</a></li>
                        <li><a href="#">Nascetur nunc varius commodo.</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Accumsan</h3>
                    <ul class="alt">
                        <li><a href="#">Nascetur nunc varius commodo.</a></li>
                        <li><a href="#">Vis id faucibus montes tempor</a></li>
                        <li><a href="#">Massa amet lobortis vel.</a></li>
                        <li><a href="#">Nascetur nunc varius commodo.</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
            </ul>
           
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>