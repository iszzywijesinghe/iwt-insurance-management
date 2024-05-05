<?php

    $vehicle_no=$_POST["vehicle_no"];
    $accident_grade=$_POST["accident_grade"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    $photos=$_POST["v_photos"];
    $additional_details=$_POST["additional_details"];

    $sql="INSERT INTO claim_status VALUES ('$vehicle_no','$accident_grade','$date','$time','$photos','$additional_details')";
    
    if($con->query($sql))
    {
        echo "Insert Successful";
    }
    else
    {
        echo "Error".$con->error;
    }
    

?>