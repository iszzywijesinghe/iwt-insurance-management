<?php

function getConnectionInstance()
{
    try {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "iwt-insurance-management";
        $conn = mysqli_connect($host, $username, $password);
        mysqli_select_db($conn,$database);
        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>