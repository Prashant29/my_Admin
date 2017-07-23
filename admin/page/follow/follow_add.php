<?php
require '../../database/data_config.php';
include_once '../../include_header.php';
?>
<div class="modal-header">
  <button type="button" class="close" onclick="window.location.href = 'main_footer.php';" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Edit Icon</h4>
</div>
<div class="clearfix">
    <br>
    <p class="alert alert-danger col-md-3">Image Only PNG or ICON</p>
</div>
<form action="inc/main_footer/footer.update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="add_follow_icon">
    <div class="col-md-4">
        <input type="file" name="img1" value="" onchange="first_icon(this);"><br>
        <img src="#" style="background-color: #232323;" id="first" alt="" width=128 class="img-rounded">
        <br><br>
    </div>
    <div class="col-md-4 ">
          <label for="link">Image Link</label>
          <input type="text"name="link"  class="form-control" id="" placeholder="Enter Image Link" value="" placeholder="Enter Link">
    </div>
    <div class="col-md-4">
        <br><br>
        <?php
        if(isset($_SESSION['error_insert'])) {
            echo "<h3 class='color: red'>".$_SESSION['error_insert']."</h3>";
            unset($_SESSION['error_insert']);
            unset($_SESSION['id']);
        }
         ?>
    </div>
    <div class="col-md-12">
    <button type="submit" class="btn btn-large btn-block btn-primary">Add</button>
    </div>
</form>
<div class="clearfix">
    <br><br>
</div>
<div class="modal-footer">
  <a href="#"><button type="button" class="btn btn-default" onclick="window.location.href = 'main_footer.php';" id="myModal" data-dismiss="modal">Close</button></a>
</div>
<script type="text/javascript">
function first_icon(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#first')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function second_icon(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#second')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

</script>
