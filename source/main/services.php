<?php
$service_data_query = "SELECT * FROM tbl_services";
$service_resource = mysqli_query($connect, $service_data_query) or die(mysql_error());
$i=0;
while($service_row_data = mysqli_fetch_array($service_resource)){
    $service_data_array[$i] = $service_row_data;
    $i++;
}
//print_r($service_data);
 ?>
<div class="row section featured topspace">
  <h2 class="section-title"><span>Services</span></h2>
  <div class="row">
<?php
        foreach ($service_data_array as $service_data) {
?>
    <div class="col-sm-6 col-md-3" style="background-color: <?=strtoupper($service_data['background_color'])?>;color: <?=$service_data['foreground_color']?>;height: 300px; padding-top: 2px; padding-bottom: 2px; ">
        <h3 class="text-center" style="color: <?=$service_data['title_color']?>"><?=$service_data['service_title']?></h3>
        <p><?=$service_data['service_description']?></p>
        <p class="text-center"><a href="<?=$service_data['link_button']?>" style="color: <?=$service_data['button_color']?>" class="btn btn-action"><?=$service_data['button_text']?></a></p>
    </div>
<?php
        }
?>

  </div>
</div> <!-- / section -->
