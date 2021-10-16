<?php

$conn = mysqli_connect(***LOGIN_REDACTED***);

if (isset($_POST["name"])) {	
	$name = mysqli_real_escape_string($conn, $_POST["name"]);
	$age = mysqli_real_escape_string($conn, $_POST["age"]);
	$role = mysqli_real_escape_string($conn, $_POST["role"]);
	$email = mysqli_real_escape_string($conn, $_POST["email"]);
	$phone = mysqli_real_escape_string($conn, $_POST["phone"]);
	$eName = mysqli_real_escape_string($conn, $_POST["eName"]);
	$ePhone = mysqli_real_escape_string($conn, $_POST["ePhone"]);
	$gender = mysqli_real_escape_string($conn, $_POST["gender"]);
	$shirt = mysqli_real_escape_string($conn, $_POST["shirt"]);
	$satEvent = mysqli_real_escape_string($conn, $_POST["satEvent"]);
	$sunEvent = mysqli_real_escape_string($conn, $_POST["sunEvent"]);
	$specialComments = mysqli_real_escape_string($conn, $_POST["specialComments"]);
	
	$query = "INSERT INTO registrants (full_name, age, role, email, phone, emergency_name, emergency_phone, gender, shirt_size, saturday_event, sunday_event, special_comments)
			VALUES ('$name', '$age', '$role', '$email', '$phone', '$eName', '$ePhone', '$gender', '$shirt', '$satEvent', '$sunEvent', '$specialComments')";
	
	if (mysqli_query($conn, $query)) {
		echo "User added successfully!";
	} else {
		echo "Error: ". mysqli_error($conn);
	}
}
?>
