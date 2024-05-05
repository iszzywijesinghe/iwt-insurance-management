<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name=" viewport" content="width=device-width, initial-scale=1.0">
	<title> Payment Page </title>
	<link rel="stylesheet" href="../asserts/css/payment-styles.css">
</head>

<body>
	<?php
	include("../services/payment-service.php");

	if (isset($_POST['pay-submit'])) {

		$claimId = $_POST['claim_id'];
		$vehicleNo = $_POST['vehicle_no'];
		$chName = $_POST['cardholders_name'];
		$cNo = $_POST['card_no'];
		$cvv = $_POST['cvv'];
		$cardExpDate = $_POST['expire_date'];

		addPayment($claimId, $vehicleNo, $chName, $cNo, $cvv, $cardExpDate);

		// echo $rate;
		// var_dump($_POST['fb_note']);

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
	<div class="dashboard">
		<div class="Payment Page">
			<h2>Payments</h2>
		</div>
		<div class="form-container">
			<form action="#" method="post">
				<div class="form-group">
					<label for="name">Claim Id</label>
					<input type="text" id="claim_id" name="claim_id" placeholder="Claim Id" required>
				</div>

				<div class="form-group-ins">
					<label for="name">Vehicle No</label>
					<input type="text" id="vehicle_no" name="vehicle_no" placeholder="Vehicle No" required>
				</div>

				<div class="form-group">
					<label for="name">Card Holder's Name</label>
					<input type="text" id="cardholders_name" name="cardholders_name" placeholder="Card Holder's Name" required>
				</div>

				<div class="form-group">
					<label for="name">Card Number</label>
					<input type="text" id="card_no" name="card_no" placeholder="XXXX-XXXX-XXXX-XXXX" required>
				</div>

				<div class="form-group">
					<label for="name">CVV</label>
					<input type="text" id="cvv" name="cvv" placeholder="XXX" required>
				</div>

				<div class="form-group">
					<label for="name">Expire Date</label>
					<input type="text" id="expire_date" name="expire_date" placeholder="mm/yy" required>
				</div>

				<div class="button">
					<button type="submit" name="pay-submit">Pay</button>
				</div>
				<div class="img_payment_container">
					<img class="img_payment" src="../asserts/img/pay_amex.jpg ">
					<img class="img_payment" src="../asserts/img/pay_mastercard.jpg">
					<img class="img_payment" src="../asserts/img/pay_visa.png">
					<img class="img_payment" src="../asserts/img/pay_discover.jpg">
				</div>
			</form>
		</div>
	</div>
</body>

</html>