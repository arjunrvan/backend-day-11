<?php

    function insertCustName ($name) {
        include "model/customersModel.php";
        // Insert into customer table
        insertRecord('name',$name);
    }

    function updateCustPhone ($phone) {
        include "model/customersModel.php";
        $cID = selectRecord('id');
        // updateRecord ('phone',$phone,$cID);
    }

?>