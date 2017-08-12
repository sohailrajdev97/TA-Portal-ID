<?php
session_start();
require_once(__DIR__ . "/google-api-php-client-2.2.0/vendor/autoload.php");
require_once(__DIR__ . "/../includes/functions.php");

header("Content-Type: application/json");
$response = array();

$client = new Google_Client(['client_id' => "289322729020-s3kuiemg06568d5n0ehlmp1e1dmdstra.apps.googleusercontent.com"]);
$payload = $client->verifyIdToken(prep($_GET['gToken']));
if ($payload) {
	$userid = $payload['sub'];
	if(isset($payload['hd']) && $payload['hd'] == "hyderabad.bits-pilani.ac.in"){
		$_SESSION['studentMail'] = $payload['email'];
		$_SESSION['studentName'] = $payload['name'];
		$response['status'] = 200;
		$response['message'] = "Logged In";
		echo json_encode($response);
	} else {
		$response['status'] = 300;
		$response['message'] = "Please use you BITS Mail only";
		echo json_encode($response);
	}
	
} else {
	$response['status'] = 300;
	$response['message'] = "Invalid Token";
	echo json_encode($response);
}

?>