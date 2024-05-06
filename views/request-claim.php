<!DOCTYPE html>
<html>

<head>
    <title>Request Claim</title>
    <link rel="stylesheet" href="../asserts/css/request-claim-style.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/footer-new.css">
    


</head>
<?php
include("../services/claim-status-service.php");

if (isset($_POST['cs-submit'])) {

    $cusNic = $_POST['cus_nic'];
    $vehicleNo = $_POST['vehicle_no'];
    $requestDate = $_POST['request_date'];
    $approvedDate = $_POST['approved_date'];
   // $status = $_POST['status'];

    addClamsStatus($cusNic, $vehicleNo, $requestDate, $approvedDate);
}

?>

<body>
    <div class="background">
    <div class="heading">
        <h1>Request Claim</h1>
    </div>
<div class="formc">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            Customer NIC.
            <br>
            <input type="text" name="cus_nic" id="cus_nic" class="input-field">
            <br>
        </div>
        <br>
        <div class="form-group">
            Vehicle No.
            <br>
            <input type="text" name="vehicle_no" id="vehicle_no" class="input-field">
            <br>
        </div>
        <div class="form-group">
            Request Date.
            <br>
            <input type="date" name="request_date" id="request_date" class="input-field">
            <br>
        </div>
        <div class="form-group">
            Approved Date.
            <br>
            <input type="date" name="approved_date" id="approved_date" class="input-field">
            <br>
        </div>
        <div>
            <input type="submit" name="cs-submit" value="submit">
        </div>
        
    </form>
    </div>
    </div>
    <?php include '../partials/footer-new.php' ?>


 
</body>


</html>