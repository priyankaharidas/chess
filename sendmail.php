<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$your_email ='yourmail@gmail.com';// <<=== update to your email address
$to = $your_email;
$subject = "New Chess Cloud Contact Form!";
$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
$body = "<html><body>Hi,<br><br><table border='1'>
<tr>
<th>Name:</th>
<th>$name</th>
</tr>
<tr>
<th>Email:</th>
<th>$email</th>
</tr>
<tr>
<th>Phone Number:</th>
<th>$phone</th>
</tr>
<tr>
<th>Message:</th>
<th>$message</th>
</tr>";
$body.="<br>";
$body.="<br>This mail is received from IP:&nbsp;$ip</table></body></html>";

// To send HTML mail, the Content-type header must be set
    $headers  = "MIME-Version: 1.0 \r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $headers .= "from: <$email>\r\n";	
    $headers .= "X-Mailer: PHP 4.x";

    		if (mail($to, $subject, $body,$headers) == true){ ?>

			<script language="javascript" type="text/javascript">
			alert('Your request has been submitted - thank you.');
			window.location = 'index.html';
            </script>
			<?php } else { ?>
			<script language="javascript" type="text/javascript">
			alert('Message not sent. Please, notify to yourmailid.com');
			window.location = 'index.html';
            </script>
			<?php
}
}

?>