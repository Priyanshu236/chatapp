<?php
session_start();
include_once "config.php";

$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

if(!empty($email)&&!empty($password)){
    
        $sql3=mysqli_query($conn,"SELECT * FROM `users` WHERE  `email` = '{$_POST['email']}' && `password`='{$_POST['password']}'");
        if(mysqli_num_rows($sql3)>0){
            $row=mysqli_fetch_assoc($sql3);
            $status="Active Now";

            $_SESSION['unique_id']=$row['unique_id'];
            $sql=mysqli_query($conn,"UPDATE users SET status='{$status}' WHERE unique_id={$row['unique_id']}");
           echo "success";
        }
        else{
            echo "Email or Password is incorrect";
        }
}else{
    echo "all input fields are required";
    
}

?>