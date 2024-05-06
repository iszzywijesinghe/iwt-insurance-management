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

function updateClaim($id, $cusNic, $vehicleNo, $requestDate, $approvedDate)
{
    try {
        $updateQuery = "UPDATE claim_status 
        SET 
        cus_nic='$cusNic', 
        vehicle_no='$vehicleNo',
        request_date='$requestDate',
        approved_date='$approvedDate'
        WHERE 
        claim_id=$id";
        echo $updateQuery;
       
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

function deleteClaim($id)
{
    try {
        $deleteQuery = "DELETE FROM claim_status 
        WHERE 
        claim_id=$id";

        $result = mysqli_query(getConnectionInstance(), $deleteQuery);

        if (!$result) {

            $message = "Error Deleting Data" . mysqli_error(getConnectionInstance());
            echo "<script type='text/javascript'>alert('$message');</script>";

        } else {
            echo "<script type='text/javascript'>alert('Item Deleted Sucessfully');</script>";
        }

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}