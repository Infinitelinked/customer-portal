<?php
set_time_limit(0);
//swiftmailer plugin code
 require_once 'plugins/swiftmailer-master/lib/swift_required.php';
error_reporting(E_ALL);
	//database connection
	if(isset($_POST['submit']))
	{
		$email=$_POST['fpwd'];
		echo "email id is:".$email."";
		$encoded_email=base64_encode($email);
	
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
		//echo("connected successfully");
		
	    $result = $conn->query("SELECT * FROM login where email_id ='$email'");
	    $num_row = $result->num_rows;
	    echo $num_row;
	    if($num_row==0) 
	    {
		        echo "<script type='text/JavaScript'>
				alert('Not a Registered User.. Register First!!');
				window.location='../../index.html';
				</script>
				";
	    }
	    else
	    {
		        echo "<script type='text/JavaScript'>
				alert('activation link has sent to the corresponding email_id.. please check!!');
				window.location='../../index.html';
				</script>
				"; 
		        include "swiftlib/swiftmailer2.php";
	    } 
	/* echo "Connected successfully";*/ 
	$conn->close();
}
?>