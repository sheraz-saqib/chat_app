<?php
session_start();

if (!isset($_SESSION['user_rand_id']) ||  $_SESSION['user_rand_id'] == '' ||  $_SESSION['user_rand_id'] != true) {
    header('location:index.php');
}


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
    <style>
        .status.status_offline {
            background-color: rgba(95, 95, 95, 0.801) !important;
        }

        .end_row {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .user {
            position: relative;
        }

        .new_message {
            position: absolute;
            right: 4rem;
            background-color: rgb(37, 124, 37);
            padding: .1rem .5rem;
            border-radius: 50%;
            font-size: .9rem;
            color: white;
        }

        .user_not_found {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
            text-transform: capitalize;
margin-top: 2rem;
        }

        .user_not_found p{
text-align: center;
display: flex;
align-items: center;
font-weight: 500;
        } .user_not_found i {
            font-size: 1.4rem;

        }
    </style>
</head>

<body>


    <div class="main_body">
        <!-- header -->
        <div class="header">
            <div class="logo">
                <h2>iChat-App</h2>
            </div>
            <div class="icon">
                <i class='bx bx-dots-vertical-rounded option_icon'></i>
                <ul class="ul_options ul_option_toggle">
                    <i class='bx bx-x option_cross'></i>
                    <li class="li-option"><a href="#!"><i class='bx bxs-moon'></i>dark</a></li>
                    <li class="li-option"><a href="profile.php"><i class='bx bxs-user'></i>profile</a></li>
                    <li class="li-option"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>logout</a></li>
                </ul>
            </div>
        </div>
        <!-- header -->
        <!-- search -->
        <div class="search">
            <div class="search_input">
                <input id="search_input" type="text" placeholder="searching..." spellcheck="false" autocomplete="off"><i class='bx bx-x search_cross'></i><i class='bx bx-search'></i>
            </div>
        </div>
        <!-- search -->

        <div class="user_body">

           
            <!-- user -->
            <!-- <a href="userMessage.html">
                <div class="user">
                    <div class="left_side">
                        <div class="user_img"><img src="./img/boy.jpeg" alt=""></div>

                        <div class="user_detail">
                            <div class="user_name">sheraz</div>
                            <div class="message">this is a message....</div>
                        </div>

                    </div>

                    <div class="status">
                    </div>
                </div>
            </a> -->
            <!-- user -->


        </div>



    </div>



</body>
<?php
require 'app_js.php';
?>
<script src="option.js"></script>
<!-- <script src="show_user_js.php"></script> -->



</html>