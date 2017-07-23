<?php
$work_query = "SELECT * FROM `tbl_work`";
$res_work = mysqli_query($connect, $work_query) or die(mysqli_error($connect));
$w=0;
while ($row = mysqli_fetch_assoc($res_work)) {
    $work[$w] = $row;
    $w++;
}
 ?>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> Recent Works</h3>
      </div>

      <div class="title_right">
          <div class="col-md-4 alert <?php if(isset($_SESSION['success_project'])) echo "alert-success"; else if(isset($_SESSION['err_upload'])) echo "alert-danger"; ?> pull-right" style="display: none; text-align: center" id="showMSG">
                  <?php if(isset($_SESSION['success_project'])) echo $_SESSION['success_project']; ?>
                  <?php if(isset($_SESSION['err_upload'])) echo $_SESSION['err_upload']; ?>

          </div>
    </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Projects </h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="row">

              <p> </p>
                <?php
                    foreach ($work as $key => $value) {
                ?>
                    <div class="col-md-3">
                    <div class="thumbnail" style="height: 300px; ">
                    <div class="image view view-first" >
                    <img style="width: 100%; display: block;" src="../assets/images/project/<?=$value['work_image']?>" alt="image" />
                    <p></p>


                    </div>
                    <div class="caption">
                    <p><strong><?=$value['work_title']?></strong></p>
                    <p><?=$value['work_type']?></p><br>
                    <span class="pull-right"  style="position: absolute;right:20px;bottom:40px;"><a href="#" onclick="del(<?=$value['id']?>)"><i class="fa fa-trash fa-2x"></i></a></span>
                    <span class="pull-left" style="position: absolute;margin-left:3px;bottom:40px;"><a data-toggle="modal" data-target=".edit" href="page/project/project_update.php?id=<?=$value['id']?>"><i class="fa fa-pencil fa-2x"></i></a></span>

                    </div>
                    </div>
                    </div>
                <?php
                    }
               ?>
            </div>
            <button type="button" class="btn btn-large btn-block btn-success" data-toggle="modal" data-target=".add" href="page/project/project_insert.php">Add New Project</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="myModal" class="modal fade bs-example-modal-sm add" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

    </div>
  </div>
</div>
<div id="myModal" class="modal fade bs-example-modal-sm edit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

    </div>
  </div>
</div>
<script type="text/javascript">
    function del(id){
        var ans = confirm("Are you sure want to Delete ? ");
        if(ans){
            window.location = "page/project/project_delete.php?id="+id;
        }else{
            window.location.reload();
        }
    }
</script>
<?php
include_once 'include_js.php';
if(isset($_SESSION['success_project'])){

?>
<script type="text/javascript">
    document.getElementById('showMSG').style.display = "unset";
    $("#showMSG").fadeOut(3000, function (){
        $("#showMSG").hide('slow')
    });
</script>
<?php
    unset($_SESSION['success_project']);
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
