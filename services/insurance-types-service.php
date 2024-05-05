<?php
include ("../utils/db-connection.php");

function viewinsuranceTypes()
{
    try {
        $viewQuery = "SELECT * FROM insurance_types";
        $results = mysqli_query(getConnectionInstance(), $viewQuery);
        if (!$results) {
            $message = "Error Fetching Data" . mysqli_error(Connection());
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            return ($results);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function addinsuranceTypes()
{
    try {
        $insertQuery = "";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>