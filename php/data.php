<?php

include "config.php";
$you="";
$result="";
$offline="";
    $query= "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
        OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$_SESSION['unique_id']} 
        OR incoming_msg_id = {$_SESSION['unique_id']}) ORDER BY msg_id DESC LIMIT 1";
    $sql2=mysqli_query($conn,$query);
    if($sql2){

        $row2 = mysqli_fetch_assoc($sql2);
    
    if(mysqli_num_rows($sql2)>0){
        $result = $row2['msg'];
        if(strlen($result)>28){
            $msg=substr($result,0,28)."..";

        }else{
            $msg=$result;
        }
        if(isset($row2['outgoing_msg_id'])){
            if($row2['outgoing_msg_id']==$_SESSION['unique_id']){

                $you="You: ";
            }else{
                $you="";
            }
        }
        
            if(abs($row['login_time']-time())>50 || $row['status']=="Offline Now" ){
              
                $offline="offline";
            }
        else{

            $offline="";
        }
        
        
        
    }}else{
        $result="N0 message available";
    }
   $output.='<a href="chat.php?user_id='.$row['unique_id'].'">
             <div class="content">
                 <img src="php/images/'.$row['img'].'" alt="">
                 <div class="details">
                  <span>'.$row['fname'].' '.$row['lname'].'</span>
                  <p>'.$you.$result.'</p>
              </div>
             </div>
             <div class="status-dot '.$offline.'">
                 <i class="fa fa-circle"></i>           
             </div>
             </a>';

?>