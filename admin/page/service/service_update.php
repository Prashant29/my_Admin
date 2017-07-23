<?php
require '../../database/data_config.php';
include_once '../../include_header.php';
$id=$_GET['id'];
$query = "SELECT * from tbl_services WHERE `id` =".$id;
$resource = mysqli_query($connect, $query) or die(mysql_error());
$service_data = mysqli_fetch_array($resource);

?>

 <div class="modal-header">
   <button type="button" class="close" onclick="window.location.href = 'services.php';" data-dismiss="modal">&times;</button>
   <h4 class="modal-title">Edit Service</h4>
 </div>
 <div class="clearfix">
     <br>
 </div>
<form class="form-horizontal form-label-left" action="inc/service/service.update.php" method="post">
    <input required type="hidden" name="id" id="data_id" value="<?=$id?>">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3" for="first-name">Title <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6">
      <input required value="<?=$service_data['service_title'];?>" id="first-name2"  required="required" name="title" class="form-control col-md-7 col-xs-12" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3" for="last-name">Description<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6">
      <textarea id="last-name2" name="description" rows="4" style="resize: none" required="required" class="form-control col-md-7 col-xs-12" type="text"><?=$service_data['service_description'];?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3">Button Link<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input required value="<?=$service_data['link_button'];?>" id="middle-name2" class="form-control col-md-7 col-xs-12" name="link" type="text">
    </div>
  </div>
  <div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3">Title Color<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input required value="<?=$service_data['title_color'];?>" id="middle-name2" class="form-control col-md-7 col-xs-12" name="title_color" type="text">
    </div>
  </div>
  <div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3">Background Color<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input required value="<?=$service_data['background_color'];?>" id="middle-name2" class="form-control col-md-7 col-xs-12" name="bg_color" type="text">
    </div>
  </div>
  <div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3">Foreground Color<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input required value="<?=$service_data['foreground_color'];?>" id="middle-name2" class="form-control col-md-7 col-xs-12" name="fg_color" type="text">
    </div>
  </div>
  <div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3">Button Text<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input required value="<?=$service_data['button_text'];?>" id="middle-name2" class="form-control col-md-7 col-xs-12" name="btn_text" type="text">
    </div>
  </div>
  <div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3">Button Color<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input required value="<?=$service_data['button_color'];?>" id="middle-name2" class="form-control col-md-7 col-xs-12" name="btn_color" type="text">
    </div>
  </div>
      <div class="form-group" >
        <div class="col-md-6 col-md-offset-3">
          <button id="send" type="submit" name="submit" value="submit" class="btn btn-success">Update</button>
        </div>
      </div>
</form>
<div class="modal-footer">
  <a href="services.php"><button type="button" class="btn btn-default" onclick="window.location.href = 'services.php';" id="myModal" data-dismiss="modal">Close</button></a>
</div>
