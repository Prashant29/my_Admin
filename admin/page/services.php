<?php
$service_data_query = "SELECT * FROM tbl_services";
$service_resource = mysqli_query($connect, $service_data_query) or die(mysql_error());
$i=0;
while($service_row_data = mysqli_fetch_array($service_resource)){
    $service_data_array[$i] = $service_row_data;
    $i++;
}
 ?>


<div class="right_col" role="main">
  <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3> Front Services</h3>
        </div>
        <div class="col-md-3 alert alert-success pull-right" style="display: none; text-align: center" id="showMSG">
                <?php if(isset($_SESSION['success_service'])) echo $_SESSION['success_service']; ?>
        </div>
      </div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>Edit Servies</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                        <table id="datatable-buttons" class="table table-inverse table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 100%;">
                      <thead style="background-color: #2A3F54; color: white">
                        <tr role="row" ">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 155px;" aria-sort="ascending" aria-label="Service Title: activate to sort column descending">Service Title</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 241px;" aria-label="Service Description: activate to sort column ascending">Service Description</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 57px;" aria-label="Link: activate to sort column ascending">Link</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 114px;" aria-label="Title Color: activate to sort column ascending">Title Color</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 110px;" aria-label="Background Color: activate to sort column ascending">Background Color</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 84px;" aria-label="Foreground Color: activate to sort column ascending">Foreground Color</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 84px;" aria-label="Button Text: activate to sort column ascending">Button Text</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 84px;" aria-label="Button Color: activate to sort column ascending">Button Color</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 84px;">Edit</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;">Delete</th>
                        </tr>
                      </thead>
                      <tbody">
<?php
foreach ($service_data_array as $service_data)
{
?>
                          <tr role="row" style="color: #2c3e50; padding: 10px;">
                          <td style="padding: 5px;" tabindex="0" class="sorting_1"><?=$service_data['service_title'];?></td>
                          <td style="padding: 5px;overflow: hidden"><?=$service_data['service_description'];?></td>
                          <td><?=$service_data['link_button'];?></td>
                          <td style="padding: 5px; "><?=$service_data['title_color'];?></td>
                          <td style="padding: 5px;"><?=$service_data['background_color'];?></td>
                          <td style="padding: 5px; "><?=$service_data['foreground_color'];?></td>
                          <td><?=$service_data['button_text'];?></td>
                          <td style="padding: 5px;"><?=$service_data['button_color'];?></td>
                          <td style="padding: 15px;text-align: center"><a href="page/service/service_update.php?id=<?=$service_data['id']?>" class="open-AddBookDialog" data-toggle="modal" data-id="<?=$service_data['id']?>" data-target=".edit">
                              <i class="fa fa-pencil"></i></a></td>
                           <td style="padding-top: 15px;text-align: center"><a href="#" onclick="conf(<?=$service_data['id']?>);">
                                  <i class="fa fa-trash-o"></i></a></td>
                        </tr>
<?php
}
?>
                </tbody>
                    </table>
                        </div>
                        <button type="button" data-toggle="modal" data-target=".edit" href="page/service/service_insert.php" class="open-AddBookDialog btn btn-large btn-block btn-default">Add New</button>
                    </div>
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
<script type="text/javascript">
    function conf(id){
        var res = confirm("Are You Sure To Delete this ?");
        if(res){
            window.location.href= 'inc/service/service.delete.php?id='+id;
        }
        else{

        }
    }
</script>
<?php
include_once 'include_js.php';
if(isset($_SESSION['success_service'])){

?>
<script type="text/javascript">
    document.getElementById('showMSG').style.display = "unset";
    $("#showMSG").fadeOut(3000, function (){
        $("#showMSG").hide('slow')
    });
</script>
<?php
    unset($_SESSION['success_service']);
 } ?>
