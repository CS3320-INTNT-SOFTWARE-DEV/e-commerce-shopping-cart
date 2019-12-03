<?php

    $user = 'root';
    $pass = '';
    $db = 'cs3320';

    $conn = new mysqli('localhost', $user, $pass, $db); 

    if(!$conn){

        die("Unable to connect");

    }//end if
    else{

        /*
        //get banana sum
        $banana_units = "SELECT SUM(units) AS banana_sum FROM cart WHERE productnName = 'Bananas'";
        $banana_result = mysqli_query($conn, $banana_units);
        $banana_row = mysqli_fetch_assoc($banana_result); 
        $banana_sum = $banana_row['banana_sum'];

        //get apple sum
        $apple_units = "SELECT SUM(units) AS apple_sum FROM cart WHERE productnName = 'Apples'";
        $apple_result = mysqli_query($conn, $apple_units);
        $apple_row = mysqli_fetch_assoc($apple_result); 
        $apple_sum = $apple_row['apple_sum'];

        //get oranges
        $orange_units = "SELECT SUM(units) AS orange_sum FROM cart WHERE productnName = 'Oranges'";
        $orange_result = mysqli_query($conn, $orange_units);
        $orange_row = mysqli_fetch_assoc($orange_result); 
        $orange_sum = $orange_row['orange_sum'];

        //get mangos
        $mango_units = "SELECT SUM(units) AS mango_sum FROM cart WHERE productnName = 'Mangos'";
        $mango_result = mysqli_query($conn, $mango_units);
        $mango_row = mysqli_fetch_assoc($mango_result); 
        $mango_sum = $mango_row['mango_sum'];

        

        echo "<table>
        <tr>
        <th>Product</th>
        <th>Units</th>
        </tr>";

        if($banana_sum > 1){

            echo "<tr>";
            echo "<td>Bananas</td>";
            echo "<td>" . $banana_sum . "</td>";
            echo "</tr>";

        } //end banana if

        if($apple_sum > 1){

            echo "<tr>";
            echo "<td>Bananas</td>";
            echo "<td>" . $apple_sum . "</td>";
            echo "</tr>";

        } //end apple if

        if($orange_sum > 1){

            echo "<tr>";
            echo "<td>Bananas</td>";
            echo "<td>" . $orange_sum . "</td>";
            echo "</tr>";

        } //end orange if

        if($mango_sum > 1){

            echo "<tr>";
            echo "<td>Bananas</td>";
            echo "<td>" . $mango_sum . "</td>";
            echo "</tr>";

        } //end mango if

        echo "</table>";
        */
        
        header("Location:http://localhost/confirmationPage.html");
        mysqli_close($conn);

    }//end else


?>