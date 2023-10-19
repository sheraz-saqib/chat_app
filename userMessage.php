<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="userMess.css">
    <?php 
    require 'userMess_css.php';
    ?>
</head>

<body>


    <div class="main_body">
        <!-- message_header -->

        <div class="message_header">
            <div class="back_btn">
                <a href="chat.php"><i class='bx bx-chevron-left'></i></a>
            </div>




            
            <?php
            require './php/config.php';
            $get_reci_id = $_GET['user_id'];
            $get_sender_id = $_GET['sender_id'];
            $rece_userQ = "SELECT * FROM user WHERE user_rand_id = $get_reci_id";
            $update_message_viewQ = "UPDATE `message_list` SET `is_view`= 0  WHERE reciever_id = $get_reci_id  AND sender_id=$get_sender_id OR reciever_id =$get_sender_id   AND sender_id= $get_reci_id";
            $update_message_view = mysqli_query($conn, $update_message_viewQ);
            $rece_user = mysqli_query($conn, $rece_userQ);
            $fetch_rece_id = mysqli_fetch_assoc($rece_user);


            
            ?>

            <input id="get_reci_id" type="text" value="<?= $get_reci_id ?>" hidden>
            <input id="get_sender_id" type="text" value="<?= $get_sender_id ?>" hidden>
            <div class="user_detail">
                <!-- <div class="user_img">
                    <img src="./user_img/<?= $fetch_rece_id['user_img'] ?>" alt="">
                </div>

                <div class="user_name"><?= $fetch_rece_id['user_name'] ?>
                    <?php
                    if ($fetch_rece_id['status'] == 1) {
                        echo '<p class="user_status">active now</p>';
                    } else {
                        echo '<p class="user_status">offline</p>';
                    }
                    ?>

                </div> -->

            </div>
        </div>
        <!-- message_header -->

        <div class="message_body">
            <!-- sender message -->

            <!-- <div class="sender_message">
                <div class="sender_img">
                    <img src="./img/BHANAK OP LOGO.png" alt="">
                </div>
                <p>sender</p>
            </div> -->
            <!-- sender message -->
            <!-- sender message -->

            <!-- <div class="sender_message">
                <div class="sender_img">
                    <img src="./img/BHANAK OP LOGO.png" alt="">
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique laborum voluptates veniam quo labore eos, distinctio eaque, aspernatur voluptas magnam impedit error pariatur totam ad non quasi ea sit. Necessitatibus.</p>
            </div> -->
            <!-- sender message -->
            <!-- sender message -->
            <!-- 
            <div class="sender_message">
                <div class="sender_img">
                    <img src="./img/BHANAK OP LOGO.png" alt="">
                </div>
                <p>sender</p>
            </div> -->
            <!-- sender message -->

            <!-- ====================== -->
            <!-- receive message -->

            <!-- <div class="receive_message">
                <p>receiver</p>
            </div> -->
            <!-- receive message -->
            <!-- receive message -->

            <!-- <div class="receive_message">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, dolor soluta similique enim possimus beatae ullam! Ipsum accusamus perspiciatis nisi doloremque? Fugiat rerum reiciendis optio facilis. Eius ducimus saepe quo.</p>
</div> -->
            <!-- receive message -->

        </div>
        <form class="message_send_form">
            <div class="message_input_container">
                <input type="text" value="<?= $get_reci_id ?>" name="reci_id" hidden>
                <input type="text" value="<?= $get_sender_id ?>" name="sender_id" hidden>
                <div class="message_input"><i class='bx bx-plus'></i><input name="mess_text" spellcheck="false" autocomplete="off" type="text" placeholder="message..."><i class='bx bxs-send message_send_btn'></i></div>
            </div>
    </div>
    </form>

    <?php
    require 'message_js.php';
    ?>
</body>
<script>
   


   
</script>

</html>