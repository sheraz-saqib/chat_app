<?php
require 'config.php';



$f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
$l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$c_password = mysqli_real_escape_string($conn, $_POST['c_password']);

$user_name = $f_name . " " . $l_name;






if (!empty($f_name) && !empty($l_name) && !empty($email) && !empty($password) && !empty($c_password)) {

    if ($password === $c_password) {

        $check_emailQ = "SELECT * FROM `user` WHERE user_email = '$email'";
        $check_email = mysqli_query($conn, $check_emailQ);
        if (mysqli_num_rows($check_email) > 0) {
            error($email . " this email already exists");
        } else {

            if (isset($_FILES['user_image'])) {

                $user_image_name = $_FILES['user_image']['name'];
                $user_image_tmp_name = $_FILES['user_image']['tmp_name'];

                $img_explode = explode('.', $user_image_name);
                $img_ext = end($img_explode);
                $extension = ['png', 'jpeg', 'jpg'];
                if (in_array($img_ext, $extension) === true) {
                    $image_unique_name = time() . $user_image_name;
                    $str_pass = password_hash($password, PASSWORD_BCRYPT);
                    $rand_id = rand(time(), 1000000000);
                    $insertQ = "INSERT INTO `user`(`user_rand_id`,`user_name`, `user_email`, `user_pass`, `user_img`)
     VALUES ('$rand_id','$user_name','$email','$str_pass','$image_unique_name')";
                    $insert = mysqli_query($conn, $insertQ);
                    if ($insert) {
                        move_uploaded_file($user_image_tmp_name, '../user_img/' . $image_unique_name);
                        echo "success";
                    }
                    if (!$insert) {
                        error("something went wrong");
                    }
                } else {
                    error('please select the img in png , jpg ,jpeg');
                }
            } else {
                error("select the profile image");
            }
        }
    }
    if ($password !== $c_password) {
        error("password or confirm password does not match");
    }
} else {
    error(" fill out all field!");
}
