<?php
if(isset($_GET['id'])){
    require '../../database/data_config.php';
    $query = "DELETE FROM `tbl_work` WHERE `id` = ".$_GET['id'];
    $res = mysqli_query($connect, $query) or die(mysqli_error($connect));
}
header("Location: ../../recent_work.php");
 ?>
