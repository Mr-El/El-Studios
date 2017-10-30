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
			Description: $description \n\n\n
			
			This was submitted on: $date";

	$header = "From: $email \r\n";

	$result = mail($myemail, $subject, $body, $header);

	if (!$result) {
		echo "We're sorry the message did not send!";
	} else {
		echo "Mail succesffuly sent!";
	}
    
	$link = mysql_connect("localhost", "mrel", "halo-2511");
	mysql_select_db("el_commisions");

    while ($id = 0) {
		$id++;
	}

	$send = "insert into Comissions (Comm_ID, Name, Email, Character, Ammount, Paypal, Description, Reference, Date_Requested)
			values ($id, \"$name\", \"$email\", \"$character\", $ammount, \"$paypal\", \"$description\", $reference, \"$dateRequested\")";

	mysql_query($send);
	mysql_close($link);
	/*$sql = "select * from Commisions";
	$result = mysql_query("$sql");
	$row = mysql_fetch_assoc($result);
	mysql_close($link);*/

?>
