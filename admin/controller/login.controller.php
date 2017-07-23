<?php
require '../database/data_config.php';
//print_r($_POST);
if(isset($_POST['submit']) && $_POST['submit'] == 'letmein'){
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $_SESSION['error'] = "Username and Password Required ";
        header("Location: ../login.php");
    }
    else{
        $query = "SELECT * FROM tbl_admin_users WHERE  `username` = '".$_POST['username']."' AND `password` = '".$_POST['password']."'";
        $result = mysqli_query($connect,$query) or die(mysql_error());
        //var_dump($result);
        if($row = mysqli_fetch_array($result)){
            $logon_time = date("h:i");
            //echo $logon_time;
            $update_query = "UPDATE tbl_users SET `last_login` = '".$logon_time."' WHERE `user_id` = ".$row['id'] ;
            //echo $update_query;
            $resuorce = mysqli_query($connect, $update_query) or die(mysql_error());
            //var_dump($resuorce);
            $_SESSION['username'] = $row;
            setcookie('user',$_POST['username'],time() + 365 * 24 * 60 * 60,'/');
            header("Location: ../index.php");
        }
        else{
            $_SESSION['error'] = "Invalid Username or Password";
            header("Location: ../login.php");
        }
    }
}
else
    header("Location: ../login.php");
