<a href="userMessage.php?user_id=<?=$data['user_rand_id'] ?>&sender_id=<?= $user_rand_id ?> ">
    <div class="user">
        <div class="left_side">
            <div class="user_img"><img src="./user_img/<?= $data['user_img'] ?>" alt=""></div>

            <div class="user_detail">
                <div class="user_name"><?= $data['user_name'] ?></div>
                <div class="message"><?= $result ?></div>
            </div>

        </div>
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