<?php
session_start();
include_once "php/config.php";
$user_id=$_GET['user_id'];
$sql=mysqli_query($conn,"SELECT * FROM users WHERE unique_id ={$user_id}");
if(mysqli_num_rows($sql)>0){
    $row=mysqli_fetch_assoc($sql);
}
$sql2=mysqli_query($conn,"SELECT * FROM users WHERE unique_id ={$_SESSION['unique_id']}");
if(mysqli_num_rows($sql)>0){
    $row2=mysqli_fetch_assoc($sql);
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
<body>
    <div class="chat-wrapper wrapper">
    <section class="chat-area">
        <header>
            <a class="back-arrow" href="user.php"><i class="fa fa-arrow-left"></i></a>
            <img src="php/images/<?php echo $row['img']?>" alt="">
            <div class="content">
 
                
                <div class="details">
                <span><?php echo $row['fname'].' '.$row['lname'];?></span>
                    <p><?php echo $row['status']?></p>
                </div>
            </div>
           
        </header>
        <div class="chat-box">
            
            
        </div>
        <form action="#" class="typing-area">
            <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']?>" hidden>
            <input type="text" name="incoming_id" value="<?php echo $user_id?>" hidden>
            <input type="text" name="message" class="input-field" id="" placeholder="Type a message here...">
            <button><i class="fa fa-telegram"></i></button>

        </form>
    </section>
    </div>
    <script src="javascript/chat.js"></script>
</body>
</html>