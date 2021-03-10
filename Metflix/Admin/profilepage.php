<!DOCTYPE html>
<?php
include('header.php');
?>
<html>

<head>
    <title>Metflix</title>
    <link rel="stylesheet" href="css2/main.css" />
    <link rel="icon" type="image/png" href="images2/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor2/bootstrap/css/bootstrap.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts2/font-awesome-4.7.0/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor2/animate/animate.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor2/select2/select2.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor2/perfect-scrollbar/perfect-scrollbar.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css2/util.css" />
    <link rel="stylesheet" type="text/css" href="css2/main2.css" />
    <style>
        .fNew {
            text-align: center;
            font-family: Lato-Regular;
            margin-bottom: 5px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"></script>
</head>

<body>

    <div class="page-wrap">
        <!-- Nav -->
        <!-- Main -->
        <section style="margin-left: 113px;margin-top: 49px; background:transparent">
            <!-- Header -->

            <!-- Section -->
            <section>
                <div class="limiter">
                    <h1 class="fNew">Profile User</h1>
                    <!--หา-->
                    <div class="searchform">
                        <?php include("condb.php"); ?>
                        <form action="profile.php" method="get">
                            ค้นหา <input type="text" placeholder="Search.." name="textSearch">
                            <input type="submit">

                        </form>
                    </div>
                    <!--หา-->
                    <div class="shapeTable">
                        <div class="wrap-table100">

                            <div class="table100 ver1 m-b-110">
                                <div class="table100-head">
                                    <table>
                                        <thead>
                                            <tr class="row100 head">
                                                <th class="cell100 column1" style="width: 50%">ID</th>
                                                <th class="cell100 column2" style="width: 50%">Username</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="table100-body js-pscroll">
                                    <table>
                                        <tbody>
                                            <tr class="row100 body">
                                                <?php include("condb.php"); ?>
                                                <?php
                                                $sql = "SELECT * FROM profile p INNER JOIN users u ON p.ID = u.ID WHERE (u.Status  = 'member') and (u.ID like '%" . $_GET["textSearch"] . "%'
                                                 or p.Username like '%" . $_GET["textSearch"] . "%')";
                                                $result = $con->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                ?>
                                            <tr>
                                                <!--<td class="cell100 column1" style="width: 50%"><?php echo $row["ID"]; ?></td>
                          -->
                                                <?php
                                                        echo '<td class="cell100 column1" style="width: 50%"><a href=detail.php?input1=' .
                                                            $row["ID"] . '> ' . $row["ID"] . ' </a> ' . ' </td> ';
                                                ?>
                                                <td class="cell100 column2" style="width: 50%">
                                                    <?php echo $row["Username"]; ?></td>

                                            </tr><?php
                                                    }
                                                } else {
                                                    echo '<h1 class="fNew">No user searches.</h1>';
                                                }
                                                $con->close();
                                                    ?>
                                    </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
            </section>
            <!-- Scripts -->
            <script src="assets/js2/jquery.min.js"></script>
            <script src="assets/js2/jquery.poptrox.min.js"></script>
            <script src="assets/js2/jquery.scrolly.min.js"></script>
            <script src="assets/js2/skel.min.js"></script>
            <script src="assets/js2/util.js"></script>
            <script src="assets/js2/main.js"></script>

            <!--===============================================================================================-->
            <script src="vendor2/jquery/jquery-3.2.1.min.js"></script>
            <!--===============================================================================================-->
            <script src="vendor2/bootstrap/js/popper.js"></script>
            <script src="vendor2/bootstrap/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
            <script src="vendor2/select2/select2.min.js"></script>
            <!--===============================================================================================-->
            <script src="vendor2/perfect-scrollbar/perfect-scrollbar.min.js"></script>
</body>

</html>