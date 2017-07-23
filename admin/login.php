<?php require 'database/data_config.php'; ?>
<link rel="stylesheet" href="../assets/css/login.css">
<link rel="stylesheet" href="../assets/css/styles.css">
<link rel="stylesheet" href="../assets/css/bootstrap.css">

<title>Login Page</title>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue to Admin Panel</h1>
            <div class="account-wall">
                <img class="profile-img" src="dist/images/avatar3.png"
                    alt="">
                    <br>
                <?php
                    if(isset($_SESSION['error'])){
                ?>
                    <center>
                        <div class="alert alert-danger">
                            <strong>Error ! </strong><?=$_SESSION['error'];?>
                        </div>
                    </center>
                <?php
                    session_unset();
                    }
                 ?>
                <form class="form-signin" action="controller/login.controller.php" method="post">
                <input type="text" name="username" autocomplete="off" class="form-control" placeholder="Email"  autofocus><br>
                <input type="password" name="password" class="form-control" placeholder="Password" ><br>
                <button class="btn btn-lg btn-primary btn-block" name="submit" value="letmein" type="submit">
                    Sign in</button>

                </form>
            </div>
        </div>
    </div>
</div>
