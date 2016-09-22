<?php 
$your_email ='vepanjeribhaskar@gmail.com';// <<=== update to your email address

session_start();
$errors = '';
if(isset($_POST['submit']))
{

	///------------Do Validations-------------
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	}
	
	if(empty($errors))
	{
		
		header('Location: thank-you.html');
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>contact us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ChessCloud.com</title>
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
</style>	
<!-- a helper script for vaidating the form-->
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>	

</style>	
<!-- a helper script for vaidating the form-->
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>	

<link rel="stylesheet" type="text/css" href="css/chess.css">
<link rel="stylesheet" href="css/form.css" type="text/css"/>
<script type="text/javascript" src="js/form.js"></script>
<!--<script type="text/javascript">
		H5F.listen(window,"load",function () {
			H5F.setup(document.getElementById("signup"));
		},false);
	</script>-->
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="js/jquery.wheelmenu.js"></script>
  <style>
   
    
    .wrapper {
    	height: auto !important;
    	height: 100%;
    	margin: 0 auto; 
    	overflow: hidden;
    }
    
    a {
      text-decoration: none;
    }
    
    
   
    
    .pointer {
      color: #34495e;
      font-family: 'Pacifico', cursive;
      font-size: 22px;
      margin-top: -15px;
    }

    .wheel-button, .wheel-button:visited {
      line-height: 35px;
      font-weight: bold;
      font-size: 36px;
      background: #df4727; 
      padding: 10px 11px;
      text-align: center;
      border-radius: 50px;
      width: 35px;
      height: 35px;
      color: white;
      display: block;
      margin: 70px auto 20px;
      border: 3px solid #92311e;
      box-shadow: 0 1px 2px rgba(0,0,0,0.25);
      -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.25);
      -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.25);
    }

    .wheel-button:hover{ 
      color: white;
    }
    
    .wheel-button.ne {
      border-color: white;
      background: #1ABC9C;
      color: #34FFFF;
      position: absolute;
      bottom: 10px;
      left: 10px;
    }
    
    .wheel-button.nw {
      border-color: white;
      background-color: #E67E22;
      color: #FFFC44;
      position: absolute;
      bottom: 10px;
      right: 10px;
    }

    .wheel-button span, .wheel span{
      position: relative;
      -moz-transition: all 1s ease;
      -webkit-transition: all 1s ease;
      -o-transition: all 1s ease;
      transition: all 1s ease;
      display: block;
    }

    .wheel-button.active span{
      transform: rotate(135deg);
      -ms-transform: rotate(135deg); /* IE 9 */
      -webkit-transform: rotate(135deg); /* Safari and Chrome */
    }

    .wheel li a, .wheel li a:visited{
      /*background: rgba(0,0,0,0.65);*/
	  
      border-radius: 50px;
      font-weight: bold;
      padding: 10px;
      text-align: center;
      width: 20px;
      height: 20px;
      border: 1px solid black;
      box-shadow: 0 1px 2px rgba(0,0,0,0.25), inset 0 1px 1px rgba(255,255,255,0.5);
      -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.25), inset 0 1px 1px rgba(255,255,255,0.5);
      -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.25), inset 0 1px 1px rgba(255,255,255,0.5);
      color: white;
      -moz-transition: all 0.25s ease;
      -webkit-transition: all 0.25s ease;
      -o-transition: all 0.25s ease;
      transition: all 0.25s ease;
    }

    .wheel li a:hover{
      background: rgba(0,0,0,0.8);
    }

    .main {
      float: left;
      width: 100%;
      margin: 0 auto;
    }
    
    .reload, .btn{
      display: inline-block;
      border: 4px solid #FFF;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      background: rgba(255,255,255, 0.75);
      display: inline-block;
      line-height: 100%;
      padding: 0.7em;
      text-decoration: none;
      opacity: 0.7;
      color: #555;
      width: 100px;
      line-height: 140%;
      font-size: 17px;
      font-family: open sans;
      font-weight: bold;
    }
    .reload:hover, .btn:hover {
      background: white;
    }
    .btn {
      width: 200px;
    }
    .btns {
      width: 230px;
      margin: 50px auto;
    }
    .credit {
      text-align: center;
      color: #999;
      padding: 10px;
      margin: 0 0 40px 0;
      background: rgba(255,255,255,0.25);
      float: left;
      width: 100%;
    }
    .credit a {
      color: #555;
      text-decoration: none;
      font-weight: bold;
    }
	</style>
	<link rel="stylesheet" type="text/css" href="css/wheelmenu.css"/>
	<script>
	  $(document).ready(function(){
			$(".wheel-button").wheelmenu({
        trigger: "hover",
        animation: "fly",
        animationSpeed: "fast"
      });
		});
		
	</script>
</head>
<body>
<div class="header">
<div class="logo"><a style="text-decoration:none;color:olivedrab;font-size:35px;font-weight:bold"" href="index.html">hesscloud</a></div>
	<div class="hspace1"></div>

</div>
	</div>
	<div class="space1"></div>
	<div class="header_menu">
		<a href="whychess.html" style="text-decoration:none;color:black;"><div class="h_m1">Chess Need</div></a>
		<a href="history.html" style="text-decoration:none;color:black;"><div class="h_m2">History</div></a>
		<a href="instruction.html" style="text-decoration:none;color:black;"><div class="h_m3">Instructions</div></a>
		<a href="video.html" style="text-decoration:none;color:black;"><div class="h_m4">videos</div></a>
		<a href="game.html" style="text-decoration:none;color:black;"><div class="h_m5">Let's Play</div></a>
		<a href="contactus.html" style="text-decoration:none;color:black;"><div class="h_m6"  style="background-color: #6b8e23;
    border-radius: 25px;
    color: white;">Contact Us</div></a>
	</div>
<! html for header part end   !>
<div class="top">
<div class="space01"></div>

<div>
<div class="space011"></div>
<div class="heading"> 
</div>


</div>
<div class="space02"></div>
<div>
<div class="textspace2"></div>


<div class="main"> 
<div class="space1"></div>

<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="wrapper">
    
	  
	  
      
      
    
      
      
  </div>
			  

    
  <div  class="form" style="float:">
    		 <form id="signup" name="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="post" class="box login form" >
  
  <fieldset>
   <legend></legend>
   <ol>
    <li>
     <label for="firstname">player Name *</label> 
     <input type="text" id="companyname" name="companyname" placeholder="Name of player" required />
    </li>
    <li>
    <label for="lastname">First Name *</label> 
    <input type="text" id="lastname" name="firstname" placeholder="Pls enter your First Name" required />
    </li>
<li>
    <label for="lastname">Last Name *</label> 
    <input type="text" id="lastname" name="lastname" placeholder="Pls enter your Last Name" required />
    </li>
  

    <li>
     <label for="email">Email *</label> 
     <input type="email" id="email" name="email" placeholder="e.g. swapnil@example.com" title="Please enter a valid email" required />
     <p class="validation01">
      <span class="invalid">Please enter a valid email address e.g. swapnil@example.com</span>
      <span class="valid">Your email address is now valid</span>
     </p>
    </li>
    <!--<li>
     <label for="url">Website *</label> 
     <input type="url" name="url" id="url" placeholder="e.g. http://www.html5andcss3.org" title="Please enter a valid URL" required />
     <p class="validation01">
      <span class="invalid">Please enter a valid URL address e.g. http://www.html5andcss3.org</span>
      <span class="valid">Your URL address is now valid</span>
     </p>
    </li>-->

 

    <li>
     <label for="mobile">Mobile *</label> 
     <input type="tel" id="mob" name="mob" pattern="\d{10}" placeholder="Please enter a ten digit phone number" required />
     <p class="validation01">
      <span class="invalid">Plz enter 10 Numbers only e.g. 9999999999</span>
      <span class="valid">Your mobile number is valid</span>
     </p>
    </li>

  <li>
     <label for="address">Address *</label>
     <textarea id="address" name="address" type="text" required></textarea>
    </li>
    
    <li>
     <label for="City">City *</label>
     <input id="city" name="city" type="text" required />
     
    </li>
    
    <li>
     <label for="postcode">Post code *</label>
     <input id="postcode" name="postcode" type="number" min="10001" max="999999" maxlength="6" required />
     <p class="validation01">
      <span class="invalid">Your postcode is out of range between 10001 - 999999</span>
       <span class="valid">Your postcode is in the correct range</span>
     </p>
    </li>

    <li>
     <label for="state">Country</label>
     <select name="country" id="country"  required="required">
     <option value="-1">--Select Country--</option>
      <option>Africa</option>
      <option>America</option>
      <option>Australia</option>
      <option>China</option>
      <option>England</option>
      <option>Japan</option>
      <option>India</option>
      <option>Indonesia</option>
     </select>
    </li>




   
   </ol>
  </fieldset>
<div style="width:77%;height:152px;float:left;"></div>
<?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>
<div id='contact_form_errorloc' class='err'></div>

<p style="width:1100px;">
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label>
<input id="6_letters_code" name="6_letters_code" type="text"><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</p>

  <input type="submit" value="Submit" style="margin-right:-260px;background:#498EA5; margin-top:0px; color:#FFF"/>
 </form>
</div>      
</div>


<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact_form");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();

frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

</body>
</html>
