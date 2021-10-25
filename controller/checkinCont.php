<?php

    function insertDate () {
        include "model/customersModel.php";
        include "model/checkinModel.php";
        $cID = selectRecord('id');

        date_default_timezone_set('Asia/Singapore');
        $date = date('j M Y');
        $time = date('h:i a');

        $dateTime = date('Y-m-d H:i:s');

        insertRecordCheckin('date_created','customer_id',$dateTime,$cID);
        return $date,$time;
    }

    function numCheckin () {
        include "model/customersModel.php";
        include "model/checkinModel.php";
        $cID = selectRecord('id');

        $numCh = countRecordCheckin ($cID);
        return $numCh;
    }

?>