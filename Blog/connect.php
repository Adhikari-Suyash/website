<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('sql6.freesqldatabase.com','sql6523172','fdrCqBGawE','sql6523172');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into sql6523172.contact_form(fname, lname, email, phone, message) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssis", $fname, $lname, $email, $phone, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Thank you for the feedback!!!...";
		$stmt->close();
		$conn->close();
?>
 	}