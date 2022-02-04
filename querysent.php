<?php

if(isset($_POST))
{

	$fullname=$_POST['fullname'];

	$mail=$_POST['mail'];

	$query=$_POST['query'];
}

	$conn = mysqli_connect("localhost","root","","shop");
	$sql = "INSERT INTO contact(cont_name,cont_email,query) VALUES('$fullname','$mail', '$query')";
	if($conn->query($sql) === TRUE) {
    	echo "Your query was successfully sent!";

	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();

	?>

	