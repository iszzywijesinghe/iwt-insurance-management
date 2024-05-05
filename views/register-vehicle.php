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
                            <label class="lable_name"  for="FullName">National Identy Card Number (NIC): </label><br>
                            <input  type="text" id="FullName" name="FullName" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="owner'sNICno">Vehicle No. : </label><br>
                            <div class="whitebox">
                            <input type="text" id="owner'sNICno" name="owner'sNICno" required>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name" for="Engineno">Engine No.: </label><br>
                            <input type="text" id="Engineno" name="Engineno" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name" for="chassisno">Chassis No.: </label><br>
                            <input type="text" id="chassisno" name="chassisno" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="vehicletype">Insurance Type: </label><br>
                            <input type="text" id="vehicletype" name="vehicletype" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="vehiclemodel">Vehicle Brand: </label><br>
                            <input type="text" id="vehiclemodel" name="vehiclemodel" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="YOM">Vehicle Model: </label><br>
                            <input type="text" id="YOM" name="YOM" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="vehiclevalue">Vehicle Value: </label><br>
                            <input type="text" id="vehiclevalue" name="vehiclevalue" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="insurancetype">Year of Manufactured(YOM): </label><br>
                            <input type="text" id="insurancetype" name="insurancetype" required>
                        </div>
                    </div>
                        <br>
                        <div class="bottom-text">    
                    <p>By creating an account you agree to our <a class="terms" href="#">Terms & Privacy</a>.</p>
                    </div>
                    <input type="checkbox" name="agree" class="checkbox">
                    <label for="agree" >I certify that the above information is true and that I agree to the terms & conditions mentiond in the insurance policy statement of the company.</label><br>
                        <br>
                        <button type="submit">Register</button>
                    </form>

                    
                </div>
            </div>
            <?php include '../partials/footer-index.php' ?>
          
            



    </body>
</html>
