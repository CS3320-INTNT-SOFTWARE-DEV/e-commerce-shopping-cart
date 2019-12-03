<?php

    $user = 'root';
    $pass = '';
    $db = 'cs3320';

    $conn = new mysqli('localhost', $user, $pass, $db);

    if(!$conn){

        die("Unable to connect");

    }//end if
    else{

        $sql = "SELECT SUM(totalPrice) AS total_sum FROM cart";
        //$result = mysqli_query('SELECT SUM(totalPrice) AS total_sum FROM cart');

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result); 
        $sql_sum = $row['total_sum'];

        
        
        echo $sql_sum;
        mysqli_close($conn);

    }//end else
?>
