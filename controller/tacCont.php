<?php

    function insertTac ($tac) {
        include "model/customersModel.php";
        include "model/tacModel.php";
        $cID = selectRecord('id');
        // Insert into tac table
        insertRecordTac('tac','customer_id',$tac,$cID);
    }

?>