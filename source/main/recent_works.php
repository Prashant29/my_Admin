<?php
$query_work = "SELECT * FROM `tbl_work`";
$res_work = mysqli_query($connect, $query_work) or die(mysqli_error($connect));
$a=0;
while($row = mysqli_fetch_assoc($res_work)){
    $work[$a] = $row;
    $a++;
}
  ?>
<div class="row section recentworks topspace">

  <h2 class="section-title"><span>Recent Works</span></h2>

  <div class="thumbnails recentworks row">
    <?php foreach ($work as $key => $value) {
    ?>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
      <a class="thumbnail" href="<?=$value['image_link']?>" >
        <span class="img">
          <img src="assets/images/project/<?=$value['work_image']?>" alt="">
          <span class="cover"><span class="more">See details</a> &rarr;</span></span>
        </span>
        <span class="title"><strong><?=$value['work_title']?></strong></span>
      </a>
      <span class="details" style="color: #e93675"><?=$value['work_type']?></span>
      <h4></h4>
      <p></p>
    </div>
    <?php
      } ?>

  </div>

</div> <!-- /section -->
