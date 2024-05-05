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
                            <label class="lable_name"  for="CustomerNic">Customer NIC : </label><br><br>
                            <input  type="text" id="CustomerNic" name="CustomerNic" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="FirstName">First Name : </label><br><br>
                            <input type="text" id="FirstName" name="FirstName" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name" for="LastName">Last Name : </label><br><br>
                            <input type="text" id="LastName" name="LastName" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name" for="email">Email : </label><br><br>
                            <input type="text" id="email" name="email" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name" for="Houseno">House no : </label><br>
                            <input type="text" id="Houseno" name="Houseno" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="streetno">Street no : </label><br>
                            <input type="text" id="streetno" name="streetno" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="city"> City : </label><br>
                            <input type="text" id="city" name="city" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="Gender">Gender : </label><br>
                            <input type="text" id="Gender" name="Gender" required>
                        </div><br>
                       
                    </div>
                        <br>
                        
                    <p>By creating an account you agree to our <a class="terms" href="#">Terms & Privacy</a>.</p>
                    
                    <input type="checkbox" name="agree" class="checkbox">
                    <label for="agree" >I certify that the above information is true and that I agree to the terms & conditions mentiond in the insurance policy statement of the company.</label><br>
                        
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
