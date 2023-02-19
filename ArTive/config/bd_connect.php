<?php
    //connect to database
    $conn = mysqli_connect("localhost", "roza", "khadizajarin","artive");

    //check connection
    if(!$conn){
        echo 'Connection error:' . mysqli_connect_error();
    }

?>
