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
                <h2>signin to iChat-App</h2>
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





            <form action="" class="signin_form">



                <!-- field -->

                <div class="field_group">
                    <div class="field_title">email</div>
                    <div class="field">
                        <div class="field_icon"><i class='bx bxs-envelope'></i></div>
                        <div class="field_input"><input type="email" minlength="10" maxlength="40" name="email" placeholder="Enter your email@gmail.com"></div>
                    </div>

                </div>
                <!-- field -->
                <!-- field -->

                <div class="field_group">
                    <div class="field_title">Password</div>
                    <div class="field">
                        <div class="field_icon"><i class='bx bxs-lock-open'></i></div>
                        <div class="field_input password_field"><input type="password" name="password" placeholder="Enter your password"><i class="fa-solid fa-eye open_eye_icon"></i><i class="fa-solid fa-eye-slash close_eye_icon active"></i></div>
                    </div>

                </div>
                <!-- field -->





                <!-- field -->


                <div class="contoller_btn">
                    <input type="submit" id="login_btn" name="create_acc_submit" value="Login">
                </div>

        </div>


        <div class="footer">
            <p>create a new account? <a href="createacc.php">create account</a></p>
        </div>

    </div>

    </form>

</body>
<?php 
require 'login_js.php'
?>

</html>