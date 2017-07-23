<?php
$contact_query = "SELECT * FROM `tbl_footer_contact`";
$res_contact = mysqli_query($connect, $contact_query) or die(mysql_error());
$contact = mysqli_fetch_assoc($res_contact);

?>
<div class="col-md-3 widget">
  <h3 class="widget-title"><?=$contact['contact_title']?></h3>
  <div class="widget-body">
    <p><?=$contact['phone_no']?><br><br>
      <a href="mailto:#"><?=$contact['email']?></a><br>
      <br><strong><?=$contact['address_title']?> :</strong> <br>
      <?=$contact['street_name'].", ".$contact['city_name']?>
    </p>
  </div>
</div>
