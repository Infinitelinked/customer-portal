<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CIC password creation</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		
		<style type="text/css">
			body
			{
				margin-top: 10%;
			}
			.login-title
			{
				color: #555;
				font-size: 18px;
				font-weight: 400;
				display: block;
			}
			.form-signin .form-control
			{
				position: relative;
				font-size: 16px;
				height: auto;
				<!-- margin-left:16%; -->
				padding: 10px;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}
			.box
			{
				background-color:#D9D9D9;
				box-sizing: border-box;
				width: 70%;
				height: 70%;
				padding-bottom:100px;
				padding-top:50px;
				box-shadow: 10px 10px 10px #888888;
			}
		</style>
		<script type="text/javascript">
			function validatePass(pwd1, pwd2)
			{
				if (pwd1.value != pwd2.value || pwd1.value == '' || pwd2.value == '')
				{
					pwd2.setCustomValidity('Password incorrect');
				} 
				else 
				{
					pwd2.setCustomValidity('');
				}
			}

		</script>
	</head>
	<body>
		<div class="box container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-offset-4">
					<h1 class="text-center login-title">Create your password here</h1>
					<!-- onsubmit="return checkForm();" -->
						<form class="form-signin" method="post" name="ValidationForm">
							<input type="password" class="form-control" placeholder="Password" name="pwd1" id="pwd1" required autofocus />
							<br>
							<input type="password" title="Please enter the same Password as above" class="form-control" placeholder="ConfirmPassword" name="pwd2" id="pwd2" required autofocus 
							onfocus="validatePass(document.getElementById('pwd1'), this);" 
							oninput="validatePass(document.getElementById('pwd1'), this);" />
							<br>
							<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Create Password" />
						</form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database='customer_info_capture';

		// Create connection
		$conn = new mysqli($servername, $username, $password, $database);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		/* echo "<script type = 'text/JavaScript'>function GetCellValues()
		{
			var paswrd = document.getElementById('pwd1').value; alert(paswrd);
		}
		</script> "; onclick="document.write('<?php //echo GetCellValues() ?>');"*/
		/* if(isset($_GET["w1"]))
		{
			$password=$_GET["w1"];
			echo $password;
		} */
		if(isset($_POST['pwd1']) && isset($_GET['email']))
		{
			$password=$_POST['pwd1'];
			//echo $password;
			$email=$_GET['email'];
			$decoded_email=base64_decode($email);
			//echo $email;
				$update = "UPDATE login SET password = '$password' WHERE email_id = '$decoded_email'";
				$conn->query($update); 
				$conn->close();
				
				echo "<script type='text/JavaScript'>
				alert('password changed successfully!!..');
				window.location='../../index.html';
				</script>
				";
		}
?>	