<?php

    
    $user = 'root';
    $pass = '';
    $db = 'cs3320';

    $conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

    $fullname = $_POST['userfullname'];
    $address1 = $_POST['useraddress1'];
    $address2 = $_POST['useraddress2'];
    $city = $_POST['usercity'];
    $state = $_POST['userstate'];
    $zip = $_POST['userzipcode'];
    $phone = $_POST['userphone'];
    $email = $_POST['useremail'];

    $sql = "INSERT INTO userinformation(userId, fullname, address1, address2, city, state, zip, phone, email) 
            VALUES('1', '$fullname', '$address1', '$address2', '$city', '$state', '$zip', '$phone', '$email')";

   //execute the INSERT
   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;

    }

    $conn->close();

?>