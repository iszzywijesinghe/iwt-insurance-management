<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register New Vehicle</title>
        <link rel="stylesheet" href="../asserts/css/Regstylesheet.css">
    </head>
    <body>
            <!--navbar container-->
            <div class="navbar_container"> </div>

            <!--image container-->
            <div class="img_container"> 
                <img class="car_image" src = "../asserts/img/register image.png">
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
                            <label class="lable_name"  for="FullName">Full Name(In block capitals): </label>
                            <input  type="text" id="FullName" name="FullName" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="owner'sNICno">Owner's NIC No.: </label>
                            <input type="text" id="owner'sNICno" name="owner'sNICno" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name" for="vehicleNo">Vehicle No.: </label>
                            <input type="text" id="vehicleNo" name="vehicleNo" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name" for="Engineno">Engine No.: </label>
                            <input type="text" id="Engineno" name="Engineno" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name" for="chassisno">Chassis No.: </label>
                            <input type="text" id="chassisno" name="chassisno" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="vehicletype">Vehicle Type: </label>
                            <input type="text" id="vehicletype" name="vehicletype" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="vehiclemodel">Vehicle Model: </label>
                            <input type="text" id="vehiclemodel" name="vehiclemodel" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="YOM">Year of Manufactured(YOM): </label>
                            <input type="text" id="YOM" name="YOM" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="vehiclenumber">Vehicle Number: </label>
                            <input type="text" id="vehiclenumber" name="vehiclenumber" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="vehiclevalue">Vehicle Value: </label>
                            <input type="text" id="vehiclevalue" name="vehiclevalue" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="insurancetype">Insurance Type(Third Party/Full): </label>
                            <input type="text" id="insurancetype" name="insurancetype" required>
                        </div>
                    </div>
                        <br>
                        
                    <p>By creating an account you agree to our <a class="terms" href="#">Terms & Privacy</a>.</p>
                    
                    <input type="checkbox" name="agree" class="checkbox">
                    <label for="agree" >I certify that the above information is true and that I agree to the terms & conditions mentiond in the insurance policy statement of the company.</label><br>
                        <br>
                        <br>
                        <button type="submit">Register</button>
                    </form> 
                </div>
            </div>

            <!--footer container-->
            
                <footer id="myfooter">
                    <div class="containerf">
                        <h3 class="footerhead">MotorGurad Insurance (PVT) Ltd</h3>
                        <h5 class="footerbody">22/B-402, Bank of Ceylon Mawatha, Colombo.</h5>
                        <h5 class="footerbody">+94 77 333 4444/ +94 112 333 444</h5>
                        <h5 class="footerbody">info@motoguard.insurance.lk</h5>
                        <div class="footlogo">
                                <img src="image/logo blue.png" alt="logo">
                        </div>
                    </div>
                    <div class="containerf2">
                        <h6>All Right Reserved. Develop and Maintain by MotorGuard Insurance IT</h6>
                    </div>
            



    </body>
</html>
