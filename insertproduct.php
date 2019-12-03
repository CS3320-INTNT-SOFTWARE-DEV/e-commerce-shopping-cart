<?php

    $user = 'root';
    $pass = '';
    $db = 'cs3320';

    $conn = new mysqli('localhost', $user, $pass, $db); 

    if(!$conn){

        die("Unable to connect");

    }//end if
    else{

        switch($_POST['products']){

            case "0.50":
                $product = 'Bananas';
                $price = (float)$_POST['units'] * 0.5;
                break;
    
            case "1.50":
                $product = 'Apples';
                $price = (float)$_POST['units'] * 1.5;
                break;
    
            case "1.00":
                $product = 'Oranges';
                $price = (float)$_POST['units'] * 1;
                break;
    
            case "2.00":
                $product = 'Mangos';
                $price = (float)$_POST['units'] * 2;
                break;
    
        }//end switch

        $sql = "INSERT INTO cart(productName, units, totalPrice) VALUES  ('$product', '$_POST[units]', '$price')";

        if(mysqli_query($conn, $sql)){
            echo "One record inserted to database.";
            header("Location:http://localhost/shopping_cart.html");
        }//end if
        else{

            echo "Failed to insert";

        }//end else

        
        mysqli_close($conn);

    }//end else

    /*// Insert product into the database
    $sql = "INSERT INTO cart(productName, totalPrice) 
            VALUES  ('$product', '$price')";*/


   //execute the INSERT 
  /* if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    //header("Location:http://localhost/shopping_cart.html");
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;

    }

    $conn->close();*/

?>