<?php
$follow_query = "SELECT * FROM `tbl_footer_follow_me`";
$resource_follow = mysqli_query($connect, $follow_query) or die(mysql_error());
$k=0;
while ($follow_row = mysqli_fetch_assoc($resource_follow)) {
    $follow_data[$k] = $follow_row;
    $k++;
}
$title_query = "SELECT * FROM `tbl_footer_follow_title`";
$res_title = mysqli_query($connect, $title_query) or die(mysql_error());
$title_data = mysqli_fetch_assoc($res_title);
 ?>
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Follow Me </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="row">
                    <form action="inc/main_footer/footer.update.php" method="post">
                        <input type="hidden" name="action" value="follow_title">
                        <input type="hidden" name="id" value="<?=$title_data['id']?>">
                        <div class="form-group">
                          <label for="Title">Follow Title</label>
                          <input type="text" class="form-control" name="title" placeholder="Enter Follow Title" value="<?=$title_data['follow_title']?>">
                        </div>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary pull-right ">Save</button>
                    </form>
                    <div class="clearfix">
                        <br>
                    </div>
                        <table class='table table-striped table-bordered table-hover table-condensed'>
                          <thead>
                            <tr>
                              <th> Icon</th>
                              <th>Link</th>
                              <th>Action</th>

                            </tr>
                          </thead>
                          <tbody>
                              <?php foreach($follow_data as $data){ ?>
                            <tr>
                              <td>
                                  <img src="../assets/images/icon/<?=$data['social_icon_color']?>" alt="" class="img-rounded center-block" height="28"><br>
                              </td>
                              <td style="text-align: center"><?=$data['icon_link']?>
                              </td>
                              <td style="text-align: center;padding-top: 30px;" >
                                  <a href="page/follow/follow_update.php?id=<?=$data['id']?>" class="open-AddBookDialog" data-toggle="modal" id="anch" data-target=".edit"> <i class="fa fa-edit fa-2x"></i></a> OR <a onclick="conf(<?=$data['id']?>);" href="#" ><i class="fa fa-trash-o fa-2x"></i></a></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="3"><a data-target=".add" href="page/follow/follow_add.php" data-toggle="modal" type="button" class="btn btn-large btn-block btn-primary open-AddBookDialog">Add New</a></td>
                            </tr>
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade bs-example-modal-lg edit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

    </div>
  </div>
</div>
<div id="myModal" class="modal fade bs-example-modal-lg add" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

    </div>
  </div>
</div>
<script type="text/javascript">
    function conf(id){
        var ans = confirm("Are Sure Want To Delete?");
        if(ans){
            window.location="page/follow/follow_delete.php?id="+id;
        }
    }
</script>
<?php
if(isset($_SESSION['error_uploading'])) {
    include_once 'include_js.php';
    ?>
    <script type="text/javascript">
    $('#anch').attr('href', "page/follow_update.php?id="+<?=$_SESSION['id']?>);
    //alert($('#anch').attr('href'));
    $('#anch').trigger('click');
    </script>
    <?php
    //unset($_SESSION['error_uploading']);
}
?>
<?php
if(isset($_SESSION['error_insert'])) {
    include_once 'include_js.php';
    ?>
    <script type="text/javascript">
    $('#anch').attr('href', "page/follow_add.php");
    //alert($('#anch').attr('href'));
    $('#anch').trigger('click');
    </script>
    <?php
    //unset($_SESSION['error_insert']);
}
?>
