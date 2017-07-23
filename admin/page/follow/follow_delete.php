<?php
if(isset($_GET)){
    require '../../database/data_config.php';
    include_once '../../include_header.php';
    $id = $_GET['id'];
    $query = "DELETE FROM `tbl_footer_follow_me` WHERE `id` =".$id;
    $resource = mysqli_query($connect, $query) or die(mysqli_error($connect));
    $_SESSION['success_main_footer'] = "Successfully Deleted";
}
header("Location: ../../main_footer.php");
 ?>
