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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>

<body id="top">
    <!-- Header -->
    <header id="header" class="alt">
        <!--<div class="logo"><a href="index.html">Transitive <span>by TEMPLATED</span></a></div> -->
        <a href="#menu" class="toggle"><span>Menu</span></a>
    </header>

    <!-- Nav -->
    <nav id="menu">
        <a href="../index.php">
            <div class="adminBox">
                <div class="row rowBox">

                    <div class="col labelBox">
                        <a href="../editProfilepage/editProfilepage.php"><label
                                class="adminLabel"><?php echo $_SESSION["Name"]; ?></label></a>
                    </div>
                    <div class="col picBox">
                        <img src="img\<?php echo $_SESSION["Picture"];?>" alt="avatarTest Picture" height="65"
                            width="65" class="imgAvatar">
                    </div>

                </div>
            </div>
        </a>
        <ul class="links">
            <li><a href="../homepage/homepage.php">Home</a></li>
            <li><a href="../moviespage/moviespage.php">Movies</a></li>
            <li><a href="packagepage.php">Package</a></li>
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
                <h1>Package</h1>
                <p>Choose the package that is best for you.<br />
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
                    <a href="images/standard.jpg" class="image fit"><img src="images/standard.jpg" alt="" /></a>
                    <div class="inner">
                        <h2>STANDARD</h2>
                        <p>HD AVALABLE : YES<br />ULTRA HD AVALABLE : NO<br />HIGH DYNAMIC RANGE(HDR) AVALABLE :
                            NO<br />SCREENS YOU CAN WATCHON AT THE SAME TIME : 2 </p>
                        <button type="button" class="button fit" onclick="confirmPackage('standard')">CONFIRM</button>
                    </div>
                </div>

                <div class="box">
                    <a href="images/premium.jpg" class="image fit"><img src="images/premium.jpg" alt="" /></a>
                    <div class="inner">
                        <h2>PREMIUM</h2>
                        <p>HD AVALABLE : YES<br />ULTRA HD AVALABLE : YES<br />HIGH DYNAMIC RANGE(HDR) AVALABLE :
                            NO<br />SCREENS YOU CAN WATCHON AT THE SAME TIME : 4 </p>
                            <button type="button" class="button fit" onclick="confirmPackage('premium')">CONFIRM</button>
                    </div>
                </div>


                <div class="box">
                    <a href="images/ultra.jpg" class="image fit"><img src="images/ultra.jpg" alt="" /></a>
                    <div class="inner">
                        <h2>ULTRA</h2>
                        <p>HD AVALABLE : YES<br />ULTRA HD AVALABLE : YES<br />HIGH DYNAMIC RANGE(HDR) AVALABLE :
                            YES<br />SCREENS YOU CAN WATCHON AT THE SAME TIME : 4 </p>
                            <button type="button" class="button fit" onclick="confirmPackage('ultra')">CONFIRM</button>
                    </div>

                </div>
                <div>
                    <dialog id="standardDialog" style="width: 30%;height: 25%;font-size: 20px;font-weight: 500;border: none;">Input your card (10numbers)
                        <input type="text" id="standardInput">
                        <a><button type="button" onclick="addpackage('standard')"class="button" style="height: 50px;margin-top:20px;margin-left: 30%;text-align:center;">OK</button></a>
                        <a><button type="button" onclick="closepackage('standardDialog')"class="button" style="height: 50px;text-align:center;">close</button></a>
                    </dialog>
                </div>
                <div>
                    <dialog id="premiumDialog" style="width: 30%;height: 25%;font-size: 20px;font-weight: 500;border: none;">Input your card (10numbers)
                        <input type="text" id="premiumInput">          
                        <a><button type="button" onclick="addpackage('premium')"class="button" style="height: 50px;margin-top:20px;margin-left: 30%;text-align:center;">OK</button></a>
                        <a><button type="button" onclick="closepackage('premiumDialog')"class="button" style="height: 50px;text-align:center;">close</button></a>
                    </dialog>
                </div>
                <div>
                    <dialog id="ultraDialog" style="width: 30%;height: 25%;font-size: 20px;font-weight: 500;border: none;">Input your card (10numbers)
                        <input type="text" id="ultraInput">      
                        <a><button type="button" onclick="addpackage('ultra')"class="button" style="height: 50px;margin-top:20px;margin-left: 30%;text-align:center;">OK</button></a>
                        <a><button type="button" onclick="closepackage('ultraDialog')"class="button" style="height: 50px;text-align:center;">close</button></a>
                    </dialog>
                </div>
            </div>


            <script type="text/javascript">
            // var x = document.getElementById("mydialog");

            function confirmPackage(package){
                var dialog = document.getElementById(package+"Dialog");
                dialog.show();
            }

            function closepackage(id) {
                var dialog = document.getElementById(id);
                dialog.close();
            }

            function addpackage(package) {
                // alert(package);
                var input = document.getElementById(package+"Input");
                $.ajax({
                    url: "addpackage.php",
                    type: "POST",
                    data: {
                        card: input.value,
                        package: package
                    },
                    beforeSend: function() {
                        // $('#loadMe').modal('show');
                    },
                    complete: function() {
                        // $('#loadMe').modal('hide');
                    },
                    success: function(data) {
                        alert('save success');
                        closepackage(package+'Dialog');
                        // window.location = "homepage.php";
                    }
                })
            }
            </script>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                

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