<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> Main Footer</h3>
            </div>
            <div class="col-md-3 alert alert-success pull-right" style="display: none; text-align: center" id="showMSG">
                    <?php if(isset($_SESSION['success_main_footer'])) echo $_SESSION['success_main_footer']; ?>
            </div>
        </div>
    </div>
    <?php
        include_once 'inc/main_footer/about.php';
        include_once 'inc/main_footer/follow.php';
        include_once 'inc/main_footer/contact.php';

     ?>


</div>
<?php
include_once 'include_js.php';
if(isset($_SESSION['success_main_footer'])){

?>
<script type="text/javascript">
    document.getElementById('showMSG').style.display = "unset";
    $("#showMSG").fadeOut(3000, function (){
        $("#showMSG").hide('slow')
    });
</script>
<?php
    unset($_SESSION['success_main_footer']);
 } ?>
