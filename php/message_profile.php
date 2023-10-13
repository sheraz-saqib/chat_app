 <?php
    require 'config.php';
    $get_reci_id = $_GET['user_id'];
    $get_sender_id = $_GET['sender_id'];
    $rece_userQ = "SELECT * FROM user WHERE user_rand_id = $get_reci_id";
    $rece_user = mysqli_query($conn, $rece_userQ);
    $fetch_rece_id = mysqli_fetch_assoc($rece_user);
        $time = strtotime($fetch_rece_id['last_seen']);
        $myFormatForView = date("d-M g:i A", $time);
    ?>
 <div class="user_img">
     <img src="./user_img/<?= $fetch_rece_id['user_img'] ?>" alt="">
 </div>

 <div class="user_name"><?= $fetch_rece_id['user_name'] ?>
     <?php
        if ($fetch_rece_id['status'] == 1) {
            echo '<p class="user_status">active now</p>';
        } else {
            echo '<p class="user_status">last seen '. $myFormatForView.'</p>';
        }
        ?>

 </div>