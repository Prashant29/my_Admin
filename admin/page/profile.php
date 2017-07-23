<?php
$select_data = "SELECT * FROM `tbl_users` WHERE `user_id` = '".$_SESSION['username']['id']."'";
$res_select = mysqli_query($connect, $select_data) or die(mysqli_error($connect));
$user_data = mysqli_fetch_assoc($res_select);


?>
<link rel="stylesheet" href="page/profile.css">
<div class="right_col" role="main" style="min-height: 1070px;">
    <div class="">
        <div class="page-title">


            <div class="title_right">
                <div class="col-md-4 alert <?php if(isset($_SESSION['success_profile'])) echo "alert-success"; else if(isset($_SESSION['err_upload_profile'])) echo "alert-danger"; ?> pull-right" style="display: none; text-align: center" id="showMSG">
                    <?php if(isset($_SESSION['success_profile'])) echo $_SESSION['success_profile']; ?>
                    <?php if(isset($_SESSION['err_upload_profile'])) echo $_SESSION['err_upload_profile']; ?>
                </div>
            </div>
        </div>
        <br>
<div class="row">

    <div class="flex" id="profile_base">
        <div class="flex" id="pic_base">
            <center>
                <h1 style="padding-top: 10px;color:white">Profile</h1>
            </center>

            <img src="dist/images/<?=$user_data['profile_pic']?>" alt="" width=135>

        </div>
        <div class="flex" id="content_base">
                <h2>
                    <?=$user_data['first_name'] . " " . $user_data['last_name']?>
                </h2>
                <h3>Manager</h3>
                <h4> <a href="#"> <?=$user_data['email']?></a></h4>

            <div class="flex">

                <h4 id="text">
                    I'm a manager at DESANI Info-Corp.<br>
                </h4>
                <section>
                    <h4>
                        Date of Birth : 1<sup>st</sup> Jan, 1887
                        <br><br>

                        Contrary to popular belief, Lorem Ipsum is not simply random text.

                    </h4>

                </section>
                <ul class="social_ul">
                    <li class="social"> <a href="#"> <i class="fa fa-facebook fa-2x"></i></a></li>
                    <li class="social"> <a href="#"> <i class="fa fa-twitter fa-2x"></i></a></li>
                    <li class="social"> <a href="#"> <i class="fa fa-stack-overflow fa-2x"></i></a></li>
                </ul>
                <center>
                    <button type="button" class="btn btn-warning btn-lg" id="change">
                        Change
                    </button>
                </center>
            </div>
        </div>
    </div>
</div>


        <br>
