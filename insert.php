<?php

    $user = 'root';
    $pass = '';
    $db = 'cs3320';

    $conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

    // User Information
    if(isset($_POST['userfullname'])){
        
    $sql = "INSERT INTO userinformation(userId, fullname, address1, address2, city, state, zip, phone, email) 
            VALUES  ('1', ' $_POST[userfullname]', '$_POST[useraddress1]', '$_POST[useraddress2]', 
                    '$_POST[usercity]', '$_POST[userstate]', '$_POST[userzipcode]', '$_POST[userphone]', 
                    '$_POST[useremail]')";
    }//end if

    // Shipping Information
    if(isset($_POST['shippingaddress1'])){

    $sql = "INSERT INTO shippinginformation(userId, address1, address2, city, state, zip) 
            VALUES  ('1', '$_POST[shippingaddress1]', '$_POST[shippingaddress2]', '$_POST[shippingcity]', 
                    '$_POST[shippingstate]', '$_POST[shippingzipcode]')";
    }//end if



   //execute the INSERT 
   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;

    }

    $conn->close();

?>