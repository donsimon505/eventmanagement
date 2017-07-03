<!DOCTYPE html>
<html>
<head>
	<title>Leadership Camp Registration</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>

		<div class="register_section">
				
			<div class = "register_form">
				<form action="confirmation.php" method="post">
					<div class="login_header">
						<h1>CYI Leadership Camp 2017</h1>
						<h3>Please fill in this form</h3>
						<br>
					</div>
					
					<div class="input_elements">
					<h4>Status</h4>
					<input type="radio" name="status" value="member"/> <em>Camper(Member)</em>
					<br>
					<input type="radio" name="status" value="non_member"/> <em>Camper(Non Member)</em>
					<br>
					<input type="radio" name="status" value="leader"/> <em>Camper(Leader)</em>
					<br>
					
					<h4>First Name (required*)</h4>
					<input type="text" name="f_name" placeholder="First Name" required>
					<br>
					
					<h4>Middle Name (optional)</h4>
					<input type="text" name="m_name" placeholder="Middle Name">
					<br>
					
					<h4>Last Name (required*)</h4>
					<input type="text" name="l_name" placeholder="Last Name" required>
					<br>
					
					<h4>Email (required*)</h4>
					<input type="text" name="email" placeholder="Email Address" required>
					<br>
					
					<h4>Mobile Number (required*)</h4>
					<input type="text" name="m_number" placeholder="Mobile Number" required>
					<br>
					
					<h4>Whatsapp Number (if different from mobile number)</h4>
					<input type="text" name="w_number" placeholder="Whatsapp Number">
					<br>
					
					<h4>Branch</h4>
					<input type="text" name="branch_name" placeholder="Branch Name">
					<br>
					
					<h4>Is this your first CYI Leadership Camp?</h4>
					<input type="radio" name="decision_1" value="yes"/> <em>Yes</em>
					<br>
					<input type="radio" name="decision_1" value="no"/> <em>No</em>
					<br>
					
					<h4>If No, how many times have you been to camp?</h4>
					<input type="text" name="times_visited" placeholder="">
					<br>
					
					<h4>T-Shirt Size</h4>
					<input type="radio" name="t_shirt" value="small"/> <em>Small</em>
					<br>
					<input type="radio" name="t_shirt" value="medium"/> <em>Medium</em>
					<br>
					<input type="radio" name="t_shirt" value="large"/> <em>Large</em>
					<br>
					<input type="radio" name="t_shirt" value="xl"/> <em>X-Large</em>
					<br>
					<input type="radio" name="t_shirt" value="xxl"/> <em>XX-Large</em>
					<br>
					
					<h4>What food(s) don't you eat?</h4>
					<input type="text" name="food" placeholder="">
					<br>
					
					<h4>What are your expectations for camp?</h4>
					<textarea name="expectations" rows="5" cols="35" placeholder="Type Here"></textarea><br/>
					<br>
					
					<button>SUBMIT</button>
					
					</div>
				</form>
				
			</div>
		
		</div>
		

</body>
</html>