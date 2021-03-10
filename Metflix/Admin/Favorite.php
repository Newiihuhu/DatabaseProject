<!DOCTYPE html>
<?php
include('header.php');
?>
<html>

<head>
    <style>
    .fNew {
        text-align: center;
        font-family: Lato-Regular;
        margin-bottom: 5px;
        s: 50px;
    }

    .textinfo {
        text-align: center;
    }

    .sizetable {
        height: 98%;
        width: 30%;
        margin-left: 27%;
        margin-top: 30px;
    }

    .searchid {
        text-align: center;
        margin-top: 30px;
        margin-right: 264px;
    }
    </style>
</head>

<body>

    <div class="page-wrap">
        <!-- Nav -->


        <!-- Main -->
        <section style="margin-left: 113px;margin-top: 49px; background:transparent">
            <!-- Header -->

            <!-- Section -->
            <section>
                <div class="inidiv">

                    <div class="sizetable">
                        <div>
                            <div>
                                <?php include("condb.php"); ?>
                                <h1 class="fNew">Favorite : <?php echo $_GET["input1"]; ?></h1>
                                
                            </div>
                            <div >
                                <div >
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="row100 head">
                                                <th style="width: 50%">Username</th>
                                                <th style="width: 50%">Movie</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="row100 body">
                                                <?php include("condb.php"); ?>
                                                <?php
                                                $ID = $_GET["input1"];
                                                $sql = "SELECT p.Username,f.Movie_name,p.ID
                                                FROM profile p INNER JOIN favorite f on p.ID=f.ID";
                                                $strSQL .= " WHERE p.Username LIKE '" . $ID . "%'";
                                                $result = $con->query($sql);
                                                $rid = "";
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        if ($row["Username"] == $ID) { ?>

                                                <td style="width: 50%">
                                                    <?php echo $row["Username"]; ?></td>
                                                <td style="width: 50%">
                                                    <?php echo $row["Movie_name"]; ?></td>

                                            </tr><?php
                                                            $rid = $row["ID"];
                                                        }
                                                    }
                                                } else {
                                                    echo '<h1 class="fNew">No Favorite</h1>';
                                                }

                                                $con->close();
                                                    ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                
                            </div>
                            <?php
                            echo '<a href=detail.php?input1=' .
                                $rid . '>' . '<p class="fNew">' . "กลับไปหน้าก่อนหน้านี้" . ' </p></a> ' . ' </td> ';
                            ?>
                        </div>

                    </div>
                </div>
            </section>
        </section>
    </div>
</body>

</html>