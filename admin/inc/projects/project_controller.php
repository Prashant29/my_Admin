<?php
check_action();
function check_action(){
    $action = $_POST['action'];
    switch ($action) {
        case 'add':
            add_project();
            break;
        case 'edit':
            edit_project();
        default:
            # code...
            break;
    }
}

function add_project(){
    require '../../database/data_config.php';
    //echo "<pre>";
    print_r($_POST);
    $arr_type = implode($_POST['type'], " | ");
    //echo $arr_type;
    if($_FILES['pic']['name']){
        if(move_uploaded_file($_FILES['pic']['tmp_name'], "../../../assets/images/project/".$_FILES['pic']['name'])){
            $query="INSERT INTO `tbl_work`( `work_image`, `image_link`, `work_title`, `work_type`) VALUES (
                '".$_FILES['pic']['name']."',
                '".$_POST['link']."',
                '".$_POST['title']."',
                '".$arr_type."')";
            //die($query);
            $res = mysqli_query($connect, $query) or die(mysqli_error($connect));
            $_SESSION['success_project']=  "Successfully Inserted";
        }else{
            $_SESSION['err_upload']=  "Error In Image Upload";
            //die($query);

        }
    }else{
            $query="INSERT INTO `tbl_work`(  `image_link`, `work_title`, `work_type`) VALUES (
                '".$_POST['link']."',
                '".$_POST['title']."',
                '".$arr_type."')";
            $res = mysqli_query($connect, $query) or die(mysqli_error($connect));
            $_SESSION['success_project']=  "Successfully Inserted";
    }
    header("Location: ../../recent_work.php");

}

function edit_project(){
    require '../../database/data_config.php';
    //echo "<pre>";
    //print_r($_POST);
    $arr_type = implode($_POST['type'], " | ");
    if($_FILES['pic']['name']){
        if(move_uploaded_file($_FILES['pic']['tmp_name'], "../../../assets/images/project/".$_FILES['pic']['name'])){
            $query = "UPDATE `tbl_work` SET
                `work_image` = '".$_FILES['pic']['name']."',
                `image_link`='".$_POST['link']."',
                `work_title`='".$_POST['title']."',
                `work_type`='".$arr_type."' WHERE `id` = ".$_POST['id'];
            $res=mysqli_query($connect, $query) or die(mysqli_error($connect));
            $_SESSION['success_project'] = "Successfully Updated";
        }
        else{
            $_SESSION['err_upload'] = "Error In Image Upload";
        }
    }
    else{
        $query = "UPDATE `tbl_work` SET
            `image_link`='".$_POST['link']."',
            `work_title`='".$_POST['title']."',
            `work_type`='".$arr_type."' WHERE `id` = ".$_POST['id'];
        $res=mysqli_query($connect, $query) or die(mysqli_error($connect));
        $_SESSION['success_project'] = "Successfully Updated";
    }

    header("Location: ../../recent_work.php");

}
 ?>
