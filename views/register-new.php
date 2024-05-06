<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        
        <link rel="stylesheet" href="../asserts/css/Regstylesheet.css">
        <link rel="stylesheet" type="text/css" href="../asserts/css/style-nav-h.css">
        <link rel="stylesheet" type="text/css" href="../asserts/css/footer-new.css">
    </head>
    <body>

    <?php
    include ("../services/register-service.php");

    if (isset($_POST['Register'])) {

        $customerNic = $_POST['CustomerNic'];
        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $email= $_POST['email'];
        $houseno = $_POST['Houseno'];
        $streetno = $_POST['streetno'];
        $city= $_POST['city'];
        $gender= $_POST['Gender'];
        $contactno= $_POST['contactno'];

        adduser($customerNic, $firstname, $lastname,	$email,	$houseno, $streetno, $city, $gender, $contactno);

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







            <!--navbar container-->
            <?php include '../partials/nav-bar-h.php' ?>

            <!--image container-->
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
            <div class="center_container1">
                <div class="form_container">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                        <h1>Register Now!!!</h1>
                        <p class="intro-paragraph">Welcome to our MotorGuard Vehicle Insurance Company. 
                            With our user-friendly interface, registering your new vehicle is a breeze. 
                            Simply fill out the form below and enjoy peace of mind on the road.</p>
                            
                        <div class="form_only">
                        <div class="form-group">
                        <div class="head">
                                <span> Customer Details </span><br><br>
                            </div>
                            <label class="lable_name"  for="CustomerNic">Customer NIC : </label><br>
                            <input  type="text" id="CustomerNic" name="CustomerNic" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name"  for="FirstName">First Name : </label><br>
                            <input type="text" id="FirstName" name="FirstName" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name" for="LastName">Last Name : </label><br>
                            <input type="text" id="LastName" name="LastName" required>
                        </div><br>
                        <div class="form-group">
                            <label class="lable_name" for="email">Email : </label><br>
                            <input type="email" id="email" name="email" required>
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
                        <div class="form-group">
                            <label class="lable_name"  for="contactno">contactno : </label><br>
                            <input type="number" id="contact" name="contactno" required>
                        </div><br>
                       
                    </div>
                        <br>
                        <div class="bottom-text">    
                    <p>By creating an account you agree to our <a class="terms" href="#">Terms & Privacy</a>.</p>
                    </div>
                    <input type="checkbox" name="agree" class="checkbox">
                    <label for="agree" >I certify that the above information is true and that I agree to the terms & conditions mentiond in the insurance policy statement of the company.</label><br>
                        
                    
                        <br>
                        <button name="Register" type="submit">Register</button>
                    
                </div>
                </form> 
            </div>

           
   <!--footer container-->
   <?php include '../partials/footer-new.php' ?>
            



    </body>
</html>
