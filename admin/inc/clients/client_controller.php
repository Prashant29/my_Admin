<?php

check_action();

function check_action(){
    $action = $_POST['action'];
    switch ($action) {
        case 'add':
            add_client();
            break;
        case 'update':
            update_client();
            break;
        default:
            header("Location: ../../clients.php");
            break;
    }
}
function add_client(){
    require '../../database/data_config.php';
    if(empty($_POST['name']) || empty($_POST['about']) || empty($_POST['address']) || empty($_POST['link']) || empty($_POST['phone']) ){
        $_SESSION['err'] = $_POST;
    }
    else{
        if($_FILES['pic']['name']){
            $img = $_FILES['pic']['name'];
            if(move_uploaded_file($_FILES['pic']['tmp_name'],"../../../assets/images/icon/".$img)){
                $query = "INSERT INTO `tbl_client`( `client_image`,`client_link`, `client_name`, `about_client`, `client_address`, `client_phone`) VALUES (
                    '".$img."',
                    '".$_POST['link']."',
                    '".$_POST['name']."',
                    '".mysqli_escape_string($connect, $_POST['about'])."',
                    '".$_POST['address']."',
                    '".$_POST['phone']."')";
                    //die($query);
                $res = mysqli_query($connect, $query) or die(mysqli_error($connect));
                $_SESSION['success_client'] = "Successfully Inserted";
            }else{
                $_SESSION['err'] = "Error in Image Uploading";
            }
        }else{
            $query = "INSERT INTO `tbl_client`( `client_image`, `client_link`, `client_name`, `about_client`, `client_address`, `client_phone`) VALUES (
                'd.png',
                '".$_POST['link']."',
                '".$_POST['name']."',
                '".mysqli_escape_string($connect, $_POST['about'])."',
                '".$_POST['address']."',
                '".$_POST['phone']."')";
            $res = mysqli_query($connect, $query) or die(mysqli_error($connect));
            $_SESSION['success_client'] = "Successfully Inserted";

        }
    }
     //print_r($_POST);
    header("Location: ../../clients.php");
}
function update_client(){
    require '../../database/data_config.php';
    if(!$_FILES['pic']['name']){
        $query = "UPDATE `tbl_client` SET
        `client_link`='".$_POST['link']."',
        `client_name`='".$_POST['name']."',
        `about_client`='".mysqli_escape_string($connect, $_POST['about'])."',
        `client_address`='".$_POST['address']."',
        `client_phone`='".$_POST['phone']."' WHERE `id` = ".$_POST['id'];
        $res = mysqli_query($connect, $query) or die(mysqli_error($connect));
        $_SESSION['success_client'] = "Successfully Inserted";
    }
    else{
        if(move_uploaded_file($_FILES['pic']['tmp_name'], "../../../assets/images/client/".$_FILES['pic']['name'])){
            $query = "UPDATE `tbl_client` SET
            `client_image` = '".$_FILES['pic']['name']."',
            `client_link`='".$_POST['link']."',
            `client_name`='".$_POST['name']."',
            `about_client`='".mysqli_escape_string($connect, $_POST['about'])."',
            `client_address`='".$_POST['address']."',
            `client_phone`='".$_POST['phone']."' WHERE `id` = ".$_POST['id'];
            $res = mysqli_query($connect, $query) or die(mysqli_error($connect));
            $_SESSION['success_client'] = "Successfully Updated";
        }else{
            $query = "UPDATE `tbl_client` SET
            `client_image` = '".$_POST['img']."',
            `client_link`='".$_POST['link']."',
            `client_name`='".$_POST['name']."',
            `about_client`='".mysqli_escape_string($connect, $_POST['about'])."',
            `client_address`='".$_POST['address']."',
            `client_phone`='".$_POST['phone']."' WHERE `id` = ".$_POST['id'];
            $res = mysqli_query($connect, $query) or die(mysqli_error($connect));
            $_SESSION['err_upload'] = "Image Can't Upload";
        }
    }
    header("Location: ../../clients.php");

}
 ?>
