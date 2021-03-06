<?php
include('contactForm.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Help</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Cheyenne">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<!-- <script>
		$(document).ready(function(){
		  $('.click').click(function(){
			$('.popup_box').css("display", "block");
		  });
		  $('.btn1').click(function(){
			$('.popup_box').css("display", "none");
		  });
		});
	</script> -->
</head>

<body>
	<h1 class="display-3 text-center">Contact Us</h1>
	<p class="lead text-center">Drop us an email below and we will get back to you as soon as possible.</p>
	<form enctype="text/plain" class="helpform" action="contact.php" method="POST" name="emailForm">
		<div class="example-container">
			<div class="form-group">
				<label for="fullName">Full name:</label><br>
				<input type="text" class="form-control" id="fullName" name="Name" placeholder="Insert full name here..." size="30" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label><br>
				<input type="email" class="form-control" id="email" name="Email" placeholder="Insert your email here..." required>
			</div>
			<div class="form-group">
				<label for="fullName">Phone Number:</label><br>
				<input type="text" class="form-control" id="phone" name="Phone" placeholder="Insert phone number here..." size="20" required>
			</div>
			<div class="form-group">
				<label for="fullName">Company Name:</label><br>
				<input type="text" class="form-control" id="company_name" name="Company" placeholder="Insert company name here..." size="30" required>
			</div>
			<div class="form-group">
				<label for="inputInterest">Interest</label>
				<select id="inputInterest" name="Interest" class="form-control">
					<option selected value="Design">Design</option>
					<option value="System">System</option>
					<option value="Digital Marketing">Digital Marketing</option>
					<option value="IOT">IOT</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="msg">Comments</label><br>
			<textarea id="msg" rows="4" cols="100" name="Comments" placeholder="Insert comments here..." required></textarea>
		</div>

		<button class="click" type="submit" name="submit_contact">Submit</button>
		<!-- <div class="popup_box">
			<i class="fas fa-check"></i>
			<h1>Your Form Has Been Sent!</h1>
			<p>Thank You for submitting your form! Looking forward to work with you in the future</p>
			<div class="btns">
			  <a href="#" class="btn1">Exit</a>
			</div>
		  </div> -->
	</form>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>



</body>

</html>