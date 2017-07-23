<?php
$host = 'localhost';
$userName = 'root';
$pass = 'root';
$db_name = 'db_prashant';

$connect = mysqli_connect($host, $userName, $pass, $db_name) or die(mysqli_connect_error());

 // $get_db = mysqli_select_db($connect, $db_name) or die("Database Not Found");
session_start();
?>
