<?php
require "database/data_config.php";
$get_session_query = "SELECT * FROM `tbl_login_data`";
$res__session = mysqli_query($connect, $get_session_query) or die(mysqli_error($connect));
$session_data = array();
$i=0;
while($row = mysqli_fetch_assoc($res__session)){
    $session_data[$i]= $row;
    $i++;
}
echo json_encode($session_data);
