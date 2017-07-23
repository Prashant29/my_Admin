<?php
require '../../database/data_config.php';
if(!isset($_GET['id']))
    header("Location: ../../index.php");
$query = "DELETE FROM tbl_services WHERE `id` = ".$_GET['id'];
$res = mysqli_query($connect, $query) or die(mysql_error());
$_SESSION['success_service'] = "Record Deleted";
header("Location: ../../services.php");
?>
