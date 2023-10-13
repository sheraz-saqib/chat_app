<?php
session_start();
if (!isset($_SESSION['user_rand_id']) ||  $_SESSION['user_rand_id'] == '' ||  $_SESSION['user_rand_id'] != true) {
    header('location:index.php');
}
require 'config.php';
$reciver_id = mysqli_real_escape_string($conn,$_POST['reci_id']);
$sender_id = mysqli_real_escape_string($conn,$_POST['sender_id']);
$mess_text = mysqli_real_escape_string($conn,$_POST['mess_text']);


if(!empty($reciver_id )&&  !empty($sender_id) && !empty($mess_text)){

$send_mesQ = "INSERT INTO `message_list`( `reciever_id`, `sender_id`, `mes_text`)
 VALUES ('$reciver_id','$sender_id','$mess_text')";
 $send_mes = mysqli_query($conn,$send_mesQ);
 if(!$send_mes){
        error("message not send");
 }

}


?>