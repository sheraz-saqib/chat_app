<?php 
error_reporting(0);
$conn = mysqli_connect('localhost','root','', 'ichatapp');
if(!$conn){
    echo "connection not stable";
}

function error($text){
    echo '<div class="error">

    <div class="error_contain">
        <p class="error_text">'.$text.'</p>
    </div>
    
</div>

    ';
}

?>