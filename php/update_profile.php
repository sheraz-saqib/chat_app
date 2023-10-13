<?php
require 'config.php';

$f_name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);

if(!empty($f_name) && !empty($email)){
    $check_emailQ = "SELECT * FROM `user` WHERE user_email = '$email' ";
    $check_email = mysqli_query($conn, $check_emailQ);
    if (mysqli_num_rows($check_email) > 1) {
        error($email . " this email already exists");
    } else {


        if (isset($_FILES['user_image']) ) {

            
            $user_image_name = $_FILES['user_image']['name'];
            $user_image_tmp_name = $_FILES['user_image']['tmp_name'];

            $img_explode = explode('.', $user_image_name);
            $img_ext = end($img_explode);
            $extension = ['png', 'jpeg', 'jpg'];

            if (in_array($img_ext, $extension) === true) {

                $image_unique_name = time() . $user_image_name;

                $updateQ = "UPDATE `user` SET `user_name`='$f_name',`user_email`='$email',`user_img`='$image_unique_name' WHERE user_rand_id = $user_id";
                $update = mysqli_query($conn,$updateQ);
                if($update){
                    unlink($_FILES['user_image']['name']);
                    move_uploaded_file($user_image_tmp_name, '../user_img/' . $image_unique_name);
                    echo "success";
                }else{
                    error('something went wrong');
                }



            }else{
                $updateQ = "UPDATE `user` SET `user_name`='$f_name',`user_email`='$email' WHERE user_rand_id = $user_id";
                $update = mysqli_query($conn, $updateQ);
                if ($update) {
                    echo "success";
                } else {
                    error('something went wrong');
                }
            }





        }
    
        }

    



}else{
    error("please fill out all field");
}

?>