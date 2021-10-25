<?php

    function insertCustName ($name) {
        include "../model/customersModel.php";
        // Insert into customer table
        insertRecord('name',$name);
    }

    function selectLastCustID() {
        include "../model/customersModel.php";
        return selectRecord('id');
    }

    function updateCustPhone ($phone,$cID) {
        include "../model/customersModel.php";
        updateRecord ($column,$value,$cID);
    }

?>