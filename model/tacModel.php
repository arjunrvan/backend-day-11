<?php
    function insertRecordTac($column1,$column2,$value1,$value2) {
        include "connect.php";
        $sql = "INSERT INTO tac ($column1,$column2) VALUES ('$value1','$value2')";

        if (mysqli_query($conn, $sql)) {
            // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>