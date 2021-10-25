<?php

    function insertCustName ($name) {
        include "model/customersModel.php";
        // Insert into customer table
        insertRecord('name',$name);
    }

    function updateCustPhone ($phone) {
        include "model/customersModel.php";
        // $cID = selectRecord('id');
        $cID=7;
        updateRecord ('phone',$phone,$cID);
    }

?>