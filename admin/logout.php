<?php
require 'database/data_config.php';
$login_time = strtotime($_SESSION['last_login']);
$from_time = strtotime(date("h:i"));
$time_diff = round(abs($login_time - $from_time) / 60,2);
// echo $login_time."<br>";
// var_dump($time_diff);
// die;
$day = date("d-M");
$check = "SELECT * FROM information_schema.COLUMNS
            WHERE `TABLE_SCHEMA` = 'db_prashant'
            AND `COLUMN_NAME` = '$day'
            AND `TABLE_NAME` = 'tbl_login_data'";
$res_check = mysqli_query($connect, $check) or die(mysqli_error($connect));
//var_dump($res_check);
if($row = mysqli_fetch_assoc($res_check)){
    $get_data_query = "SELECT `$day` from `tbl_login_data`";
    $res_get = mysqli_query($connect, $get_data_query) or die(mysqli_error($connect));
    $diff = mysqli_fetch_assoc($res_get);
    $query = "UPDATE `tbl_login_data` SET `$day`= ".($time_diff + $diff[$day])." WHERE `id` = 1";
}
else{
    $query_add = "ALTER TABLE `tbl_login_data` ADD COLUMN `$day` varchar(100) NOT NULL";
    $res_add = mysqli_query($connect, $query_add) or die(mysqli_error($connect));
    $query = "UPDATE `tbl_login_data` SET `$day`= ".$time_diff;
}
//echo $query;
$res = mysqli_query($connect, $query) or die(mysqli_error($connect));
session_destroy();
setcookie("user","",time()-3600);
header("Location: login.php");
 ?>
