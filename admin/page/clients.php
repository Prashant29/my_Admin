<?php
$client_query = "SELECT * FROM `tbl_client`";
$res_client = mysqli_query($connect, $client_query) or die(mysqli_error($connect));
$k=0;
while ($row = mysqli_fetch_assoc($res_client)) {
    $client[$k] = $row;
    $k++;
}

 ?>
<div class="right_col" role="main" style="min-height: 1070px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Our Clients</h3>
              </div>

              <div class="title_right">
                  <div class="col-md-4 alert <?php if(isset($_SESSION['success_client'])) echo "alert-success"; else if(isset($_SESSION['err_upload'])) echo "alert-danger"; ?> pull-right" style="display: none; text-align: center" id="showMSG">
                          <?php if(isset($_SESSION['success_client'])) echo $_SESSION['success_client']; ?>
                          <?php if(isset($_SESSION['err_upload'])) echo $_SESSION['err_upload']; ?>

                  </div>
            </div>
        </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                      </div>

                      <div class="clearfix"></div>
                      <?php foreach ($client as $c) {
                          ?>
                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details" >
                        <div class="well profile_view">
                          <div class="col-sm-12" style="height: 250px;">
                            <h4 class="brief"><i><?=$c['client_name']?></i></h4>
                            <div class="left col-xs-7">
                              <!-- <h2>Nicole Pearson</h2> -->
                              <p><strong>About: </strong><?=$c['about_client']?> </p><br>
                              <ul class="list-unstyled" style="width: 200px;">
                                <li><i class="fa fa-building"></i> Address: <?=$c['client_address']?></li><br>
                                <li><i class="fa fa-phone"></i> Phone #: <?=$c['client_phone']?> </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="../assets/images/client/<?=$c['client_image']?>" alt="" class=" img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-12 emphasis">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".edit"  href="page/client/client_update.php?id=<?=$c['id']?>" id="edit">
                                <i class="fa fa-user"> </i> Edit Profile
                              </button>
                              <button type="button" class="btn btn-danger btn" onclick="conf(<?=$c['id']?>)"> <i class="fa fa-trash-o "></i> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                        } ?>
                    </div>
                  </div>
                  <button type="button" class="btn btn-large btn-block btn-success" data-toggle="modal" data-target=".add" href="page/client/client_insert.php" id="add">Add New</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="myModal" class="modal fade bs-example-modal-lg add" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

            </div>
          </div>
        </div>
        <div id="myModal" class="modal fade bs-example-modal-lg edit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

            </div>
          </div>
        </div>
<?php
if(isset($_SESSION['err'])){
    include_once 'include_js.php';
?>
<script type="text/javascript">
    $('#add').click();
</script>
<?php
}
 ?>
 <script type="text/javascript">
 $(".edit").on('hidden.bs.modal', function () {
   window.location.reload();
});
 </script>
 <?php
 if(isset($_SESSION['err_edit'])){
     include_once 'include_js.php';
 ?>
 <script type="text/javascript">
     $('#edit').click();
 </script>
 <?php
 }
  ?>
  <?php
  include_once 'include_js.php';
  if(isset($_SESSION['success_client'])){

  ?>
  <script type="text/javascript">
      document.getElementById('showMSG').style.display = "unset";
      $("#showMSG").fadeOut(3000, function (){
          $("#showMSG").hide('slow')
      });
  </script>
  <?php
      unset($_SESSION['success_client']);
   } ?>
   <?php
   if(isset($_SESSION['err_upload'])){

   ?>
   <script type="text/javascript">
       document.getElementById('showMSG').style.display = "unset";
       $("#showMSG").fadeOut(3000, function (){
           $("#showMSG").hide('slow')
       });
   </script>
   <?php
       unset($_SESSION['err_upload']);
    } ?>
<script type="text/javascript">
    function conf(id){
        var ans = confirm("Are You Sure Want to Delete ??");
        if(ans){
            window.location = "page/client/client_delete.php?id="+id;
        }
        else{
            window.location.reload();
        }
    }
</script>
