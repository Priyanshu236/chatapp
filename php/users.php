<?php
session_start();
$you="";
$msg="";
$result="";
include_once "config.php";
$sql=mysqli_query($conn,"SELECT * FROM users WHERE NOT unique_id={$_SESSION['unique_id']} ORDER BY status");
$output="";
if(mysqli_num_rows($sql)==1){
$output.="No user to chat";
}else{
    while($row = mysqli_fetch_assoc($sql))
    {
        include "data.php";
    }
}
echo $output;
?>