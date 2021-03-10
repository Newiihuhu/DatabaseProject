<?php
    include('header.php');
    include('condb.php');
?>
<html>

<head>
    <title>Paymentdetail</title>
</head>

<body>
    <div class="iniDiv">
        <h1>Paymentdetail</h1>
        <div class="searchform">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>


        <div class="shapeTable">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Payment ID</th>
                        <th>Payment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql = "SELECT must.ID, must.Payment_ID, payments.Pay_Type  FROM must INNER JOIN payments ON must.Payment_ID = payments.Payment_ID;";
                    $query = mysqli_query($con,$sql);
                ?>
                    <?php while($result = mysqli_fetch_Array($query)){?>
                    <tr>
                        <td><?php echo $result['ID']; ?></td>
                        <td><?php echo $result['Payment_ID']; ?></td>
                        <td><?php echo $result['Payment']; ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
<?php 
    mysqli_close($con);
?>