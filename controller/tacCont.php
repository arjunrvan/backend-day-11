<?php

    function insertTac () {
        include "model/customersModel.php";
        include "model/tacModel.php";
        // $tac = random_int(100000, 999999);
        $cID = selectRecord('id');
        // Insert into tac table
        // insertRecordTac('tac','customer_id',$tac,$cID);
    }

?>