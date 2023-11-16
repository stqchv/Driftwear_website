<?php
    $conn=mysqli_connect('localhost','root','','driftwear_shop');
    
    if($conn){
        echo "Successful";
    }
    else{
        die("Connection Failed");
    }
?>