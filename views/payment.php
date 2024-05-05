<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name=" viewport" content="width=device-width, initial-scale=1.0">
	<title> Payment Page </title>
	<link rel="stylesheet" href="../asserts/css/payment-styles.css">
</head>

<body>
	<div class="dashboard">
		<div class="Payment Page">
			<h2>Payments</h2>
		</div>
		<div class="form-container">
			<form action="#" method="post">
				<div class="form-group">
					<label for="name">Claim Id</label>
					<input type="text" id="name" name="name" required>
				</div>

				<div class="form-group-ins">
				<label for="name">Vehicle No</label>
					<input type="text" id="name" name="name" required>
				</div>

				<div class="form-group">
					<label for="name">Card Holder's Name</label>
					<input type="text" id="name" name="name" required>
				</div>

				<div class="form-group">
					<label for="name">Card Number</label>
					<input type="text" id="name" name="name" required>
				</div>

				<div class="form-group">
					<label for="name">CVV</label>
					<input type="text" id="name" name="name" required>
				</div>

				<div class="form-group">
					<label for="name">Expire Date</label>
					<input type="date" id="name" name="name" required>
				</div>

				<div class="button">
					<button type="submit">Pay</button>
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