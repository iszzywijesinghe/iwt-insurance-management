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

function addFeedback()
{
    try {
        $insertQuery = "";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>