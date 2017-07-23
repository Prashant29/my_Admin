<?php include_once 'source/include_js.php'; ?>
<?php
$client_query = "SELECT * FROM `tbl_client`";
$res_client = mysqli_query($connect, $client_query) or die(mysqli_error($connect));
$k=0;
while ($row = mysqli_fetch_assoc($res_client)) {
    $client[$k] = $row;
    $k++;
}
// echo "<pre>";
// print_r($client);
 ?>
<div class="row section clients topspace">
  <h2 class="section-title"><span>Clients</span></h2>
  <div class="col-lg-12" style="background-color: #2c3e50;padding-top:60px;height: 150px;">
      <div class="col-md-12">
        <center>
            <div class="carousel carousel-showmanymoveone slide" id="carousel123">
                   <div class="carousel-inner">
                <?php foreach ($client as $k => $c) {
                ?>
                    <div class="item <?php if($k == min($c['id'])) echo "active";?>">
                        <div class="col-xs-3"><a href="<?=$c['client_link']?>"><img src="assets/images/client/<?=$c['client_image']?>" class="img-responsive" width=64></a></div>
                    </div>
                <?php
                } ?>
                </div>
            </div>
        </center>
   </div>
  </div>
</div> <!-- /section -->
<div class="clearfix">
    <br>
</div>
<script type="text/javascript">
$(function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // http://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 3600 });
  $('#carouselABC').carousel({ interval: 3600 });
}());

(function(){
  $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<4;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());
</script>
