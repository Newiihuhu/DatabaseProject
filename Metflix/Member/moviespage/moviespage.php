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

<body>
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
    <!-- Banner -->
    <!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
    <section id="banner" data-video="images/banner">
        <div class="inner">
            <header>
                <h1>Metflix</h1>
                <p>Watch movies without boundaries</p>
            </header>
            <a href="#main" class="button big alt scrolly">Watch</a>
        </div>

    </section>

    <!-- Main -->
    <div id="main">

        <!-- One -->
        <section class="wrapper style1">
            <div class="inner">
                <header class="align-center">
                    <h2>New movies</h2>
                    
                </header>
                <!-- 2 Column Video Section -->
                <div class="flex flex-2">
                    <div class="video col">
                        <div class="image fit">
                            <img src="../images/Movies/11.jpg" alt="" />
                            <div class="arrow">
                                <div class="icon fa-play"></div>
                            </div>
                        </div>
                        <p class="caption">
                           <============= SPIDERMAN HOMECOMING =============>
                        </p>
                        <a href="generic.php" class="link"><span>Click Me</span></a>
                    </div>
                    <div class="video col">
                        <div class="image fit">
                            <img src="../images/Movies/09.jpg" alt="" />
                            <div class="arrow">
                                <div class="icon fa-play"></div>
                            </div>
                        </div>
                        <p class="caption">
                           <==================== BIRD BOX ====================>
                        </p>
                        <a href="generic.php" class="link"><span>Click Me</span></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Two -->
        <section class="wrapper style2">
            <div class="inner">
                <header>
                    <h2>Category</h2>
                </header>
                <!-- Tabbed Video Section -->
                <div class="flex flex-tabs">
                    <ul class="tab-list">
                        <li><a href="#" data-tab="tab-1" class="active">HORROR</a></li>
                        <li><a href="#" data-tab="tab-2">ACTION</a></li>
                        <li><a href="#" data-tab="tab-3">DRAMA</a></li>
                    </ul>
                    <div class="tabs">

                        <!-- Tab 1 -->
                        <div class="tab tab-1 flex flex-3 active">
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/01.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/05.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/06.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/09.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/10.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                            
                        </div>

                        <!-- Tab 2 -->
                        <div class="tab tab-2 flex flex-3">
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/02.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/03.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/04.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/07.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/11.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/12.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                        </div>

                        <!-- Tab 3 -->
                        <div class="tab tab-3 flex flex-3">
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/05.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/08.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                            <!-- Video Thumbnail -->
                            <div class="video col">
                                <div class="image fit">
                                    <img src="../images/Movies/10.jpg" alt="" />
                                    <div class="arrow">
                                        <div class="icon fa-play"></div>
                                    </div>
                                </div>
                                <a href="generic.php" class="link"><span>Click Me</span></a>
                            </div>
                           
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Three -->
        <section class="wrapper ">
            <div class="inner">
                <header class="align-center">
                   
                </header>

                <!-- 3 Column Video Section -->
                <div class="flex flex-3">
                    <div class="video col">
                        <div class="image fit">
                            <img src="../images/Movies/10.jpg" alt="" />
                            <div class="arrow">
                                <div class="icon fa-play"></div>
                            </div>
                        </div>
                        
                        <a href="generic.html" class="link"><span>Click Me</span></a>
                    </div>
                    <div class="video col">
                        <div class="image fit">
                            <img src="../images/Movies/05.jpg" alt="" />
                            <div class="arrow">
                                <div class="icon fa-play"></div>
                            </div>
                        </div>
                        
                        <a href="generic.html" class="link"><span>Click Me</span></a>
                    </div>
                    <div class="video col">
                        <div class="image fit">
                            <img src="../images/Movies/07.jpg" alt="" />
                            <div class="arrow">
                                <div class="icon fa-play"></div>
                            </div>
                        </div>
                        
                        <a href="generic.php" class="link"><span>Click Me</span></a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <footer id="footer">
        
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


    
    <!-- Scripts2 -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>