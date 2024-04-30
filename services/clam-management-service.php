<?php
include ("../utils/db-connection.php");

function viewClams()
{
    try {
        $viewQuery = "SELECT * FROM claim";
        $results = mysqli_query(getConnectionInstance(), $viewQuery);
        if (!$results) {
            $message = "Error Fetching Data" . mysqli_error(Connection());
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            return (mysqli_fetch_array($results, MYSQLI_ASSOC));
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>