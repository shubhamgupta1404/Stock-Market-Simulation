<?php
include "db.php";
if (isset($_POST['pass']) && isset($_POST['repass']) && (mysql_escape_string(trim($_POST['pass'])) != '' ) && (mysql_escape_string(trim($_POST['repass'])) != '' )) {
if ($_POST['pass'] == $_POST['repass'])
$result = mysql_query("UPDATE `".$db."`.`profile` SET `password` = '".$_POST['pass']."' WHERE `profile`.`username` = '".$_SESSION['username']."'");
else $flag = 'error';

if ($result) $flag = 'success';
else if (!$result && ($_POST['pass'] == $_POST['repass'])) $flag = 'db_error';
}
?>

<?php
include "header.php";
?>
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


<div id="page-heading"><h1>Change Password</h1></div>


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
			<?php
	        if ($flag == 'error') echo "<font color = 'red'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password fields do not match. </font>";
        	if ($flag == 'success') echo "<font color = 'red'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password changed. </font>";
        	if ($flag == 'db_error') echo "<font color = 'red'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Errors encountered!! </font>";
        	
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
	
	<form id="formElem" name="formElem" action="password-change.php" method="post">
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">New Password:</th>
			<td><input type="password" class="inp-form" name="pass" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">New Password (Re-Type):</th>
			<td><input type="password" class="inp-form-error" name="repass" /></td>
			<td>
			
			</td>
		</tr>
		
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
