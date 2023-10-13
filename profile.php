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
     <link rel="stylesheet" href="profile.css">
     <style>
         .status.status_offline {
             background-color: rgba(95, 95, 95, 0.801) !important;
         }

         .profile_update a{
            white-space: nowrap;
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
                     <li class="li-option"><a href="#!"><i class='bx bxs-user'></i>profile</a></li>
                     <li class="li-option"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>logout</a></li>
                 </ul>
             </div>
         </div>

         <div class="profile_header pro_h-1">
             <div class="back_btn">
                 <a href="chat.php"><i class='bx bx-chevron-left'></i></a>
             </div>
             <h2>profile</h2>
         </div>
         <div class="profile_detail">
             <div class="profile_detail_group">
                 <div class="profile_img"><img src="./user_img/<?= $fetch_user_data['user_img'] ?>" alt=""></div>
                 <div class="profile_detail_text">
                     <div class="user_name">
                         <h2><?= $fetch_user_data['user_name'] ?></h2>
                     </div>
                 </div>
             </div>
             <div class="profile_update">
                 <a href="update_profile.php">update profile</a>
             </div>
         </div>
         <div class="profile_header m-2">
             <h2>other info</h2>
         </div>
         <div class="profile_other_detail">

             <div class="detail">
                 <div class="detail_head">
                     <h3>email</h3>
                 </div>
                 <p><?= $fetch_user_data['user_email'] ?></p>
             </div>
             <div class="detail">
                 <div class="detail_head">
                     <h3>Account created</h3>
                 </div>
                 <p><?= date('d-M-y', strtotime($fetch_user_data['user_create_acc'])) ?></p>
             </div>
         </div>






     </div>
 </body>
 <script src="app.js"></script>
 <script src="option.js"></script>

 </html>