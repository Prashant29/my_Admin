<?php
if(isset($_GET['id'])){
$get_data = "SELECT * FROM `tbl_about_me` where `id` = ".$_GET['id'];
$res = mysqli_query($connect, $get_data) or die(mysqli_error($connect));
$data = mysqli_fetch_assoc($res);

?>
<div class="right_col" role="main" style="min-height: 1070px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>About Us</h3>
            </div>

            <div class="title_right">
                <div class="col-md-4 alert <?php if(isset($_SESSION['success_about'])) echo "alert-success"; else if(isset($_SESSION['err_upload'])) echo "alert-danger"; ?> pull-right" style="display: none; text-align: center" id="showMSG">
                    <?php if(isset($_SESSION['success_about'])) echo $_SESSION['success_about']; ?>
                    <?php if(isset($_SESSION['err_upload'])) echo $_SESSION['err_upload']; ?>
                </div>
            </div>
        </div>

    <br><br><br>
    <form action="controller/about.controller.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="hidden" name="action" value="update">
<!-- Create the editor container -->
        <div class="form-group">
          <label>Title</label>
          <input name="title" type="text" class="form-control" id="" placeholder="" value="<?=$data['about_title']?>">
          <!-- <p class="help-block">Help text here.</p> -->
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea imageuploadurl="abc.php" cols="80" id="description" name="description" rows="10"><?php
            $myfile = fopen("../file/".$data['Description'], "r") or die("Unable to open file!");
            echo fread($myfile,filesize("../file/".$data['Description']));
			//echo $data['backup'];
             ?></textarea>
            <script type="text/javascript">
            //<![CDATA[

                // This call can be placed at any point after the
                // <textarea>, or inside a <head><script> in a
                // window.onload event handler.

                // Replace the <textarea id="editor"> with an CKEditor
                // instance, using default configurations.
                CKEDITOR.replace( 'description' );

            //]]>
            </script>

        </div>
        <input type="hidden" name="content" id="content">
        <button type="buttom" name="submit" id="show" value="submit" class="btn btn-large btn-block btn-info">Save</button>
    </form>
    </div>
</div>
<?php }
else{
    ?>
    <div class="right_col" role="main" style="min-height: 1070px;">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>About Us</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-4 alert <?php if(isset($_SESSION['success_about'])) echo "alert-success"; else if(isset($_SESSION['err_upload'])) echo "alert-danger"; ?> pull-right" style="display: none; text-align: center" id="showMSG">
                        <?php if(isset($_SESSION['success_about'])) echo $_SESSION['success_about']; ?>
                        <?php if(isset($_SESSION['err_upload'])) echo $_SESSION['err_upload']; ?>
                    </div>
                </div>
            </div>

        <br><br><br>
        <form action="controller/about.controller.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="add">
    <!-- Create the editor container -->
            <div class="form-group">
              <label>Title</label>
              <input name="title" type="text" class="form-control" id="" placeholder="Enter Title">
              <!-- <p class="help-block">Help text here.</p> -->
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea imageuploadurl="abc.php" cols="80" id="description" name="description" rows="10"></textarea>
                <script type="text/javascript">
                //<![CDATA[

                    // This call can be placed at any point after the
                    // <textarea>, or inside a <head><script> in a
                    // window.onload event handler.

                    // Replace the <textarea id="editor"> with an CKEditor
                    // instance, using default configurations.
                    CKEDITOR.replace( 'description' );

                //]]>
                </script>

            </div>
            <input type="hidden" name="content" id="content">
            <button type="buttom" name="submit" id="show" value="submit" class="btn btn-large btn-block btn-info">Save</button>
        </form>
        </div>
    </div>
    <?php
}?>
