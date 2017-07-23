<?php
if(!isset($_GET)){
    header("Location: recent_work.php");
}
//print_r($_GET);
require '../../database/data_config.php';
include_once '../../include_header.php';
$id=$_GET['id'];
$client_query = "SELECT * FROM `tbl_work` where `id`=".$id;
$res= mysqli_query($connect, $client_query) or die(mysqli_error($connect));
$data = mysqli_fetch_assoc($res);
$arr_type = explode(" | ", $data['work_type']);
//print_r($arr_type);
//if(in_array('Template Design', $arr_type, true)) echo "checked";
//die;
?>
<div class="modal-header">
  <button type="button" class="close" onclick="window.location.href = 'recent_work.php';" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Edit Project</h4>
</div>
<div class="clearfix">
    <br>
</div>
    <?php
        include_once '../../inc/projects/edit.php';
    ?>
<div class="clearfix">
    <br>
</div>

<div class="modal-footer">
  <a href="#"><button type="button" class="btn btn-default" onclick="window.location.href = 'recent_work.php';" id="myModal" data-dismiss="modal">Close</button></a>
</div>
