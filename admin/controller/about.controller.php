<script src="../dist/vendors/jquery/dist/jquery.min.js"></script>

<?php
check_action();
function check_action(){
    $action = $_POST['action'];
    switch ($action) {
        case 'update':
            update_about();
            break;
        case 'add':
            add_about();
            break;
        default:
            # code...
            break;
    }
}
function update_about(){
    require '../database/data_config.php';
    $title = $_POST['title'];
    $id = $_POST['id'];
    $content=   $_POST['description'];
    $content_bkp=   mysqli_real_escape_string($connect, $_POST['description']);

    $ext = ".txt";
    $filename = $title.$ext;
    $file = fopen("../../file/".$filename,"w+");
    fwrite($file, $content);
    fclose($file);
    //chmod($file,0777);
    $query = "UPDATE `tbl_about_me` SET
    `about_title`='".$title."',
    `Description`='".$filename."',
    `backup` = '".$content_bkp."' WHERE `id` = ".$id;

    $resource = mysqli_query($connect, $query) or die(mysqli_error($connect));
    $_SESSION['success_about'] = "Successfully Updated";
    header("Location: ../about.php?id=".$id);
}
function add_about(){
    require '../database/data_config.php';
    $title = $_POST['title'];
    $content_bkp=   mysqli_real_escape_string($connect, $_POST['description']);
    $content=$_POST['description'];

    $ext = ".txt";
    $filename = $title.$ext;
    $file = fopen("../../file/".$filename,"w+");
    fwrite($file, $content);
    fclose($file);
    //chmod($file,0777);
    $query = "INSERT INTO `tbl_about_me`(`about_title`, `Description`, `backup`) VALUES (
        '".$title."',
        '".$filename."',
        '".$content_bkp."'
    )";
    //die;
    $resource = mysqli_query($connect, $query) or die(mysqli_error($connect));
    $_SESSION['success_about'] = "Successfully Added";
    header("Location: ../index.php");
}
 ?>
