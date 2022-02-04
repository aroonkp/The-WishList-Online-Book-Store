<?php
if(isset($_POST))
{
  $bookid= $_POST['bookid'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $gender=$_POST['gender'];
  $number=$_POST['number'];
  $email=$_POST['email'];
  $add1=$_POST['add1'];
  $add2=$_POST['add2'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $pin=$_POST['pin'];
  $uid=$_POST['uid'];
  $username=$_POST['username'];
  $bookname=$_POST['bookname'];
  $amount=$_POST['amount'];
  $bookname=myUrlEncode($bookname);
  $add1=myUrlEncode($add1);
  $add2=myUrlEncode($add2);
}
?>
<?php
function myUrlEncode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", " ", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($entities, $replacements, urlencode($string));
}
?>
<?php
$conn = mysqli_connect("localhost","root","","shop");
	$sql = "INSERT INTO shipping(b_id,u_id,sf_name,sl_name,ssex,smobile,semail,saddress1,saddress2,stown,sstate,spin) VALUES('$bookid','$uid','$firstname','$lastname','$gender','$number','$email','$add1','$add2','$city','$state','$pin')";
	if($conn->query($sql) === TRUE) {
    	echo "Payment Successful! Your order has been placed. ";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>
<?php
      // Account details
      $apiKey = urlencode('aJOo8nc0mC4-QKjRBPhSt4aFSQBgcXLhgBV7UQdwVY');
      
      // Message details
      $numbers = array($number);
      $sender = urlencode('TXTLCL');
      $message = rawurlencode("Hi $firstname, your WishList package has been confirmed. Estimated delievery: 48 hours. For any queries, contact 9876543210");
     
      $numbers = implode(',', $numbers);
     
      // Prepare data for POST request
      $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
      // Send the POST request with cURL
      $ch = curl_init('https://api.textlocal.in/send/');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      curl_close($ch);
      
      // Process your response here
      // echo $response;
?>
<?php
  $con=mysqli_connect("localhost","root","","shop");
  $sql2="SELECT book_count from book where book_id='$bookid'";
  $res=$con->query($sql2);
  if($res->num_rows>0)
      {
        while($row=$res->fetch_assoc())
        {
          $count=$row["book_count"];
        }
      }
  $count=$count-1;
  $sql3="UPDATE book SET book_count='$count' WHERE book_id='$bookid'";
  if($con->query($sql3)===TRUE)
  {
    echo "Thank you for using WishList!";
  }
  else
  {
     echo "Database error";
  }
  $con->close();
?>    
<html>
<head>
	<title> The WishList | Order Details </title>
</head>
<body>
  <center>
  <div id="content">
	<strong><u><h1>Invoice: </h1></u></strong>
	<u><h2> Shipping Details: </h2></u>
	<h3>Name: <?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
	<h3>Address: <br> <?php echo $add1?>, <?php echo $add2?> , <?php echo $city?> , <?php echo $state?>, <?php echo $pin?></h3>
  <u><h2>Book Details: </h2></u>
  <h3>Book Name: <?php echo $bookname?></h3>
  <h3>Price: Rs.<?php echo $amount?>.00</h3>
  <u><h2> Contact Details: </h2></u>
  <h3>E-mail: <?php echo $email?></h3>
  <h3>Phone Number: <?php echo $number?></h3>
  </div>
  <div id="editor"></div>
<button onclick="printPage()">Print as PDF</button>
  </center>
</body>
</html>
<script>
        function printPage() {
            window.print();
        }
</script>