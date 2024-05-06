<?php
include("../utils/db-connection.php");

function viewClaimStatus()
{
    try {
        $viewQuery = "SELECT * FROM claim_status";
        $results = mysqli_query(getConnectionInstance(), $viewQuery);
        if (!$results) {
            $message = "Error Fetching Data" . mysqli_error(getConnectionInstance());
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            return ($results);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function addClamsStatus(
    $cusNic,
    $vNo,
    $reqDate,
    $reqApprovedDate
) {
    try {
        $insertQuery = "INSERT INTO claim_status
        ( 
            cus_nic, 
            vehicle_no, 
            request_date, 
            approved_date
        ) VALUES (
            '$cusNic',
            '$vNo',
            '$reqDate',
            '$reqApprovedDate'
        )";

        $result = mysqli_query(getConnectionInstance(), $insertQuery);

        if (!$result) {
            $message = "Error Inserting Data" . mysqli_error(getConnectionInstance());
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            echo "<script type='text/javascript'>alert('Data Inserted Sucessfully');</script>";
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
