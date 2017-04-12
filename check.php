<?php
	session_start();
	    if(!isset($_SESSION['login'])) 
        header('Location: login.php');

	$fields = array(
		'username' => $_POST['username'],
		'password' => $_POST['password']
	);
	$data_string = json_encode($fields);
	//open connection
	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, "http://103.18.7.212:32784/users/login");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch,CURLOPT_POSTFIELDS, $data_string);
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	//execute post
	$result = curl_exec($ch);
	if(strlen($result) > 0){
		$obj = json_decode($result);
		$_SESSION['login']  = $obj->{'staff'}->{'authcode'};
		return header('Location: choose.php');
	}
	else return header('Location: login.php');
	//close connection
	curl_close($ch);
?>