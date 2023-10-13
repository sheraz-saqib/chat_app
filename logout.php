<?php
require './php/config.php';
session_start();
 $user_rand_id = $_SESSION['user_rand_id'] ;
$update_status = mysqli_query($conn, "UPDATE `user` SET `status`=0 WHERE user_rand_id = $user_rand_id");

if( $user_rand_id){
    session_unset();
    session_destroy();
}


?>
<script>
    window.location.assign('index.php');
</script>