<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register New Vehicle</title>
        <link rel="stylesheet" href="../asserts/css/Regstylesheet.css">
        <link rel="stylesheet" type="text/css" href="../asserts/css/style-nav-h.css">
        <link rel="stylesheet" type="text/css" href="../asserts/css/footer-styles.css">
    </head>
    <body>


    <?php
    include ("../services/vehicle-services.php");

    if (isset($_POST['Register'])) {

        $customerNic = $_POST['cus_nic'];
        $vehicleNo = $_POST['vehicle_no'];
        $engineNo = $_POST['engine_no'];
        $chassisNo = $_POST['chassis_no'];
        $insuranceType = $_POST['insurance_type'];
        $vehicleBrand = $_POST['vehicle_brand'];
        $vehicleModle = $_POST['vehicle_modle'];
        $vehicleValue = $_POST['vehicle_value'];
        $yom = $_POST['yom'];


        addVehicle($customerNic, $vehicleNo, $chassisNo, $engineNo, $insuranceType, $vehicleBrand, $vehicleModle, $vehicleValue, $yom);

        // TODO: Debug this logic
        // if (
        //     !empty($vehicleNo) ||
        //     !empty($vehiclePhotos) ||
        //     !empty($date) ||
        //     !empty($grade)
        // ) {
        //     addClams($vehicleNo, $vehiclePhotos, $date, $grade);
        // }
    }

    ?>
            
    <?php include '../partials/nav-bar-h.php' ?>

<div class="top_container">
            <!--image container-->
            <div class="image_hover">
            <div class="img_container"> 
                <img class="car_image" src = "../asserts/img/register image.png">
            </div>
            <div class="heading1">
            <h2>Register Today!</h2>
            <h1>Be Sure Your Vehicle's Safe</h1>
             </div>
</div>
</div>

            <!--center container-->
            <div class="center_container">
                <div class="form_container">
                    <form id="registerForm">
                        <h1>Register Now!!!</h1>
                        <p class="intro-paragraph">Welcome to our MotorGuard Vehicle Insurance Company. 
                            With our user-friendly interface, registering your new vehicle is a breeze. 
                            Simply fill out the form below and enjoy peace of mind on the road.</p>
                            
                        <div class="form_only">
                        <div class="form-group">
                            <div class="head">
                                <span> Vehicle Details </span><br><br>
                            </div>
                            <label class="lable_name"  for="cus_nic">National Identy Card Number (NIC): </label><br>
                            <input  type="text" id="FullName" name="cus_nic" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="vehicle_no">Vehicle No. : </label><br>
                            <div class="whitebox">
                            <input type="text" id="owner'sNICno" name="vehicle_no" required>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name" for="engine_no">Engine No.: </label><br>
                            <input type="text" id="Engineno" name="engine_no" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name" for="chassis_no">Chassis No.: </label><br>
                            <input type="text" id="chassisno" name="chassis_no" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="insurance_type">Insurance Type: </label><br>
                            <input type="text" id="vehicletype" name="insurance_type" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="vehicle_brand">Vehicle Brand: </label><br>
                            <input type="text" id="vehiclemodel" name="vehicle_brand" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="vehicle_modle">Vehicle Model: </label><br>
                            <input type="text" id="YOM" name="vehicle_modle" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="vehicle_value">Vehicle Value: </label><br>
                            <input type="text" id="vehiclevalue" name="vehicle_value" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="yom">Year of Manufactured(YOM): </label><br>
                            <input type="text" id="insurancetype" name="yom" required>
                        </div>
                    </div>
                        <br>
                        <div class="bottom-text">    
                    <p>By creating an account you agree to our <a class="terms" href="#">Terms & Privacy</a>.</p>
                    </div>
                    <input type="checkbox" name="agree" class="checkbox">
                    <label for="agree" >I certify that the above information is true and that I agree to the terms & conditions mentiond in the insurance policy statement of the company.</label><br>
                        <br>
                        <button name="Register" type="submit">Register</button>
                    </form>

                    
                </div>
            </div>
            <?php include '../partials/footer-index.php' ?>
          
            



    </body>
</html>
