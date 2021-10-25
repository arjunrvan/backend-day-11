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

    function selectRecord($column) {
        include "connect.php";
        $result = mysqli_query($conn,"SELECT $column FROM customers ORDER BY $column DESC LIMIT 1");
        $row = mysqli_fetch_array($result);
        return $row[0];
        
    }

    function updateRecord ($column,$value,$cID) {
        include "connect.php";
        $sql = "UPDATE customers SET $column = '$value' WHERE id = $cID";

        if (mysqli_query($conn, $sql)) {
            // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }





?>