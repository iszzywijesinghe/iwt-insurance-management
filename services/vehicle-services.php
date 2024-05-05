<?php
include ("../utils/db-connection.php");

function viewVehicle()
{
    try {
        $viewQuery = "SELECT * FROM vehicle";
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

function addVehicle()
{
    try {
        $insertQuery = "";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>