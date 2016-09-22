<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="chess.css">
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<title>History of Chess</title>
<style>
label,a, body 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}
.err
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;
}
.spacecaptcha{width:35%;height:500px;float:left;}
@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);
 
form { max-width:420px; margin:50px auto; }

.feedback-input {
  color:#CC6666;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:#fff;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { background:#CC4949;color:white; }
</style>
</head>

<body>
<! html for header part begins   !> 
<div class="header">
<div class="logo"><a style="text-decoration:none;color:olivedrab;font-size:35px;font-weight:bold"" href="index.html">hesscloud</a></div>
	<div class="hspace1"></div>

	</div>
	<div class="space1"></div>
	<div class="header_menu">
		<a href="whychess.html" style="text-decoration:none;color:black;"><div class="h_m1">Chess Need </div></a>
		<a href="history.html" style="text-decoration:none;color:black;"><div class="h_m2">History</div></a>
		<a href="instruction.html" style="text-decoration:none;color:black;"><div class="h_m3">Instructions</div></a>
		<a href="video.html" style="text-decoration:none;color:black;"><div class="h_m4">videos</div></a>
		<a href="game.html" style="text-decoration:none;color:black;"><div class="h_m5">Let's Play</div></a>
		<a href="html-contact-form.php" style="text-decoration:none;color:black;"><div class="h_m6"  style="background-color: #6b8e23;
    border-radius: 25px;
    color: white;">Contact Us</div></a>
	</div>
<! html for header part end   !>



<div class="top"> 
 <form name="sentMessage" id="contactForm" action="sendmail.php" method="post" enctype="multipart/form-data" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="feedback-input" placeholder="Your Name *" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="feedback-input" placeholder="Your Email *" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="feedback-input" placeholder="Your Phone *" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="feedback-input" placeholder="Your Message *" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
 
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" >Send Message</button>
                            </div>
                        </div>
                    </form>



 
</body>
</html>