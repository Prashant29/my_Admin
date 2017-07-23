<?php
check_action();

function check_action(){
    $action = $_POST['action'];
    switch ($action) {
        case 'update':
            update_footer();
            break;

        default:
            # code...
            break;
    }
}
function update_footer(){
    require '../../database/data_config.php';
    $id= $_POST['id'];
    $query = "UPDATE `tbl_footer_2` SET `company_name`='".$_POST['company_name']."',`year`='".$_POST['year']."' WHERE `id` = ".$id;
    $resource = mysqli_query($connect, $query) or die(mysqli_error($connect));
    $_SESSION['success_footer'] = "Successfully Updated";
    header("Location: ../../footer2.php");
}
 ?>
