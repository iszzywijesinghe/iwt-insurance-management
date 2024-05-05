<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name=" viewport" content="width=device-width, initial-scale=1.0">
	<title> Insurance Types Management Page </title>

	<link rel="stylesheet" href="../asserts/css/types-management.css">
	<link rel="stylesheet" type="text/css" href="../asserts/css/style-nav-h.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/footer-styles.css">
</head>

<body>

<?php
    include ("../services/insurance-types-service.php");
    

    if (isset($_POST['v-submit'])) {

        $cus_nic = $_POST['cus_nic'];
        $insurance_type = $_POST['insurance_type'];
        $price = $_POST['price'];
        $vehicle_no = $_POST['vehicle_no'];
        $description = $_POST['description'];

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

		<div class="Insurance Types Management Page">
			<h2>Insurance Types Management</h2>
		</div>

	        <!--image container-->
			<?php include '../partials/nav-bar-h.php' ?>

<div class="image_hover">
	<div class="img_container"> 
		<img class="car_image" src = "../asserts/img/typeimg.png">
	</div>
	<div class="heading1">
	<h2>Insurance Types</h2>
	<h1 class="des">Select Your Guard</h1>
	 </div>
</div>

<div class="middle">
		<div class="form-container">
			<form action="#" method="post">
			<h2>Insurance Types Management</h2>

				<div class="form-group-ins">
					<label for="name">Customer NIC:</label>
					<input type="text" id="name" name="name" required>
				</div>

				<div class="form-group">
					<label for="name">Vehicle No.:</label>
					<input type="text" id="name" name="name" required>
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
					<input type="text" id="name" name="name" required>
				</div>

				<div class="form-group">
					<label for="name">Message:</label>
					<input type="text" id="name" name="name" required>
				</div>

				<div class="button">
					<button type="submit">Submit</button>
				</div>
			
			</form>
		</div>
		</div>

		        <!--footer container-->
				<div class="footer-container">
            <?php include '../partials/footer-index.php' ?>
        </div>
	
</body>

</html>