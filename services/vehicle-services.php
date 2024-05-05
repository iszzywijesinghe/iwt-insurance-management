<?php
include ("../utils/db-connection.php");

function viewVehicle()
{
    try {
        $viewQuery = "SELECT * FROM vehicle";
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

function addVehicle($customerNic, $vehicleNo, $engineNo, $insuranceType, $vehicleBrand, $vehicleModle, $vehicleValue, $yom)
{
    try {
        $insertQuery = "INSERT INTO vehicle (
        cus_nic,
        vehicle_no,
        engine_no,
        chassis_no,
        insurance_type,
        vehicle_brand,
        vehicle_modle,
        vehicle_value,
        yom

        ) VALUES ( 
        '$customerNic' , 
        '$vehicleNo' , 
        '$engineNo', 
        '$insuranceType'
        '$vehicleBrand'
        '$vehicleModle'
        '$vehicleValue'
        '$yom'
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