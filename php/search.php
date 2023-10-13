<?php
session_start();
require 'config.php';
$user_rand_id = $_SESSION['user_rand_id'];
$searchqurey = $_GET['searchqurey'];
$fetch_userQ = "SELECT *  FROM  user WHERE user_name LIKE '%$searchqurey%' AND  not user_rand_id= $user_rand_id";
$fetch_user = mysqli_query($conn, $fetch_userQ);
$is_view;
$recieve_id;

if(mysqli_num_rows($fetch_user)>0){


while ($data = mysqli_fetch_assoc($fetch_user)) {
    $recieve_id = $data['user_rand_id'];
    $fetch_messageQ = "SELECT * FROM message_list WHERE reciever_id = $recieve_id AND sender_id= $user_rand_id OR reciever_id = $user_rand_id AND sender_id= $recieve_id order by mes_id desc limit 1";
    $fetch_message = mysqli_query($conn, $fetch_messageQ);
    if (mysqli_num_rows($fetch_message) > 0) {
        $mess_data = mysqli_fetch_assoc($fetch_message);
        $result = $mess_data['mes_text'];
        if ($mess_data['reciever_id'] == $recieve_id) {
            $result = "You:" . $mess_data['mes_text'];
            if ($mess_data['sender_id'] == $recieve_id) {
                $result = $mess_data['mes_text'];
            }
        }
    } else {
        $result = "no message";
    }
?>

    <?php

    $select_is_viewQ = "SELECT * FROM message_list WHERE reciever_id = $user_rand_id  AND sender_id=$recieve_id  AND `is_view` = 1";
    $select_is_view = mysqli_query($conn, $select_is_viewQ);
    $is_view = mysqli_num_rows($select_is_view);



    ?>

    <a href="userMessage.php?user_id=<?= $data['user_rand_id'] ?>&sender_id=<?= $user_rand_id ?> ">
        <div class="user">
            <div class="left_side">
                <div class="user_img"><img src="./user_img/<?= $data['user_img'] ?>" alt=""></div>

                <div class="user_detail">
                    <div class="user_name"><?= $data['user_name'] ?> </div>
                    <div class="message"><?= $result ?></div>
                </div>


            </div>


            <?php
            if ($is_view > 0) {
                echo '<span class="new_message">' . $is_view . '</span>';
            }
            ?>



            <?php

            if ($data['status'] == 1) {
                echo '<div class="status">
    </div>';
            }
            if ($data['status'] == 0) {
                echo '<div class="status status_offline">
       
    </div>';
            }
            ?>
        </div>

    </a>

<?php

}
}
else{
    echo '

            <div class="user_not_found">
                <p><i class="bx bx-confused"></i>user not found</p>
            </div>';
}
?>