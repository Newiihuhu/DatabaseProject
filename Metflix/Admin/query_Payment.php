<?php 
include('connectDB.php');

$OPTION_SELECT = $_POST['Payments'];
$SEARCH_INPUT = $_POST['searchInput'];

$sql = "SELECT must.ID, payments.Payment_ID, payments.Card_Number, payments.Package FROM must INNER JOIN payments ON must.Payment_ID = payments.Payment_ID where 1=1";
if($OPTION_SELECT == 0 && $SEARCH_INPUT == ''){}
else if($OPTION_SELECT == 1 && $SEARCH_INPUT != ''){$sql.= " and LOWER(must.ID) LIKE LOWER('%".$SEARCH_INPUT."%')";}
else if($OPTION_SELECT == 2 && $SEARCH_INPUT != ''){$sql.= " and LOWER(payments.Payment_ID) LIKE LOWER('%".$SEARCH_INPUT."%')";}
else if($OPTION_SELECT == 3 && $SEARCH_INPUT != ''){$sql.= " and LOWER(payments.Card_Number) LIKE LOWER('%".$SEARCH_INPUT."%')";}
else if($OPTION_SELECT == 4 && $SEARCH_INPUT != ''){$sql.= " and LOWER(payments.Package) LIKE LOWER('%".$SEARCH_INPUT."%')";}
$sql.=" order by payments.Payment_ID";
$query = mysqli_query($cid,$sql);
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Payment ID</th>
            <th>Card Number</th>
            <th>Package</th>
        </tr>
    </thead>
    <tbody>
        <?php $row = mysqli_num_rows($query);
            if($row==0){
                ?> <tr>
            <td colspan="8">No Result</td>
        </tr> 
		
		<?php
            }else{ ?>
        <?php while($result = mysqli_fetch_Array($query)){?>
        <tr>
            <?php echo '<td class="cell100 column1"><a href=detail.php?input1=' . $result["ID"] . '> ' . $result["ID"] . ' </a> ' . ' </td> '; ?>
            <td><?php echo $result['Payment_ID']; ?></td>
            <td><?php echo $result['Card_Number']; ?></td>
            <td><?php echo $result['Package']; ?></td>
        </tr>
        <?php }?>
        <?php }?>
    </tbody>
</table>
<?php 
    mysqli_close($cid);
?>