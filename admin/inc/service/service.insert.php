<?php
require '../../database/data_config.php';
if(!isset($_POST['submit']))
    header("Location: ../../index.php");
// echo "<pre>";
// print_r($_POST);
$query = "INSERT INTO `tbl_services`( `service_title`, `service_description`, `link_button`, `title_color`, `background_color`, `foreground_color`, `button_text`, `button_color`) VALUES(
    '".$_POST['title']."',
    '".mysqli_escape_string($connect, $_POST['description'])."',
    '".$_POST['link']."',
    '".$_POST['title_color']."',
    '".$_POST['bg_color']."',
    '".$_POST['fg_color']."',
    '".$_POST['btn_text']."',
    '".$_POST['btn_color']."')";
$res = mysqli_query($connect, $query) or die(mysql_error());
$_SESSION['success_service'] = "Inserted Successfully";
header("Location: ../../services.php");

 ?>
