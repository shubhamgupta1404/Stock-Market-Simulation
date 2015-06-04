<?php
include "db1.php";
include('PHPMailer_5.2.1/class.phpmailer.php');

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['college']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['username']) && (mysql_escape_string(trim($_POST['fname'])) != '' ) && (mysql_escape_string(trim($_POST['lname'])) != '' ) && (mysql_escape_string(trim($_POST['college'])) != '' ) && (mysql_escape_string(trim($_POST['gender'])) != '' ) && (mysql_escape_string(trim($_POST['email'])) != '' ) && (mysql_escape_string(trim($_POST['username'])) != '' )) {

$pass = rand(1000000, 9999999);

// Here sets data for email
// $from = 'stockmarketsimulation.2k14@gmail.com';
// $from_name = 'admin(SMS)';
// $to = $mail;
// $toname = $_POST['fname'];
// $subject = '';
// $msg = "Hello ".trim($_POST['fname']).",<br /><br />Thanks for creating an account. Your password for first time login is ".$pass.". Please change the password upon login.<br /><br />Regards,<br />Team, Stock Market Simulation.";
		
// $msg_new = nl2br($msg);	

// $mail             = new PHPMailer();
// $mail->IsSMTP();                                // telling the class to use SMTP
// $mail->Host       = "smtp.gmail.com";           // SMTP server
// $mail->SMTPAuth   = true;        				// enable SMTP authentication    
// $mail->SMTPDebug  = 2;           
// $mail->SMTPSecure = "ssl";                      // sets the prefix to the servier
// $mail->Host       = "smtp.gmail.com";           // sets GMAIL as the SMTP server
// $mail->Port       = 465;	                        // set the SMTP port for the GMAIL server
// $mail->Username   = 'stockmarketsimulation.2k14@gmail.com';           // your GMAIL account
// $mail->Password   = 'niveacream';                 // GMAIL password

// $mail->SetFrom($from, $from_name);
// $mail->AddReplyTo($from, $from_name);
// $mail->Subject = $subject;
// $mail->MsgHTML($msg_new);                 // to send with HTML tags

// $mail->AddAddress($to, $toname);


// if(!$mail->Send()) {
//   echo 'Mailer Error: '. $mail->ErrorInfo;
// } else {
//   echo 'Message sent!';
// }
// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// // Additional headers
// $headers .= 'To: '.trim($_POST['fname']).' '.trim($_POST['email']). "\r\n";
// $headers .= 'From: ACM, BITS Pilani<acm@bits-student.org>' . "\r\n";
// $subject = "Stock Market Simulation, Apogee 2013";
// $message = "Hello ".trim($_POST['fname']).",<br /><br />Thanks for creating an account. Your password for first time login is ".$pass.". Please change the password upon login.<br /><br />Regards,<br />Team, Stock Market Simulation.";
// // Mail it
// mail(trim($_POST['email']), $subject, $message, $headers);

    $result = mysql_query("INSERT INTO `".$db."`.`profile` (`sl`, `fname`, `lname`, `college`, `gender`, `email`, `username`, `password`) VALUES ('1', '".mysql_escape_string(trim($_POST['fname']))."', '".mysql_escape_string(trim($_POST['lname']))."', '".mysql_escape_string(trim($_POST['college']))."', '".mysql_escape_string(trim($_POST['gender']))."', '".mysql_escape_string(trim($_POST['email']))."', '".mysql_escape_string(trim($_POST['username']))."', '".$pass."')");
if ($result) header("location: mailsent.php?p={$pass}");
else if (!$result) $flag = 'username_error';
}
else $flag == 'error';


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Stock Market Simulation</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!--  checkbox styling script -->
<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  

<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>

<!--  styled select box script version 2 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
      $("input.file_1").filestyle({ 
          image: "images/forms/choose-file.gif",
          imageheight : 21,
          imagewidth : 78,
          width : 310
      });
  });
</script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 


<!--  date picker script -->
<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="js/jquery/date.js" type="text/javascript"></script>
<script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/2005',
			endDate:'31/12/2020'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href=""><img src="images/shared/logo.png" width="380" height="90" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<!--  start top-search -->
	<div id="top-search">
	<img src="images/ACM_logo.png" width="80" height="80" alt="" />
	</div>	
 		
 	<!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		

		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="#nogo"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="http://www.bits-apogee.org/">Apogee</a></li>
				<li><a href="http://sms.bits-apogee.org/">SMS</a></li>
				<li><a href="http://www.bits-pilani.ac.in/Pilani/index.aspx">University Home</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
				
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>



		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
 
 <div class="clear"></div>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>New User</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no">*</div>
			<div class="step-dark-left"><a href="">Register</a></div>
			<?php
	        if ($flag == 'error') echo "<font color = 'red'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Please fill all the above fields. </font>";
        	else if ($flag == 'success') echo "<font color = 'red'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Successfully Registered. </font>";
        	else if ($flag == 'username_error') echo "<font color = 'red'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Please select a different username. </font>";
        	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Fields are required";

        	?>
			<!--<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left">Select related products</div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no-off">3</div>
			<div class="step-light-left">Preview</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div> -->
		</div>
		<!--  end step-holder -->
	
	<form id="formElem" name="formElem" action="register.php" method="post">
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">First Name:</th>
			<td><input type="text" class="inp-form" name="fname" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Last Name:</th>
			<td><input type="text" class="inp-form-error" name="lname" /></td>
			<td>
			
			</td>
		</tr>
		<tr>
			<th valign="top">College:</th>
			<td><input type="text" class="inp-form-error" name="college" /></td>
			<td>
			
			</td>
		</tr>
		<tr>
			<th valign="top">Gender:</th>
			<td><input type="radio" name="gender" value="male">Male</td>
            <td><input type="radio" name="gender" value="female">Female</td>
			<td>
			
			</td>
		</tr>
		<tr>
			<th valign="top">Email:</th>
			<td><input type="text" class="inp-form-error" name="email" /></td>
			<td>
			
			</td>
		</tr>
		<tr>
			<th valign="top">Username:</th>
			<td><input type="text" class="inp-form-error" name="username" /></td>
			<td>
			
			</td>
		</tr>
		
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<button id="registerButton" type="submit" class="form-submit" >Register</button>
			<!-- <input type="button" value="Submit" class="form-submit" /> -->
 			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>
	</form>
	
	<!-- end id-form  -->

	</td>
	<td>

	<!--  start related-activities -->
	<div id="related-activities">
		
		<!--  start related-act-top -->
		<div id="related-act-top">
		
		</div>
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		
	<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>









 





<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
	<!--  start footer-left -->
	<div id="footer-left">
	<?php
	include "footer.php";
	?>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
</html>
