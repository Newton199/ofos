<!DOCTYPE html>
<html>
<head>
	<title>Design</title>
	<style type="text/css">
        *
        {
            margin:0px;
        }
		.maindiv
		{
			display: flex;
			
		}
		.form
		{
			border: 1px solid black;
			padding: 20px;
			margin-left: 30%;
			margin-right:30%;
			background: blanchedalmond;
		}
		.header
		{
			text-align: center;
			font-family:arial;
            border:1px solid black;
            background:gray;
		}
		#txt
		{
			font-size: 20px;
			font-family: bold;
		}
		#fname,#lname,#password, #cpassword,#email,#phone
		{
			height: 30px;
			width: 400px;
		}
		.btn
		{
			background: blue;
			color: white;
			border: none;
			padding: 7px;
			width: 100%;
			border-radius: 4px;
		}

		
	</style>
	<script type="text/javascript" defer src="register-validation.js"></script>
</head>
<body>
<div><h1 class="header">Registration form</h1></div>
	<form class="form" action="#" method="POST">
		
		<div class="maindiv">
			<div>
				<div id="txt">User Name</div>
				<input type="text" id="fname" name = "name" required>
				<div><span id="message1" style="color: red; font-size: x-small;"></span></div>

				<div id="txt">Address</div>
				<input type="text" id="email" name = "address">
				<div><span id="message2" style="color: red; font-size: x-small;" required></span></div>

				<div id="txt">Email</div>
				<input type="text" id="password" palceholder="yoy@yourname.com" name = "email" required>
				<div><span id="message3" style="color: red; font-size: x-small;"></span></div>	
							
				<div id="txt">Password</div>
				<input type="password" id="lname" name = "password">
				<div><span id="message4" style="color: red; font-size: x-small;" required></span></div>

				<div id="txt">Confirm Password</div>
				<input type="password" id="phone" name = "con_password">
				<div><span id="message5" style="color: red; font-size: x-small;" required></span></div>

				<div id="txt">Phone-No</div>
				<input type="number" id="cpassword" name ="phone">
				<div><span id="message6" style="color: red; font-size: x-small;" required></span></div>
				
				<div id = "txt">Gender</div>
				Male <input type="radio" name="gender" id="txt" name = "getgender" value = "male" required>
				Female <input type="radio" name="gender" id="txt" name = "getgender" value = "female" required>
				<div><span id="message6" style="color: red; font-size: x-small;"></span></div>		
			</div>

		</div><br><br>


		<button class="btn" onclick="validation();" name = "sign_up">sign up</button>
		<!-- <button class="btn" name = "sign_up">sign up</button> -->
	</form>

	<?php
		include 'connection.php';

		
		if(isset($_POST['sign_up']))
		{
			$name = $_POST['name'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$conpassword = $_POST['con_password'];
			$phone = $_POST['phone'];
			$gender = $_POST['gender'];
			
			// echo $name." ".$address." ".$email." ".$password." ".$conpassword." ".$phone." ".$gender;

			$query = "INSERT INTO user_tbl(name,address,email,password,phone_no,gender)VALUES('$name','$address','$email','$password','$phone','$gender')";

			$result = mysqli_query($con,$query);

			if($result)
			{
				header('location:order_login.php');
			}
			

		}


	?>

</body>
</html>