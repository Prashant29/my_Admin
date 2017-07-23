<?php
// require '../../database/data_config.php';
check_action();

function check_action(){
    $action = $_POST['action'];
    switch ($action) {
        case 'about':
            update_about();
            break;
        case 'contact':
            update_contact();
            break;
        case 'follow_title':
            update_follow_title();
            break;
        case 'follow_icon':
            update_follow_icon();
            break;
        case 'add_follow_icon':
            insert_follow_icon();
            break;
        default:
            header("Location: ../../index.php");
            break;
    }
}
function update_about(){
    require '../../database/data_config.php';
    //print_r($_POST);
    $title = $_POST['title'];
    $about = mysqli_escape_string($connect ,$_POST['about_me']);
    $id = $_POST['id'];
    $query = "UPDATE `tbl_footer_about_me` SET `about_title`='".$title."',`about_me`='".$about."' WHERE `id` = ".$id;
    //echo $query;
    $resource = mysqli_query($connect, $query) or die(mysqli_error($connect));
    $_SESSION['success_main_footer'] = "Successfully Updated";
    header("Location: ../../main_footer.php");
}
function update_follow_title(){
    require '../../database/data_config.php';

    $title=$_POST['title'];
    $id = $_POST['id'];
    //print_r($_POST);
    $query = "UPDATE `tbl_footer_follow_title` SET `follow_title`='".$title."' WHERE `id` = ".$id;
    $resource = mysqli_query($connect, $query) or die(mysqli_error($connect));
    $_SESSION['success_main_footer'] = "Successfully Updated";
    header("Location: ../../main_footer.php");
}
function update_follow_icon(){
    require '../../database/data_config.php';

    $id=$_POST['id'];
    if(!$_FILES['img1']['name']){
        $_SESSION['success_main_footer'] = "No Changes Occur";
    }
    if($_FILES['img1']['name']){
        $img1 = $_FILES['img1'];
        if($img1['type'] == 'image/png' || $img1['type'] == "image/vnd.microsoft.icon"){
            if(move_uploaded_file($img1['tmp_name'],"../../../assets/images/icon/".$img1['name'])){
                $query = "UPDATE `tbl_footer_follow_me` SET `social_icon_color`= '".$img1['name']."', `icon_link`= '".$_POST['link']."' WHERE id=".$id;
                $resource = mysqli_query($connect, $query) or die(mysqli_error($connect));
                $_SESSION['success_main_footer'] = "Successfully Updated";
            }
        }
        else{
            $_SESSION['error_uploading'] = "Not Supported File Image 1";
            $_SESSION['id'] = $id;
        }
    }else{
        $query = "UPDATE `tbl_footer_follow_me` SET `icon_link`= '".$_POST['link']."' WHERE id=".$id;
        $resource = mysqli_query($connect, $query) or die(mysqli_error($connect));
        $_SESSION['success_main_footer'] = "Successfully Updated";
    }
    header("Location: ../../main_footer.php");
}
function update_contact(){
    require '../../database/data_config.php';

    $query = "UPDATE `tbl_footer_contact` SET
    `contact_title`='".$_POST['title']."',
    `street_name`='".mysqli_escape_string($connect, $_POST['street'])."',
    `city_name`='".mysqli_escape_string($connect, $_POST['city'])."',
    `email`='".$_POST['email']."',
    `phone_no`='".$_POST['phone_no']."',
    `address_title`='".$_POST['address']."' WHERE `id` = ".$_POST['id'];
    $resource = mysqli_query($connect, $query) or die(mysqli_error());
    $_SESSION['success_main_footer'] = "Successfully Updated";
    header("Location: ../../main_footer.php");
}
function insert_follow_icon(){
    require '../../database/data_config.php';
    $img1 = $_FILES['img1'];
    if(!$_FILES['img1']['name']){
        $_SESSION['error_insert'] = "Please Select Image";
    }
    if($img1['type'] == 'image/png' || $img1['type'] == "image/vnd.microsoft.icon"){
        if(move_uploaded_file($img1['tmp_name'],"../../../assets/images/icon/".$img1['name'])){
            $query = "INSERT INTO `tbl_footer_follow_me` (`social_icon_color`, `icon_link`) VALUES(
                '".$img1['name']."',
                 '".$_POST['link']."')";

            $resource = mysqli_query($connect, $query) or die(mysqli_error($connect));
            $_SESSION['success_main_footer'] = "Successfully Updated";
        }
    }
    else{
        $_SESSION['error_uploading'] = "Not Supported File Image 1";
    }
    header("Location: ../../main_footer.php");
}
?>
