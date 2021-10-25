<?php
    function insertRecordCheckin($column1,$column2,$value1,$value2) {
        include "connect.php";
        $sql = "INSERT INTO checkin ($column1,$column2) VALUES ('$value1','$value2')";

        if (mysqli_query($conn, $sql)) {
            // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    function countRecordCheckin ($cID) {
        $result = mysqli_query($conn,"SELECT COUNT(id) FROM checkin WHERE customer_id = $cID");
        $row = mysqli_fetch_array($result);
        $numCh = $row[0];

        return $numCh;
    }

?>
