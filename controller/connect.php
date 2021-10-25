<?php
    $servername = "localhost";
    $username = "arjunrvan";
    $password = "testpassword";
    $dbname = "mysejahteri";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


?>