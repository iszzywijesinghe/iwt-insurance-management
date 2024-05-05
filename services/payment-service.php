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

function addPayment($claimId, $vehicleNo, $chName, $cNo, $cvv, $cardExpDate)
{
    try {
        $insertQuery = "INSERT INTO payment (
        claim_id,
        vehicle_no, 
        cardholders_name,
        card_no,
        cvv,
        expire_date
        ) VALUES (  
        '$claimId',
        '$vehicleNo', 
        '$chName', 
        '$cNo', 
        '$cvv', 
        '$cardExpDate' 
        )";
        //TODO: payment_id, cus_nic, amount not included above
        //TODO: change the cardholder's_name to cardholders_name in the db
        //TODO: Change data type to varchar of expire_date in db

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