<?php
require './php/config.php';
session_start();
if (!isset($_SESSION['user_rand_id']) ||  $_SESSION['user_rand_id'] == '' ||  $_SESSION['user_rand_id'] != true) {
    header('location:index.php');
}
$get_user_id = $_SESSION['user_rand_id'];
$user_dataQ = "SELECT * FROM user WHERE user_rand_id = $get_user_id";
$user_data = mysqli_query($conn, $user_dataQ);
$fetch_user_data = mysqli_fetch_assoc($user_data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="createacc.css">
</head>

<body>


    <div class="main_body">
        <!-- header -->
        <div class="header">
            <div class="logo">
                <h2>update profile</h2>
            </div>
        </div>
        <!-- header -->

        <div class="controller">

            <!-- field -->


            <div class="show_error">

                <!-- <div class="error">

                    <div class="error_contain">
                        <p class="error_text">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="error_cross">
                        <i class='bx bx-x error_cross'></i>
                    </div>
                </div> -->

            </div>





            <form action="" class="update_form" method="POST" enctype="multipart/form-data">

                <input type="text" name="user_id" value="<?= $fetch_user_data['user_rand_id'] ?>" hidden>
                <!-- <div class="field_group name_group">
                    <div class="main_field">
                        <div class="field_title">First Name</div>
                        <div class="field">

                            <div class="field_icon"><i class='bx bxs-user'></i></div>
                            <div class="field_input"><input minlength="5" maxlength="20" type="text" name="f_name" placeholder="Enter your First Name" value="<?= $fetch_user_data['user'] ?>"></div>

                        </div>

                    </div>
                    <div class="main_field name_second_field">
                        <div class="field_title">last Name</div>
                        <div class="field name_second_field">

                            <div class="field_icon"><i class='bx bxs-user'></i></div>
                            <div class="field_input"><input type="text" minlength="5" maxlength="20" name="l_name" placeholder="Enter your last Name"></div>

                        </div>

                    </div>


                </div> -->
                <!-- field -->

                <div class="field_group">
                    <div class="field_title">update user name</div>
                    <div class="field">
                        <div class="field_icon"><i class='bx bxs-envelope'></i></div>
                        <div class="field_input"><input type="text" minlength="10" maxlength="40" name="name" placeholder="name" value="<?= $fetch_user_data['user_name'] ?>"></div>
                    </div>

                </div>
                <!-- field -->
                <!-- field -->

                <div class="field_group">
                    <div class="field_title">email</div>
                    <div class="field">
                        <div class="field_icon"><i class='bx bxs-envelope'></i></div>
                        <div class="field_input"><input type="email" minlength="10" maxlength="40" name="email" placeholder="Enter your email@gmail.com" value="<?= $fetch_user_data['user_email'] ?>"></div>
                    </div>

                </div>

                <div class="field_group">
                    <div class="field_title">Profile picture</div>
                    <div class="field take_img_field">
                        <div class="field_icon picture_icon"><i class='bx bx-photo-album'></i></div>
                        <div class="field_input img_input">
                            <h2 class="img_h2">update Picture</h2>
                            <input id="user_image_input" value="<?= $fetch_user_data['user_img'] ?>" class="fileInput" name="user_image" type="file" placeholder="Enter your Name" hidden>
                        </div>
                    </div>
                </div>
                <div class="user_image ">
                    <img src="./user_img/<?= $fetch_user_data['user_img'] ?>">

                </div>
                <div class="contoller_btn show_img_container ">
                    <input class="show_user_img_btn" type="button" name="create_acc_submit" value="Image Preview" accept="image/*">
                </div>
                <!-- field -->


                <div class="contoller_btn">
                    <input id="create_acc_btn" type="submit" name="create_acc_submit" value="update profile">
                </div>

        </div>

        <div class="footer">
            <p>change password? <a href="index.php">forget password</a></p>
        </div>
    </div>
    </form>

</body>
<script src="create_acc.js" defer></script>
<script>
    let update_form = document.querySelector('.update_form')
    update_form.addEventListener('submit', e => {
        e.preventDefault();
    })
    show_error = document.querySelector('.show_error');
    create_acc_btn.addEventListener('click', () => {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', './php/update_profile.php', true);
        xhr.onload = () => {
            if (xhr.readyState && XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    let data = xhr.responseText;
                    // console.log(data);

                    show_error.innerHTML = data;

                    if (data == "success") {
                        window.location.href = 'profile.php';
                    }
                }
            }
        }
        let formData = new FormData(update_form)
        xhr.send(formData)
    })
</script>

</html>