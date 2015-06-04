<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SMS</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->

</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<a href="index.html"><img src="images/shared/logo.png" width="156" height="40" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
	<div id="forgotbox-text">Just type your mail address and we will send you your password.</div>
		<form id="formElem" name="formElem" action="sendmail.php" method="post">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>E-mail</th>
			<td><input type="text" class="login-inp" name="email" id="email" /></td>
		</tr>
		
		<tr>
			<th></th>
			<td><button id="registerButton" type="submit" class="submit-login" >Submit</button></td>
		</tr>
		<tr>
		</tr>
		</table>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	
	
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>
