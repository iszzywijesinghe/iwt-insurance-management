<!DOCTYPE html>
<html>
    <head>
        <title>Insurance Types</title>
        <link rel="stylesheet" type="text/css" href="../asserts/css/insurance-type.css">
        <link rel="stylesheet" type="text/css" href="../asserts/css/style-nav-h.css">
        <link rel="stylesheet" type="text/css" href="../asserts/css/footer-new.css">
        <link rel="stylesheet" type="text/css" href="../asserts/css/types-management.css">
    </head>

    <body>
    <?php include '../partials/nav-bar-h.php' ?>

    <?php
    include ("../services/insurance-types-service.php");
    include ("../utils/url-helper.php");

    if (isset($_POST['Submit'])) {

        $cus_nic = $_POST['customer_nic'];
        $vehicle_no = $_POST['vehicle_no'];
        $insurance_type = $_POST['ins_type'];
        $price = $_POST['value'];
        $description = $_POST['message'];

        addinsuranceTypes($cus_nic, $vehicle_no, $insurance_type, $price, $description);

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

        <div class="bodycon">
            <h1 class="heading">Insurance Types</h1>
            <h3 class="subhead">Third - Party Insurance</h3>

            <ul>
                <li>Under the third party insurance system, you are entitled to a life insurance up to 50,000 rupees and to get this offer, you must renew the insurance on the due date. The benefit will go to the successor nominated by the policyholder.</li><br>
                <li>If the policyholder is hospitalized in an accident on the roads that registered on Road Development Authority (RDA), a maximum allowance of up to 100,000 rupees will be received and the renewal of the insurance on time will also be considered here.</li><br>
                <li>You get a narrow range of benefits under third party insurance and switch to full coverage insurance to get more attractive and profitable offers.</li><br><br>
            </ul>
            
            <h3 class="subhead">Full Coverage Insurance</h3>
            <ul>
                <li>In the event of an accident, compensation is received and paid according to the insurance policy and when you file a claim for compensation, it must be certified by your insurance agent and you must renew the insurance on time.</li><br>
                <li>All your compensation claims will be considered and the compensation will be credited to your account within a maximum of 14 days. If one compensation claim is rejected, you will have the opportunity to re-upload that compensation claim up to 2 times with correct images and claim compensation.</li><br>
                <li>The value of the vehicle to be insured increases by 10% every year and the amount you have to pay in premium increases accordingly. You can choose to pay the premium annually or quarterly or monthly as per your choice.</li><br>
                <li>After the annual expiry of the insurance you will get free insurance for 14 days from the expiry date.</li><br>
                <li>Our telephone lines are open 24 hours a day, 365 days a year for you and your insurance agent will come to you as soon as an accident occurs and give you the advice you need.</li><br>
             </ul>
             </div>
             <div class="new-form">
             <div class="middle">
		<div class="form-container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
			<h2>Select Your Insurance Type</h2>

				<div class="form-group-ins">
					<label for="name">Customer NIC:</label>
					<input type="text" id="customer_nic" name="customer_nic" required>
				</div>

				<div class="form-group">
					<label for="name">Vehicle No.:</label>
					<input type="text" id="vehicle_no" name="vehicle_no" required>
				</div>

                <div class="form-group">
					<label for="name">Insurance Type:</label>
					<select name="ins_type" id="ins_type" required>
						<option value="" disabled selected>Select Insurance Type</option>
						<option value="full">Full</option>
						<option value="third_party">Third Party</option>
					</select>
				</div>

				<div class="form-group">
					<label for="name">Value:</label>
					<input type="text" id="value" name="value" required>
				</div>

				<div class="form-group">
					<label for="name">Message:</label>
					<input type="text" id="message" name="message" required>
				</div>

				<div class="button">
					<button name="Submit" type="submit">Submit</button>
				</div>
			
			</form>
		</div>
		</div>

		        
             </div>

<!--footer container-->
<?php include '../partials/footer-new.php' ?>
    </body>
</html>