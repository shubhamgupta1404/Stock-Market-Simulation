<?php
session_start();
if (isset($_SESSION['username'])) header('location: home.php');
?>

<html>
	<head>
		<title>Stock Market Simulation</title>
	</head>
	<body>
	
	<table width = "100%" height = "100%">
  <tr>
      <td colspan="100%" align = "center"><font face = "arial" size = "10">&nbsp;</font></td>
  </tr>
  <tr>
      <td colspan="100%" align = "center"><font face = "arial" size = "10">Stock Market Simulation</font></td>
  </tr>
  <tr>
      <td colspan="100%" align = "center"><font face = "arial">ACM, BITS Pilani &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   |  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Economics And Finance Association</font></td>
  </tr>
  <tr>
      <td>&nbsp;&nbsp;</td> 
      <th align="right"><p><a href="register.php"> <img alt="Login" src="images/contact-new.png" style="width: 138px; height: 138px;" /> </a> </p><p>Register&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td> 
      <td width="4%"><center><img alt="Login" src="images/LineSeparator.png" style="width: 38px; height: 500px;" /></center></td> 
      <th align="left"><p><a href="login.php"> <img alt="Login" src="images/login-big.png" style="width: 138px; height: 138px;" /> </a></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</p></td> 
      <td>&nbsp;&nbsp;</td>
  </tr>
  <tr>
      <td colspan="100%" align = "center"><font face = "arial" size = "10">&nbsp;</font></td>
  </tr>
</table>
		
	</body>
</html>

