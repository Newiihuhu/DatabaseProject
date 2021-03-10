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
            $_SESSION["Picture"] = "avatar.png";
        }
        else{
            $_SESSION["Picture"] = $row["Picture"];
        }
    }else{
        $_SESSION["Picture"] = "avatar.png";
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
	Full Motion by TEMPLATED
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
    <link rel="stylesheet" href="assets2/css/main.css" />
    <link rel="stylesheet" href="assets3/metStyle.css" />

</head>

<body id="top">
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
            <li><a href="homepage.php">Home</a></li>
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
                <p>The most complete movie website, including more than 500 movies.<br />
                    <!-- designed by <a href="https://templated.co/">Templated</a> and released under the Creative Commons License.</p> -->
            </header>
            <a href="#main" class="more">Learn More</a>
        </div>
    </section>

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <!-- Boxes -->
            <div class="thumbnails">

                <div class="box">
                    <a href="../images/Movies/01.jpg" class="image fit"><img src="../images/Movies/01.jpg" alt="" /></a>
                    <div class="inner">
                        <h2>STRANGER THINGS</h2>
                        <p>When a lost man meets this small town, he discovers a forgery about a terrifying and
                            terrifying supernatural secret experiment.<br />
                            <h4>Starring: David Harbor, Finn Wolff</h4>
                            <h4>Creator: Duffer Brothers</h4>
                        </p>
                        <a href="https://youtube.com/b9EkMc79ZSU" class="button fit"
                            data-poptrox="youtube,800x400">Watch</a>
                    </div>
                </div>

                <div class="box">
                    <a href="../images/Movies/02.jpg" class="image fit"><img src="../images/Movies/02.jpg" alt="" /></a>
                    <div class="inner">
                        <h2>BLACK PANTHER</h2>
                        <p>T'Challa, the superpowered new leader of the hidden, highly advanced African nation of
                            Wakanda, strives to protect his home from enemies old and new.<br />
                            <h4>Starring: Chadwick Boseman, <br />Michael B. Jordan, Lupita Nyong'o</h4>
                            <a href="https://www.youtube.com/xjDjIWPwcPU" class="button style2 fit"
                                data-poptrox="youtube,800x400">Watch</a>
                    </div>
                </div>

                <div class="box">
                    <a href="../images/Movies/03.jpg" class="image fit"><img src="../images/Movies/03.jpg" alt="" /></a>
                    <div class="inner">
                        <h2>KLAUS</h2>
                        <p>A simple act of kindness always sparks another, even in a frozen, faraway place. When
                            Smeerensburg's new postman, Jesper, befriends toymaker Klaus, their gifts melt an age-old
                            feud and deliver a sleigh full of holiday traditions.<br />
                            <h4>Starring: Jason Schwartz, J.K. Simmons, Rachida Jones</h4>
                        </p>
                        <a href="https://www.youtube.com/taE3PwurhYM" class="button style3 fit"
                            data-poptrox="youtube,800x400">Watch</a>
                    </div>
                </div>

                <div class="box">
                    <a href="../images/Movies/04.jpg" class="image fit"><img src="../images/Movies/04.jpg" alt="" /></a>
                    <div class="inner">
                    <h2>JOURNEY 2</h2>
                        <p>When a distress signal pinpoints his grandfather's location on an uncharted island, teen Sean Anderson teams with an unlikely ally: his stepfather.<br />
                            <h4>Dwayne Johnson, Michael Caine, Josh Hutcherson</h4>
                        </p>
                        <a href="https://www.youtube.com/qdFCjwcK8IE" class="button style2 fit"
                            data-poptrox="youtube,800x400">Watch</a>
                    </div>
                </div>

                <div class="box">
                    <a href="../images/Movies/05.jpg" class="image fit"><img src="../images/Movies/05.jpg" alt="" /></a>
                    <div class="inner">
                    <h2>KRASUE : INHUMAN KISS</h2>
                        <p>เด็กสาววัยรุ่นคนหนึ่งได้รับความรักที่เพื่อนวัยเด็กสองคนต่างก็มีให้เธอ ขณะเดียวกันก็ต้องสู้กับผีร้ายกระหายเลือดภายในร่างที่เผยตัวออกมาในยามค่ำคืน<br />
                            <h4>ภัณฑิรา พิพิธยากร,โอบนิธิ วิวรรธนวรางค์,สพล อัศวมั่นคง</h4>
                            
                        </p>
                        <a href="https://www.youtube.com/CBEz-cJSGxo" class="button style3 fit"
                            data-poptrox="youtube,800x400">Watch</a>
                    </div>
                </div>

                <div class="box">
                    <a href="../images/Movies/06.jpg" class="image fit"><img src="../images/Movies/06.jpg" alt="" /></a>
                    <div class="inner">
                    <h2>IT CHAPTER II </h2>
                        <p>27 years after overcoming the malevolent supernatural entity Pennywise, the former members of the Losers' Club, who have grown up and moved away from Derry, are brought back together by a devastating phone call.<br />
                            <h4>Starring: essica Chastain, James McAvoy</h4>
                         
                        </p>
                        <a href="https://www.youtube.com/zqUopiAYdRg" class="button fit"
                            data-poptrox="youtube,800x400">Watch</a>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <h2></h2>
            <!--<p>Pellentesque eleifend malesuada efficitur. Curabitur volutpat dui mi, ac imperdiet dolor tincidunt nec.
                Ut erat lectus, dictum sit amet lectus a, aliquet rutrum mauris. Etiam nec lectus hendrerit, consectetur
                risus viverra, iaculis orci. Phasellus eu nibh ut mi luctus auctor. Donec sit amet dolor in diam feugiat
                venenatis. </p>-->

            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.poptrox.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- Scripts2 -->
    <script src="assets2/js/jquery.min.js"></script>
    <script src="assets2/js/jquery.scrolly.min.js"></script>
    <script src="assets2/js/jquery.scrollex.min.js"></script>
    <script src="assets2/js/skel.min.js"></script>
    <script src="assets2/js/util.js"></script>
    <script src="assets2/js/main.js"></script>

</body>

</html>