<!DOCTYPE html>
<html>
<head>

	<!-- Bootstrap -->
	<link href="./lib/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="./lib/js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>

<?php
error_reporting(0);

session_start();
session_set_cookie_params(3600 * 24 * 7);

if (isset($_POST['login'])) {
	$error = array();
		
	if (empty($_POST['username'])) {
		$error[] = 'No username provided';
	} else {
		$username = $_POST['username'];
	}
	
	if (empty($_POST['password'])) {
		$error[] = 'No password provided';
	} else {
		$password = $_POST['password'];
	}
}

$correctusername = 'oomd';
$correctpassword = 'mondeo';

if($username != $correctusername)	{ 
	$error[] = 'Username is incorrect.';
}

if ($password != $correctpassword) {
	$error[] = 'Password is incorrect.';
}

if (empty($error)) {	
	$_SESSION['username'] = $_POST['username'];
		
	echo '<div class="panel panel-success"><div class="panel-heading text-center"><h3>Welcome '.$_SESSION["username"].', you are succesfully logged in.</h3></div></div>';
	header("Refresh: 5; url= page.html");
	die();
} else {
	echo '<div class="panel panel-warning col-sm-6 col-lg-4 box text-center col-md-2 col-md-offset-4">';
	echo '<div class="panel-heading"><h3>The following errors have occurred:</h3></div>';
	foreach ($error as $key => $values) { 
	echo '<div class="panel-body"><h4>'.$values.'</h4></div>';
	}
	echo '</h3></div>';
	header("Refresh: 5; url= index.html");
	die();
}
?>

</body>
</head>