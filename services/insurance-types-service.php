<?php
include ("../utils/db-connection.php");

function viewinsuranceTypes()
{
    try {
        $viewQuery = "SELECT * FROM insurance_type";
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

function addinsuranceTypes($cus_nic, $vehicle_no, $insurance_type, $price, $description)
{
    try {
        $insertQuery = "INSERT INTO insurance_type (
        cus_nic,
        vehicle_no,
        insurance_type,
        price,
        description
        ) VALUES (
        '$cus_nic', 
        '$vehicle_no' , 
        '$insurance_type' ,
        '$price' ,  
        '$description' 
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
        $viewQuery = "SELECT * FROM insurance_type WHERE i_type_id = '$id'";
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

function updateinsuranceTypes($id, $cus_nic, $vehicle_no, $insurance_type, $price, $description)
{
    try {
        $updateQuery = "UPDATE insurance_type 
        SET 
        cus_nic='$cus_nic', 
        vehicle_no='$vehicle_no',
        insurance_type='$insurance_type',
        price='$price',
        description='$description'
        WHERE 
        i_type_id=$id";
       
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
?>