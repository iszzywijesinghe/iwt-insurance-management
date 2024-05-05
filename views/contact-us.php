<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet"  href="style.css">
        <link rel="stylesheet" type="text/css" href="../asserts/css/contact-us-styles.css">
        <link rel="stylesheet" type="text/css" href="../asserts/css/style-nav-h.css">
        <link rel="stylesheet" type="text/css" href="../asserts/css/footer-styles.css">
    
    </head>
    <body>

        <!--image container-->
        <?php include '../partials/nav-bar-h.php' ?>

        <div class="image_hover">
            <div class="img_container"> 
                <img class="car_image" src = "../asserts/img/contact.png">
            </div>
            <div class="heading1">
            <h2>Contact Us!</h2>
            <h1 class="des">We Offer You 24Hrs Customer Care</h1>
             </div>
</div>
        <!--middle container-->
        <div class="middle-container">
            <div class="container">
                <div class="container1">
                    <div class="label2">
                        <h2>Contact Us!</h2>
                    </div>
                    <div class="label3">
                        <h3>MotorGaurd Insurance (PVT) LTD</h3>
                        <p class="label4">22/B-402, Bank of Ceylon Mawatha, Colombo.</p>
                        <p>+94 77 333 4444 / +94 112 333 444</p>
                        <p>info@motorguard.insurance.lk</p>
                    </div>
                    <div class="contact_us">
                        <form action="" method="post">
                            <label for="Name">Your Name</label><br>
                            <input type="text" id="name"><br><br>
                            
                            <label for="NIC">Your NIC Number</label><br>
                            <input type="text" id="nic"><br><br>
    
                            <label for="Name">Email</label><br>
                            <input type="text" id="email"><br><br>
    
                            <label for="Name">Contact Number</label><br>
                            <input type="text" id="contact_no"><br><br>
    
                            <label for="Name">Message</label><br><br>
                            <textarea id="message" rows="7" cols="30"></textarea><br>
        
                            <button type="submit">Register</button>
                        </form>
                    </div>
                </div>  
            </div>
        </div>

        <!--footer container-->
        <div class="footer-container">
            <?php include '../partials/footer-index.php' ?>
        </div>


    </body>
</html>