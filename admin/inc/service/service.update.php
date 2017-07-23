<?php
require '../../database/data_config.php';
if(!isset($_POST['submit']))
    header("Location: ../../index.php");
//echo "<pre>";
// print_r($_POST);
$query = "UPDATE  tbl_services SET
`service_title`='".$_POST['title']."',
`service_description`='".mysqli_escape_string($connect, $_POST['description'])."',
`link_button`='".$_POST['link']."',
`title_color`='".$_POST['title_color']."',
`background_color`='".$_POST['bg_color']."',
`foreground_color`='".$_POST['fg_color']."',
`button_text`='".$_POST['btn_text']."',
`button_color`='".$_POST['btn_color']."' WHERE `id` =".$_POST['id'];
//echo $query."<br>";
$res = mysqli_query($connect, $query) or die(mysql_error());
$_SESSION['success_service'] = "Updated Successfully";
header("Location: ../../services.php");
 ?>
