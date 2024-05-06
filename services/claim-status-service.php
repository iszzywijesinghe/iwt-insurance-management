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

function getUpdateRow($id)
{
    try {
        $viewQuery = "SELECT * FROM claim_status WHERE claim_id = '$id'";
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

function updateClaim($id, $vehicleNo, $vehiclePhotos, $date, $grade)
{
    try {
        $updateQuery = "UPDATE claim 
        SET 
        vehicle_no='$vehicleNo', 
        vehicle_photos='$vehiclePhotos',
        date='$date',
        accident_grade='$grade'
        WHERE 
        claim_id=$id";
       
       $result = mysqli_query(getConnectionInstance(), $updateQuery);

        if (!$result) {

            $message = "Error Inserting Data" . mysqli_error(getConnectionInstance());
            echo "<script type='text/javascript'>alert('$message');</script>";

        } else {
            echo "<script type='text/javascript'>alert('Data Updated Sucessfully');</script>";
        }

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}