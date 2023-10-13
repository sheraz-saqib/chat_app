<?php
require 'config.php';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);



if(!empty($email) && !empty($password)){

    $select_userQ = "SELECT * FROM user WHERE user_email= '$email'";
    $select_user= mysqli_query($conn,$select_userQ);
    $fetch_data = mysqli_fetch_assoc($select_user);

    $user_pass = $fetch_data['user_pass'];
    $check_pass = password_verify($password,$user_pass);
    if($check_pass == 1){
       
        $user_rand_id = $fetch_data['user_rand_id'];
        $update_status=mysqli_query($conn, "UPDATE `user` SET `status`=1 WHERE user_rand_id = $user_rand_id");
        session_start();
        $_SESSION['user_rand_id'] = $user_rand_id;
        echo 'success';
        

    }
    if($check_pass != 1){
        error("email or password is incorrect");
    }
;



}else{

    error(" fill out all field!");
}
?>