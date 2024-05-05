<?php
include ("../utils/db-connection.php");

function viewPayment()
{
    try {
        $viewQuery = "SELECT * FROM payment";
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

function addPayment($type, $insExpDate, $cName, $cNo, $cvv, $cardExpDate)
{
    try {
        $insertQuery = "INSERT INTO payment (
        rate,
        description,
        accident_grade,
        cus_nic
        ) VALUES (  
        '$type',
        '$insExpDate', 
        '$cName', 
        '$cNo', 
        '$cvv', 
        '$cardExpDate' 
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