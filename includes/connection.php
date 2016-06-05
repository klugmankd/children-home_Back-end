<?php
    require ("constants.php");
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    mysqli_select_db($connection, DB_NAME);
//    if ($connection) {
//        echo "ok";
//    }