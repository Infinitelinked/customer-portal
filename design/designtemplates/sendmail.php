<?php
set_time_limit(0);
//swiftmailer plugin code
 require_once 'plugins/swiftmailer-master/lib/swift_required.php';
error_reporting(E_ALL);
	//database connection
	if(isset($_POST['submit']))
	{
		$email=$_POST['emailid'];
		//echo "Email_id of user".$email."";
		$encoded_email=base64_encode($email);
		//echo "encoded email id:".$encoded_email."";
		//echo $email;
		
	
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
	/* echo "Connected successfully"; */
	
	$result = $conn->query("SELECT * FROM login where email_id ='$email'");
	$num_row = $result->num_rows;
	echo $num_row;
	if($num_row==0) 
	{
		$insert = "INSERT INTO login (email_id) VALUES('" . $email . "')";
		$conn->query($insert);
		echo "<script type='text/JavaScript'>
				alert('activation link has sent to the corresponding email_id.. please check!!');
				window.location='../../index.html';
				</script>
				";
		//$last_id = $conn->insert_id;
		//echo ($last_id);
		//echo "New record has id: " . mysqli_insert_id($conn); 
		include "swiftlib/swiftmailer.php";
	}
	else
	{
		$message = "User Email is already in use.";	
		echo $message;
	}
	
$conn->close();
}
?>