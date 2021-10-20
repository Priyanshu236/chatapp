<?php
session_start();
if(isset($_SESSION['unique_id'])){
    include_once "config.php";
    $timestamp = time();
    $sql=mysqli_query($conn,"UPDATE users SET login_time={$timestamp} WHERE unique_id={$_SESSION['unique_id']}");
}
?>