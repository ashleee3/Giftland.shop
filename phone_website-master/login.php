<?php

include 'authenticate.php';



error_reporting(0);

if (isset($_SESSION['firstname'])) {
    header("Location: dashboard.php");
}

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM signup WHERE email='$email' AND userpassword='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		//$_SESSION['username'] = $row['username'];
		header("Location: dashboard.php");
        echo "Login successful";
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

// add html here
