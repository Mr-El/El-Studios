<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$character = $_POST['character'];
	$ammount = $_POST['ammount'];
	$paypal = $_POST['paypal'];
	$description = $_POST['description'];

	$myemail = "mrel@elstudios.org";
	$subject = "Message from: $name";
	$body = "Mr. El, we have recieved a commision: \n\n
			Name: $name \n
			Email: $email \n
			Character: $character \n
			Ammount: $ammount \n
			Paypal: $paypal \n
			Description: $description \n
			Reference: $reference \n\n\n
			
			This was submitted on: $date";

	$header = "From: $email \r\n";
	

	$result = mail($myemail, $subject, $body, $header);

	if (!$result) {
		echo "We're sorry the message did not send!";
	} else {
		echo "Mail succesffuly sent!";
	}
    

	/*$server = "localhost";
	$username = "mrel";
	$password = "halo-2511";
	$database = "el_commisions";

	$conn = new mysqli($server, $username, $password, $database);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "insert into Commisions (Comm_ID)"*/
?>
