<?php 
session_start();
include_once "config.php";
$searchTerm=mysqli_real_escape_string($conn,$_POST['searchTerm']);
$output="";
$sql=mysqli_query($conn,"SELECT * FROM users WHERE (fname LIKE '$searchTerm%' OR lname LIKE '$searchTerm%') AND (NOT unique_id={$_SESSION['unique_id']}) ");
if(mysqli_num_rows($sql)>0){
    while($row=mysqli_fetch_assoc($sql)){
        include_once "data.php";
    }
}else{
    $output.="No user related to your search found";

}
echo $output;
?>