
<div class="col-md-12">
    <?php
    if(isset($_SESSION['err_edit'])){
        //unset($_SESSION['err']);
        echo "<h4 style='color: red'>All Field is Mandotary</h4>";
    }
     ?>
    <form action="inc/clients/client_controller.php" method="post" enctype="multipart/form-data">
        <input   type="hidden" name="action" value="update">
        <input   type="hidden" name="id" value="<?=$data['id']?>">
        <input   type="hidden" name="img" value="<?=$data['client_image']?>">


        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Client Name</label>
                        <input required name="name" style="background-color: #fffcf5" class="form-control border-input" placeholder="Client Name"  value="<?=$data['client_name']; ?>" type="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Logo</label>
                        <input  name="pic" style="background-color: #fffcf5" class="form-control border-input" placeholder="Last Name" value="Faker" onchange="preview(this);" type="file">
                        <img src="<?php if(isset($data['client_image'])) echo "../assets/images/client/".$data['client_image'] ?>" alt="" style="position: absolute;margin-left: 120px;margin-top: 20px;" class="img-rounded img-responsive" id="prev">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>About Client</label>
                        <textarea name="about" rows="5" cols=15 style="resize: none;" style="background-color: #fffcf5" class="form-control border-input" placeholder="Here can be your description"><?=$data['about_client']; ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label>Address</label>
                        <input required name="address" style="background-color: #fffcf5" class="form-control border-input" placeholder="Home Address" value="<?=$data['client_address']; ?>" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Link</label>
                        <input required name="link" style="background-color: #fffcf5" class="form-control border-input" placeholder="Link" value="<?=$data['client_link']; ?>" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input required name="phone" style="background-color: #fffcf5" class="form-control border-input" placeholder="Phone Number" type="text" value="<?=$data['client_phone']; ?>">
                    </div>
                </div>
            </div>

        <div class="clearfix"></div>
        <center>
        <div class="row ">
                <div class="col-md-3 pull-right">
                    <button name="submit" value="submit" type="submit" class="btn  btn-large btn-block btn-primary">save</button>
                </div>
            </center>
        </div>
    </div>
    </form>
</div>
<script type="text/javascript">
    function preview(input){
        if(input.files && input.files[0]){
            var objReader = new FileReader();
            objReader.onload = function (e){
                $("#prev").attr('src', e.target.result);
                $("#prev").attr('width', '128');
            }
            objReader.readAsDataURL(input.files[0]);
        }
    }
</script>
