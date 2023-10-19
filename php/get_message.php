<?php
session_start();
if (!isset($_SESSION['user_rand_id']) ||  $_SESSION['user_rand_id'] == '' ||  $_SESSION['user_rand_id'] != true) {
    header('location:index.php');
}
require 'config.php';

$reciver_id = mysqli_real_escape_string($conn,$_POST['reci_id']);
$sender_id = mysqli_real_escape_string($conn,$_POST['sender_id']);

$select_messQ = "SELECT * FROM message_list WHERE reciever_id = $reciver_id AND sender_id = $sender_id OR reciever_id = $sender_id AND sender_id = $reciver_id order by mes_id ";
$select_mess = mysqli_query($conn, $select_messQ);

// $select_recive_dataQ =
// "SELECT * FROM user WHERE user_rand_id = $reciver_id ";
// $select_recive_data = mysqli_query($conn, $select_recive_dataQ);
// $fetch_sender_data = mysqli_fetch_assoc($select_recive_data);

// // var_dump($fetch_sender_data);
// echo $fetch_sender_data['status'];

while($message = mysqli_fetch_assoc($select_mess)){
    $sender_user_dataQ = "SELECT * FROM user WHERE user_rand_id = $reciver_id ";
    $sender_user_data = mysqli_query($conn, $sender_user_dataQ);
    $fetch_sender_data = mysqli_fetch_assoc($sender_user_data);
    $time = strtotime($message['mes_time']);
    $myFormatForView = date("g:i A", $time);
    if($message['reciever_id'] == $sender_id){
        // echo '<div class="sender_message">
        //         <div class="sender_img">
        //             <img src="./user_img/'. $fetch_sender_data['user_img'].'" alt="">
        //         </div>
        //         <p>' . $message['mes_text'] . '</p>
        //     </div>';



            echo '<div class="sender_message">
            <div class="sender_img">
                <img src="./user_img/' . $fetch_sender_data['user_img'] . '" alt="">
            </div>
            <p>' . $message['mes_text'] . '<span class="message_time">' . $myFormatForView . '</span></p>
            
        </div>';
    }else{

       
            echo '<div class="receive_message">
    <p class="receive-mess_text">' . $message['mes_text'] . ' <span>' . $myFormatForView .  '</span> </p> 
</div>';
        
//         if($fetch_sender_data['status'] == 1) {
//             echo '<div class="receive_message">
//     <p class="receive-mess_text">' . $message['mes_text']  . ' <span>' . $myFormatForView . '<i class="bx bx-check-double tick " ></i> </span></p>
    
// </div>';
//         }
        }

        
    




?>

<?php
}
?>

