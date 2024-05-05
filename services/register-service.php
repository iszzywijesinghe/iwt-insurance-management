<?php
include ("../utils/db-connection.php");

function viewuser()
{
    try {
        $viewQuery = "SELECT * FROM customer";
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


    function adduser($cusnic, $firstname,	$lastname,	$email,	$houseno, $streetno, $city, $gender, $contactno)
{
    try {
        $insertQuery = "INSERT INTO customer (
        cus_nic,
        first_name,
        last_name,
        email,
        house_no,
        street_no,
        city,
        gender,
        contact_no,		
        ) VALUES ( 
        '$cusnic' , 
        '$firstname' , 
        '$lastname', 
        '$email',
        '$houseno',
        '$streetno',
        '$city',
        '$gender',
        '$contactno'
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