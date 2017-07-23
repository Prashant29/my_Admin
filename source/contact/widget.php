<?php
$select_about = "SELECT * FROM `tbl_footer_about_me`";
$res_about = mysqli_query($connect,$select_about) or die(mysql_error());
$about_data = mysqli_fetch_assoc($res_about);
?>
<div class="col-md-3 widget">
  <h3 class="widget-title"><?=$about_data['about_title']?></h3>
  <div class="widget-body">
    <p><?=$about_data['about_me']?>
    </p>
  </div>
</div>
