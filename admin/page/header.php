<?php
$get_header_data_query = "SELECT * FROM tbl_main_header";
$header_resource = mysqli_query($connect, $get_header_data_query) or die(mysqli_error($connect));
$header_data = mysqli_fetch_array($header_resource);
$id= $header_data['id'];
/*echo "<pre>";
print_r($header_data);*/
?>

<div class="right_col" role="main">
  <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3> Front Header</h3>
        </div>

        <div class="title_right">
            <div class="alert alert-success col-md-4 pull-right" id="showMSG" style="display : none;"><?php if(isset($_SESSION['success_header'])) echo $_SESSION['success_header']; ?></div>
      </div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>Header Photos</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">
                            <center>
                            <p>
                              </p>
                         </center>
                            <div class="col-md-5">
                              <div class="thumbnail" style="height: 360px;">
                                <div class="image view view-first" style="height: 320px;">
                                  <img style="width: 100%; display: block;"  src="../assets/images/logo/<?=$header_data['profile_pic']?>" alt="image" />
                                  <div class="mask">
                                      <p></p>
                                    <div class="tools tools-bottom">
                                        <a href="#" data-toggle="modal" data-target=".logo"><i class="fa fa-pencil"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p><strong>Front Logo Image</strong></p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-7">
                              <div class="thumbnail" style="height: 360px;">
                                <div class="image view view-first" style="height: 320px;">
                                  <img style="width: 100%; display: block;"  src="../assets/images/bg/<?=$header_data['background_pic']?>" alt="image" />
                                  <div class="mask">
                                      <p></p>
                                    <div class="tools tools-bottom">
                                        <a href="#" data-toggle="modal" data-target=".background_pic" class="clickMe"><i class="fa fa-pencil"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p><strong>Front Backgound Image</strong></p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>Header Texts</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="row">
                            <form class="form-horizontal form-label-left" action="inc/header/header.update.php" method="post">
                                <input type="hidden" name="id" value="<?=$id?>">
                                <input type="hidden" name="action" value="change_personal_info">

                          <span class="section">Personal Info</span>

                          <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3" for="first-name">Profile Name <span class="required">*</span>
                            </label>
                            <div class="col-md-4 col-sm-6">
                              <input name="profile_name" value="<?=$header_data['profile_name']?>" id="first-name2" required="required"  class="form-control col-md-7 col-xs-12" type="text">
                            </div>
                            <label class="control-label col-md-2 col-sm-3" for="first-name">Color:  <span class="required">*</span>
                            </label>
                            <div class="col-md-2 col-sm-6">
                             <div id="cp2" class="input-group colorpicker-component"> <input type="text" value="<?=$header_data['name_color']?>"  name="name_color" class="form-control" /> <span class="input-group-addon"><i></i></span> </div>
                         </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3" for="last-name">Tag Line <span class="required">*</span>
                            </label>
                            <div class="col-md-4 col-sm-6">
                              <input name="tag_line" value="<?=$header_data['tag_line']?>" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12" type="text">
                            </div>
                            <label class="control-label col-md-2 col-sm-3" for="first-name">Color:  <span class="required">*</span>
                            </label>
                            <div class="col-md-2 col-sm-6">
                             <div id="cp2" class="input-group colorpicker-component"> <input type="text" value="<?=$header_data['tag_line_color']?>" class="form-control" name="tag_line_color" /> <span class="input-group-addon"><i></i></span> </div>
                         </div>

                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-2 col-sm-3">Email<span class="required">*</span>
                            </label>
                            <div class="col-md-4 col-sm-6">
                              <input name="email" value="<?=$header_data['email']?>" id="middle-name2" class="form-control col-md-7 col-xs-12" name="middle-name" type="text">
                            </div>
                            <label class="control-label col-md-2 col-sm-3" for="first-name">Color:  <span class="required">*</span>
                            </label>
                            <div class="col-md-2 col-sm-6">
                             <div id="cp2" class="input-group colorpicker-component"> <input type="text" value="<?=$header_data['email_color']?>" name="email_color" class="form-control" /> <span class="input-group-addon"><i></i></span> </div>
                         </div>
                          </div>
                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                              <button type="submit" class="btn btn-success">Update</button>
                            </div>
                          </div>

                        </form>
                        <form class="form-horizontal form-label-left" action="inc/header/header.update.php" method="post">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="hidden" name="action" value="change_additional_info">

                              <span class="section">Additional Info</span>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Description
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <textarea name="description" id="first-name2" required="required" style="resize: none"  class="form-control col-md-7 col-xs-12" rows="4" type="text"><?=$header_data['description']?></textarea>
                                </div>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button type="submit" class="btn btn-success">Update</button>
                                </div>
                              </div>
                         </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-lg logo" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Front Logo Image</h4>
        </div>
        <div class="modal-body">

          <form action="inc/header/header.update.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="action" value="change_logo">
              <input type="hidden" name="id" value="<?=$id?>">

            <fieldset class="form-group">
              <label for="exampleInputFile">File input</label>
              <input name="logo_pic" type="file" class="form-control-file" id="exampleInputFile" onchange="readURL(this);">
            </fieldset>

            <script type="text/javascript">
            function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#logo')
                                .attr('src', e.target.result)
                                .width(350);
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
            <button type="submit" class="btn btn-primary pull-right">Update</button>
            <img id="logo" src="#" alt="" />
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
<div id="bgPicId" class="modal fade bs-example-modal-lg background_pic" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit Backgrond Image</h4>
            </div>
            <div class="modal-body">
              <form action="inc/header/header.update.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="action" value="change_bg">
                  <input type="hidden" name="id" value="<?=$id?>">

                <fieldset class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" class="form-control-file" id="exampleInputFile" name="bgPic" onchange="readURL2(this);">
                </fieldset>
                <img id="bgPic" src="#" alt="" />
                <script type="text/javascript">
                function readURL2(input) {
                        //alert(input.files);
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#bgPic')
                                    .attr('src', e.target.result)
                                    .width(350);
                            };

                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                </script>
                <?php
                    if(isset($_SESSION['error_uploading'])) {
                        ?>
                        <p style="color: red; font-size: 14px;"><?=$_SESSION['error_uploading']?></p>
                <?php
                    }
                ?>
                <button type="submit" class="btn btn-primary pull-right">Update</button>
              </form>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
</div>

<!-- Large modal -->
<?php
if(isset($_SESSION['error_uploading'])) {
    include_once 'include_js.php';
    ?>
    <script type="text/javascript">
        $('.clickMe').trigger('click');
    </script>
    <?php
    unset($_SESSION['error_uploading']);
}
?>
<?php
include_once 'include_js.php';
if(isset($_SESSION['success_header'])){

?>
<script type="text/javascript">
    document.getElementById('showMSG').style.display = "unset";
    $("#showMSG").fadeOut(3000, function (){
        $("#showMSG").hide('slow')
    });
</script>
<?php
    unset($_SESSION['success_header']);
 } ?>
<script> $(function() { $('#cp2').colorpicker(); }); </script>
