<?php
    function insertRecord($column,$value) {
        include "connect.php";
        $sql = "INSERT INTO customers ($column) VALUES ('$value')";

        if (mysqli_query($conn, $sql)) {
            // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }





?>