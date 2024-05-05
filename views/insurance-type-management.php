<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name=" viewport" content="width=device-width, initial-scale=1.0">
	<title> Insurance Types Management Page </title>
	<link rel="stylesheet" href="../asserts/css/types-management.css">
</head>

<body>
		<div class="Insurance Types Management Page">
			<h2>Insurance Types Management</h2>
		</div>
		<div class="form-container">
			<form action="#" method="post">

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
	
</body>

</html>