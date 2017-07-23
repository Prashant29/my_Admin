<?php
$follow_title_query = "SELECT * FROM `tbl_footer_follow_title`";
$res_follow_title = mysqli_query($connect, $follow_title_query) or die(mysql_error());
$title=mysqli_fetch_assoc($res_follow_title);
$follow_query = "SELECT * FROM `tbl_footer_follow_me`";
$res_follow = mysqli_query($connect, $follow_query) or die(mysql_error());
$i=0;
while($row=mysqli_fetch_assoc($res_follow)){
    $data[$i] = $row;
    $i++;
}
?>
<div class="col-md-3 widget">
  <h3 class="widget-title"><?=strtoupper($title['follow_title'])?></h3>
  <div class="widget-body">
    <p class="follow-me-icons">
        <?php foreach ($data as $key => $value) {
        ?>
        <a href="<?=$value['icon_link']?>" target="_blank"><img src="assets/images/icon/<?=$value['social_icon_color']?>" width =32 alt="" class="img-rounded center-block img_social"></i></a>
        <?php
        } ?>
    </p>
  </div>
</div>
