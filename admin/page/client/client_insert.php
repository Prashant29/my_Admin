<?php
require '../../database/data_config.php';
include_once '../../include_header.php';


?>
<div class="modal-header">
  <button type="button" class="close" onclick="window.location.href = 'clients.php';" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Add Clients</h4>
</div>
<div class="clearfix">
    <br>
</div>
    <?php
        include_once '../../inc/clients/add.php';
    ?>
<div class="clearfix">
    <br>
</div>

<div class="modal-footer">
  <a href="#"><button type="button" class="btn btn-default" onclick="window.location.href = 'clients.php';" id="myModal" data-dismiss="modal">Close</button></a>
</div>
