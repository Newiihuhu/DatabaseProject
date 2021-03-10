<?php
include('header.php');
include("condb.php");
?>
<html>

<head>
    <title>Metflix</title>
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
        width: 20%;
        margin-left: 31%;
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
    <div class="inidiv" style="padding-left: 12%">
        <h1 class="fNew">Profile User</h1>
        <div class="searchid">
            <form action="profile.php" method="get">
                ค้นหา <input type="text" placeholder="Search.." name="textSearch">
                <input type="submit">

            </form>
        </div>
        <div class="sizetable">
            <div class="row">
                <div class="col">
                    <table class="table table-bordered">
                        <thead>
                            <th style="width: 50%">ID</th>
                            <th style="width: 50%">Username</th>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                                $sql = "SELECT * FROM profile p INNER JOIN users u ON p.ID = u.ID WHERE (u.Status  = 'member') and (u.ID like '%" . $_GET["textSearch"] . "%'
                                                 or p.Username like '%" . $_GET["textSearch"] . "%')";
                                                $result = $con->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                ?>
                            <tr>

                                <?php
                                                        echo '<td class="cell100 column1" style="width: 50%"><a href=detail.php?input1=' .
                                                            $row["ID"] . '> ' . $row["ID"] . ' </a> ' . ' </td> ';
                                                ?>
                                <td style="width: 50%">
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

    </div>

</body>

</html>