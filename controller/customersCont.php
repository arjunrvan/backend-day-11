<?php

    function insertCustName ($name) {
        include "model/customersModel.php";
        insertRecord('name',$name);
    }

    function updateCustPhone ($phone) {
        include "model/customersModel.php";
        $cID = selectRecord('id');
        updateRecord ('phone',$phone,$cID);
    }

    function selectCustName () {
        include "model/customersModel.php";
        $name = selectRecord('name');
        return $name;
    }

    function selectCustPhone () {
        include "model/customersModel.php";
        $phone = selectRecord('phone');
        return $phone;
    }

    function updateCustName ($newName) {
        include "model/customersModel.php";
        $cID = selectRecord('id');
        updateRecord ('name',$newName,$cID);
    }
    function custJoinDate () {
        include "model/customersModel.php";
        $date = selectRecord('date_created');
        $date = date('j M Y', strtotime($date));
        return $date;
    }

?>