<?php 
include('connectDB.php');

$OPTION_SELECT = $_POST['movies'];
$SEARCH_INPUT = $_POST['searchInput'];

$sql = "select m.Movie_Name , t.Type ,m.Actor ,m.Diraction ,m.Studio ,m.Time ,m.`Short Story` from movies m inner join type_movie t on m.Movie_Name = t.Movie_Name where 1=1";
if($OPTION_SELECT == 0 && $SEARCH_INPUT == ''){}
else if($OPTION_SELECT == 1 && $SEARCH_INPUT != ''){$sql.= " and LOWER(m.Movie_Name) LIKE LOWER('%".$SEARCH_INPUT."%')";}
else if($OPTION_SELECT == 2 && $SEARCH_INPUT != ''){$sql.= " and LOWER(t.Type) LIKE LOWER('%".$SEARCH_INPUT."%')";}
else if($OPTION_SELECT == 3 && $SEARCH_INPUT != ''){$sql.= " and LOWER(m.Actor) LIKE LOWER('%".$SEARCH_INPUT."%')";}
else if($OPTION_SELECT == 4 && $SEARCH_INPUT != ''){$sql.= " and LOWER(m.Diraction) LIKE LOWER('%".$SEARCH_INPUT."%')";}
else if($OPTION_SELECT == 5 && $SEARCH_INPUT != ''){$sql.= " and LOWER(m.Studio) LIKE LOWER('%".$SEARCH_INPUT."%')";}
$sql.=" order by m.Movie_Name";
$query = mysqli_query($cid,$sql);
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Movie Name</th>
            <th>Type</th>
            <th>Actor</th>
            <th>Direction</th>
            <th>Studio</th>
            <th>Time</th>
            <th>Short Story</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $row = mysqli_num_rows($query);
            if($row==0){
                ?> <tr>
            <td colspan="8">No Result</td>
        </tr> <?php
            }else{ ?>
        <?php while($result = mysqli_fetch_Array($query)){?>
        <tr>
            <td><?php echo $result['Movie_Name']; ?></td>
            <td><?php echo $result['Type']; ?></td>
            <td><?php echo $result['Actor']; ?></td>
            <td><?php echo $result['Diraction']; ?></td>
            <td><?php echo $result['Studio']; ?></td>
            <td><?php echo $result['Time']; ?></td>
            <td><?php echo $result['Short Story']; ?></td>
            <td>
                <button class="button" type="button" onclick="deleteClick('<?php echo $result['Movie_Name']; ?>')">delete</button>
                <button class="button" type="button" style="margin-top:3px;" onclick="editForm('<?php echo $result['Movie_Name']; ?>')">edit</button>
            </td>
        </tr>
        <?php }?>
        <?php }
        ?>
    </tbody>
</table>
<?php 
    mysqli_close($cid);
?>