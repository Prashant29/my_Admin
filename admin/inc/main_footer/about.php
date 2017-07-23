<?php
$about_query = "SELECT * FROM `tbl_footer_about_me`";
$resource_about = mysqli_query($connect, $about_query) or die(mysql_error());
$about_data = mysqli_fetch_assoc($resource_about);

//print_r($about_data);
 ?>
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> About Me </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="row">
                    <form action="inc/main_footer/footer.update.php" method="post">
                        <input type="hidden" name="action" value="about">
                        <input type="hidden" name="id" value=<?=$about_data['id']?>>
                        <div class="form-group">
                          <label for="Title">Title</label>
                          <input name="title" type="text" class="form-control" id="" placeholder="Enter About Title" value="<?=$about_data['about_title'];?>">
                        </div>
                        <div class="form-group">
                          <label for="about">About Text</label>
                          <input name="about_me" type="text" class="form-control" id="" placeholder="Enter About Text" value="<?=$about_data['about_me']?>">
                        </div>
                        <button type="submit" name="submit" value="submit"  class="btn btn-large btn-primary pull-right">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
