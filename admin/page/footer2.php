<?php
$get_footer_data_query = "SELECT * FROM `tbl_footer_2`";
$header_resource = mysqli_query($connect, $get_footer_data_query) or die(mysqli_error($connect));
$footer_data = mysqli_fetch_array($header_resource);
$id= $footer_data['id'];

 ?>
<div class="right_col" role="main">
      <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3> Secondary Footer</h3>
            </div>
            <div class="col-md-3 alert alert-success pull-right" style="display: none; text-align: center" id="showMSG">
                    <?php if(isset($_SESSION['success_footer'])) echo $_SESSION['success_footer']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>Footer Copyright</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">
                            <form class="form-horizontal form-label-left" action="inc/footer/footer.update.php" method="post">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="id" value="<?=$footer_data['id']?>">

                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3" for="first-name">Company Name <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6">
                                    <input name="company_name" value="<?=$footer_data['company_name']?>" id="first-name2" required="required"  class="form-control col-md-7 col-xs-12" type="text">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3" for="last-name">Year <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6">
                                    <input name="year" value="<?=$footer_data['year']?>" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12" type="text">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Update</button>
                                  </div>
                                </div>
                            </form >
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
include_once 'include_js.php';
if(isset($_SESSION['success_footer'])){

?>
<script type="text/javascript">
    document.getElementById('showMSG').style.display = "unset";
    $("#showMSG").fadeOut(3000, function (){
        $("#showMSG").hide('slow')
    });
</script>
<?php
    unset($_SESSION['success_footer']);
 } ?>
