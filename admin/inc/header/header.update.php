<?php

if(isset($_POST['action']))
    check_action($_POST['action']);
else
    header("Location: ../../index.php");


function check_action($action){
    // print_r($_POST);
    // die;
    switch ($action) {
        case 'change_bg':
            change_bg($_FILES['bgPic']);
            break;
        case 'change_logo':
            change_logo($_FILES['logo_pic']);
            break;
        case 'change_personal_info':
            change_personal_info();
            break;
        case 'change_additional_info':
            change_additional_info();
            break;
        default:
            header("Location: ../../index.php");
            break;
    }
}
function change_bg($img){
    require '../../database/data_config.php';
    $allowed =  array('gif','png' ,'jpg');
    $filename = $_FILES['bgPic']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext,$allowed) ) {
        $_SESSION['error_uploading'] = "Not Correct Image File";
        header("Location: ../../main_header.php");
    }
    else{
        if(move_uploaded_file($_FILES['bgPic']['tmp_name'], "../../../assets/images/bg/BG.".$ext)){
                $query="UPDATE tbl_main_header set `background_pic` = 'BG.".$ext."' WHERE `id` = ". $_POST['id'];
                //die($query);
                $resource = mysqli_query($connect, $query) or die(mysqli_error($connect));
                $_SESSION['success_header']= "Successfully Updated";
                header("Location: ../../main_header.php");
        }
        else{
            $_SESSION['error_uploading'] = "Too Big For Uploading";
            header("Location: ../../main_header.php");
        }
    }
}
function change_logo($img){
    require '../../database/data_config.php';
    $allowed =  array('gif','png' ,'jpg');
    $filename = $_FILES['logo_pic']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext,$allowed) ) {
        $_SESSION['error_uploading'] = "Not Correct Image File";
        header("Location: ../../main_header.php");
    }
    else{
        if(move_uploaded_file($_FILES['logo_pic']['tmp_name'], "../../../assets/images/logo/logo.".$ext)){
            $query="UPDATE tbl_main_header set `profile_pic` = 'logo.".$ext."' WHERE `id` = ". $_POST['id'];
            $resource = mysqli_query($connect, $query) or die(mysqli_error($connect));
            $_SESSION['success_header'] = "Successfully Updated";
            header("Location: ../../main_header.php");
        }
        else{
            $_SESSION['error_uploading'] = "Too Big For Uploading";
            header("Location: ../../main_header.php");
        }
    }
}
function change_personal_info(){
    require '../../database/data_config.php';
    $name = $_POST['profile_name'];
    $tag = $_POST['tag_line'];
    $email = $_POST['email'];
    $id= $_POST['id'];
    $query = "UPDATE tbl_main_header set `profile_name`='".$name."',
    `tag_line`='".$tag."',
    `email`='".$email."',
    `name_color`='".$_POST['name_color']."',
    `tag_line_color`='".$_POST['tag_line_color']."',
    `email_color`='".$_POST['email_color']."' WHERE `id` = ".$id;
    //die($query);
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
    $_SESSION['success_header'] = "Successfully Updated";
    header("Location: ../../main_header.php");
}
function change_additional_info(){
    require '../../database/data_config.php';
    $description = mysqli_real_escape_string($connect, $_POST['description']);
    $id= $_POST['id'];
    $query = "UPDATE tbl_main_header set `description`='".$description."' WHERE `id` = ".$id;
    //die($query);
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
    $_SESSION['success_header'] = "Successfully Updated";
    header("Location: ../../main_header.php");
}
 ?>
