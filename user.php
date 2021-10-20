<?php
session_start();
if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
}else{
    include_once "php/config.php";
    $sql=mysqli_query($conn,"SELECT * FROM users WHERE unique_id ={$_SESSION['unique_id']}");
    if(mysqli_num_rows($sql)>0){
        $row=mysqli_fetch_assoc($sql);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- <script>$(window).bind('beforeunload', function(){
    $.ajax({
        type: 'get',
        async: false,
        url: 'php/logout.php'
    });
});</script> -->
<body>
    <div class="wrapper" style="padding: 20px;">
        <section class="users">
           <header>
               <div class="content">
                   <div >
                        
                       <img src="php/images/<?php echo $row['img']; ?>" alt="">
                   </div >
                   <div class="details">
                       <span><?php echo $row['fname'].' '.$row['lname']; ?></span>
                       <p><?php echo $row['status']; ?></p>
                   </div>
               </div>
               <a href="php/logout.php?logout_id=<?php echo $_SESSION['unique_id'];?>" class="logout">Logout</a>
           </header>
           <div class="search">
               <span class="text">Select an user to Start Chat</span>
               <input type="text" placeholder="Enter an name to search....">
               <button><i class="fa fa-search"></i></button>
           </div>
           <div id="userList" class="users-list">
               
               
           </div>
        </section>
        
    </div>
    <script src="javascript/users.js"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</html>