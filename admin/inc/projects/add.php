<div class="col-md-12">
    <?php
    if(isset($_SESSION['err'])){
        unset($_SESSION['err']);
        echo "<h4 style='color: red'>All Field is Mandotary</h4>";
    }
     ?>
    <form action="inc/projects/project_controller.php" method="post" enctype="multipart/form-data">
        <input  type="hidden" name="action" value="add">
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Work Title</label>
                        <input required name="title" style="background-color: #fffcf5" class="form-control border-input" placeholder="Work Title"  value="<?php if(isset($_SESSION['err']['name'])) echo$_SESSION['err']['name']; ?>" type="text">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Image</label>
                          <input type="file" class="form-control" name="pic" onchange="prev(this);">
                          <img src="#" style="position: absolute; width: 128px;margin-top: 20px; margin-left: 120px;" id="prevImg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Link</label>
                        <input required name="link" style="background-color: #fffcf5" class="form-control border-input" placeholder="link"  value="<?php if(isset($_SESSION['err']['name'])) echo$_SESSION['err']['name']; ?>" type="text">
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div class="form-group"><br>
                        <label><b>Work Type</b></label><br>
                        <div class='checkbox-inline'>
                          <label><input type='checkbox' name='type[]' value='Core PHP' >Core PHP</label>
                        </div>
                        <div class='checkbox-inline'>
                          <label><input type='checkbox' name='type[]' value='WordPress' >Wordpress</label>
                        </div>
                        <div class='checkbox-inline'>
                          <label><input type='checkbox' name='type[]' value='E-Commerce' >E-Commerce</label>
                        </div>
                        <div class='checkbox-inline'>
                          <label><input type='checkbox' name='type[]' value='Template Design' >Template Design</label>
                        </div>
                </div>
            </div>
            <div class="clearfix">
                <br><br><br>
            </div>
            <div class="row ">
                    <div class="col-md-3 pull-right">
                        <button name="submit" value="submit" type="submit" class="btn  btn-large btn-block btn-primary">save</button>
                    </div>
                </center>
            </div>
            <div class="clearfix">
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    function prev(input){
        if(input.files && input.files[0]){
            var objReader = new FileReader();
            objReader.onload = function (e){
                $("#prevImg").attr('src',e.target.result);
                $("#prevImg").attr('width','128');

            }
            objReader.readAsDataURL(input.files[0]);
        }
    }
</script>
