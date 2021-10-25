<?php

      

    function insertRecord ($name) {
        include "connect.php";
        // Insert into customer table
        $sql = "INSERT INTO customers (name) VALUES ('$name')";

        if (mysqli_query($conn, $sql)) {
            // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    function () {
        
    }



?>