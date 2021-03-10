<!DOCTYPE html>
<?php
include('header.php');
?>
<html>

<head>
    <title>Generic - Snapshot by TEMPLATED</title>

    <style>
    .fNew {
        text-align: center;
        font-family: Lato-Regular;
        margin-bottom: 5px;
        margin-top: 50px;
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
                <div class="inidiv" style="margin-left: 6%;">
                    <h1 class="fNew">Profile User</h1>
                    <div class="sizetable">
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="row100 head">
                                            <th style="width: 50%">The topic</th>
                                            <th style="width: 50%">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="row100 body">
                                            <?php include("condb.php"); ?>
                                            <?php
                                                $ID = $_GET["input1"];
                                                $strSQL = "SELECT *
                                FROM profile p INNER JOIN users u ON p.ID = u.ID";
                                                $strSQL .= " WHERE u.ID LIKE '" . $ID . "%'";
                                                $result = $con->query($strSQL);
                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                ?>
                                        <tr>
                                            <td class="cell100 column1" style="width: 50%">ID</td>
                                            <td class="cell100 column2" style="width: 50%"><?php echo $row["ID"]; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cell100 column1" style="width: 50%">Username</td>
                                            <td class="cell100 column2" style="width: 50%">
                                                <?php echo $row["Username"]; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="cell100 column1" style="width: 50%">Name</td>
                                            <td class="cell100 column2" style="width: 50%"><?php echo $row["Name"]; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cell100 column1" style="width: 50%">Email</td>
                                            <td class="cell100 column2" style="width: 50%"><?php echo $row["Email"]; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cell100 column1" style="width: 50%">Password</td>
                                            <td class="cell100 column2" style="width: 50%">
                                                <?php echo $row["Password"]; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="cell100 column1" style="width: 50%">Status</td>
                                            <td class="cell100 column2" style="width: 50%"><?php echo $row["Status"]; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cell100 column1" style="width: 50%">History</td>
                                            <?php
                                                        echo '<td class="cell100 column1" style="width: 50%"><a href=History.php?input1=' .
                                                            $row["Username"] . '>' . "All history" . ' </a> ' . ' </td> ';
                                                ?>
                                        </tr>
                                        <tr>
                                            <td class="cell100 column1" style="width: 50%">Favorite</td>
                                            <?php include("condb.php"); ?>

                                            <?php
                                                        echo '<td class="cell100 column1" style="width: 50%"><a href=Favorite.php?input1=' .
                                                            $row["Username"] . '>' . "All Favorite" . ' </a> ' . ' </td> ';
                                                ?>
                                        </tr>
                                        <?php
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                                $con->close(); ?>


                                        <tr>
                                            <td style="width: 50%">Card Number</td>
                                            <td style="width: 50%">
                                                <?php include("condb.php"); ?>
                                                <?php
                                            $t =  "SELECT p.ID,pm.Card_Number
                                            FROM profile p  INNER JOIN must m ON p.ID = m.ID 
                                            INNER JOIN payments pm ON m.Payment_ID=pm.Payment_ID";
                                            $t .= " WHERE p.ID LIKE '" . $ID . "%'";
                                            $result = $con->query($t);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                            ?>
                                                <?php
                                                    echo $row["Card_Number"];

                                                    ?></td><?php
                                                        }
                                                    } else {
                                                        echo "No payment information";
                                                    } ?>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%">Package</td>
                                            <td style="width: 50%">
                                                <?php include("condb.php"); ?>
                                                <?php
                                            $t =  "SELECT p.ID,pm.Package
                                            FROM profile p  INNER JOIN must m ON p.ID = m.ID 
                                            INNER JOIN payments pm ON m.Payment_ID=pm.Payment_ID";
                                            $t .= " WHERE p.ID LIKE '" . $ID . "%'";
                                            $result = $con->query($t);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                            ?>
                                                <?php
                                                    echo $row["Package"];

                                                    ?></td><?php
                                                        }
                                                    } else {
                                                        echo "No payment information";
                                                    }
                                                    $con->close(); ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>

                    </div>
                    <a href="profile.php">
                        <p class="fNew">กลับไปหน้าก่อนหน้านี้</p>
                    </a>
                </div>
            </section>
        </section>
    </div>

</body>

</html>