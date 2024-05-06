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
        gender
        	
        ) VALUES ( 
        '$cusnic' , 
        '$firstname' , 
        '$lastname', 
        '$email',
        '$houseno',
        '$streetno',
        '$city',
        '$gender'
        
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
        $viewQuery = "SELECT * FROM customer WHERE cus_id = '$id'";
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
function updateuser($id, $cusnic, $firstname,	$lastname,	$email,	$houseno, $streetno, $city, $gender)
{
    try {
        $updateQuery = "UPDATE customer
        SET 
        cus_nic='$cusnic', 
        first_name='$firstname',
        last_name='$lastname',
        email='$email'
        house_no='$houseno',
        street_no=' $streetno',
        city='$city',
        gender='$gender',

        WHERE 
        cus_nic=$id";
       
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