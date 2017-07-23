<?php
require '../../database/data_config.php';
include_once '../../include_header.php';


?>

 <div class="modal-header">
   <button type="button" class="close" onclick="window.location.href = 'services.php';" data-dismiss="modal">&times;</button>
   <h4 class="modal-title">Add Service</h4>
 </div>
 <div class="clearfix">
     <br>
 </div>
<form class="form-horizontal form-label-left" action="inc/service/service.insert.php" method="post">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3" for="first-name">Title <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6">
          <input placeholder="Enter Service Title" required  id="first-name2" required="required" name="title" class="form-control col-md-7 col-xs-12" type="text">
        </div>
    </div><
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3" for="last-name">Description<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6">
      <textarea id="last-name2" placeholder="Enter Description" name="description" rows="4" style="resize: none" required="required" class="form-control col-md-7 col-xs-12" type="text"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3">Button Link<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input placeholder="Enter Button Link" required  id="middle-name2" class="form-control col-md-7 col-xs-12" name="link" type="text">
    </div>
  </div>
  <div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3">Title Color<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input placeholder="Enter Title Color" required  id="middle-name2" class="form-control col-md-7 col-xs-12" name="title_color" type="text">
    </div>
  </div>
  <div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3">Background Color<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input placeholder="Enter Background Color" required  id="middle-name2" class="form-control col-md-7 col-xs-12" name="bg_color" type="text">
    </div>
  </div>
  <div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3">Foreground Color<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input placeholder="Enter Foreground Color" required  id="middle-name2" class="form-control col-md-7 col-xs-12" name="fg_color" type="text">
    </div>
  </div>
  <div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3">Button Text<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input placeholder="Enter Button Text" required  id="middle-name2" class="form-control col-md-7 col-xs-12" name="btn_text" type="text">
    </div>
  </div>
  <div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3">Button Color<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
      <input placeholder="Enter Button Color" required  id="middle-name2" class="form-control col-md-7 col-xs-12" name="btn_color" type="text">
    </div>
  </div>
      <div class="form-group" >
        <div class="col-md-6 col-md-offset-3">
          <button id="send" type="submit" name="submit" value="submit" class="btn btn-success">Add Service</button>
        </div>
      </div>
</form>
<div class="modal-footer">
  <a href="services.php"><button type="button" class="btn btn-default" onclick="window.location.href = 'services.php';" id="myModal" data-dismiss="modal">Close</button></a>
</div>
