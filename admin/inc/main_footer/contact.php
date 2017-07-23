<?php
$contact_query = "SELECT * FROM `tbl_footer_contact`";
$resource_contact = mysqli_query($connect, $contact_query) or die(mysql_error());
$contact_data = mysqli_fetch_assoc($resource_contact);

 ?>
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Contact Detail</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <form action="inc/main_footer/footer.update.php" method="post">
                        <input type="hidden" name="action" value="contact">
                        <input type="hidden" name="id" value="<?=$contact_data['id']?>">

                        <div class="form-group col-md-5">
                          <label for="title">Title</label>
                          <input name="title" type="text" class="form-control" id="" placeholder="" value="<?=$contact_data['contact_title']?>">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="street">Phone Number</label>
                            <input name="phone_no" type="text" class="form-control" id="" placeholder="" value="<?=$contact_data['phone_no']?>">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="street">Email</label>
                            <input name="email" type="text" class="form-control" id="" placeholder=""
                            value="<?=$contact_data['email']?>">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="title">Address Title</label>
                            <input name="address" type="text" class="form-control" id="" placeholder="" value="<?=$contact_data['address_title']?>">
                        </div>
                        <div class="form-group col-md-5">
                          <label for="street">Street Name</label>
                          <input type="text" name="street" class="form-control" id="" placeholder="" value="<?=$contact_data['street_name']?>">
                        </div>
                        <div class="form-group col-md-5">
                          <label for="street">City Name</label>
                          <input type="text" name="city" class="form-control" id="" placeholder="" value="<?=$contact_data['city_name']?>">
                        </div>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary pull-right">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
