<?php
require "database/data_config.php";
if(!isset($_SESSION['username']) || !isset($_COOKIE['user']))
    header("Location: login.php");
$query = "SELECT * FROM tbl_users where  `user_id` =". $_SESSION['username']['id'];
$resource = mysqli_query($connect, $query) or die("Error in Query.<br>".mysqli_error($connect));
$user_data = mysqli_fetch_array($resource);
$_SESSION['last_login'] = $user_data['last_login'];

/*echo "<pre>";
print_r($user_data);
die;*/
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <?php include_once'include_header.php'; ?>
   </head>

   <body class="nav-md ">
     <div class="container body">
       <div class="main_container">
           <?php include_once 'left_wrap.php'; ?>

         <!-- top navigation -->
         <?php include_once 'top_menu.php'; ?>
         <!-- /top navigation -->

         <!-- page content -->
         <?php include_once $content; ?>
         <!-- /page content -->

         <!-- footer content -->
         <?php include_once 'footer.php'; ?>
         <!-- /footer content -->
       </div>
     </div>
     <div id="myModal" class="modal fade bs-example-modal-lg profile" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
       <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">

         </div>
       </div>
     </div>

     <!-- jQuery -->
     <?php include_once 'include_js.php'; ?>
     <!-- /gauge.js -->
   </body>
 </html>
