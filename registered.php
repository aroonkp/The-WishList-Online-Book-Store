<?php


if(isset($_POST))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$psw=$_POST['psw'];
	$mail=$_POST['mail'];
}
$conn = mysqli_connect("localhost","root","","shop");
	$sql = "INSERT INTO user(user_fname,user_lname,user_pw,user_email) VALUES('$fname','$lname','$psw','$mail')";
	if($conn->query($sql) === TRUE) {
    	echo "Your account was successfully created! Please log in to continue";

	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>
<center>
<a href="index.php"><h4>Log In</h4></a>


</center>