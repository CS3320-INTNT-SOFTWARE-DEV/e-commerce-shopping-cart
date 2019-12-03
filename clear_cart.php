<?php

    $user = 'root';
    $pass = '';
    $db = 'cs3320';

    $conn = new mysqli('localhost', $user, $pass, $db);

    if(!$conn){

        die("Unable to connect");

    }//end if
    else{

        $sql = "DELETE FROM cart";

        if(mysqli_query($conn, $sql)){
            echo "Cart cleared";
            header("Location:http://localhost/user_info.html");
        }//end if
        else{

            echo "Failed to insert";

        }//end else

    }//end else


?>