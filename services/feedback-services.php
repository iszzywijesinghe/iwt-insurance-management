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

function addFeedback($fbId, $rate, $des, $nic)
{
    try {
        $insertQuery = "INSERT INTO feedback (
        feedback_id,
        rate,
        description,
        accident_grade,
        cus_nic
        ) VALUES ( 
        '$fbId' , 
        '$rate' , 
        '$des', 
        '$nic' 
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
?>