<?php
include ("../utils/db-connection.php");

function viewFeedback()
{
    try {
        $viewQuery = "SELECT * FROM feedback";
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

function addFeedback($rate, $des)
{
    try {
        $insertQuery = "INSERT INTO feedback (
        rate,
        description
        ) VALUES (
        '$rate', 
        '$des'
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
        $viewQuery = "SELECT * FROM feedback WHERE feedback_id = '$id'";
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

function updateFeedback($id, $rate, $des)
{
    try {
        $updateQuery = "UPDATE feedback 
        SET 
        rate='$rate', 
        description='$des'
        WHERE 
        feedback_id=$id";

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

function deleteFeedback($id)
{
    try {
        $deleteQuery = "DELETE FROM feedback 
        WHERE 
        feedback_id=$id";

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



?>