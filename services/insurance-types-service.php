<?php
include ("../utils/db-connection.php");

function viewinsuranceTypes()
{
    try {
        $viewQuery = "SELECT * FROM vehicle_insurance_type";
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

function addinsuranceTypes($cus_nic, $vehicle_no, $insurance_type, $price, $description)
{
    try {
        $insertQuery = "INSERT INTO vehicle_insurance_type (
        cus_nic
        insurance_type,
        price,
        vehicle_no,
        description
        ) VALUES (
        '$cus_nic', 
        '$insurance_type' , 
        '$price' , 
        '$vehicle_no', 
        '$description 
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