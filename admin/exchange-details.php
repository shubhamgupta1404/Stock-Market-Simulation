<?php
 if (isset($_POST['sensex']) && isset($_POST['sensex1']) && isset($_POST['image1']) && isset($_POST['interactive']))
 {
 $query = mysql_query("SELECT * FROM `exchange` WHERE `exchange`='".$_POST['sensex']."'");
 if (mysql_num_rows($query)==0)
 {
 if (mysql_query("INSERT INTO `exchange` (`exchange`, `chart_interactive`, `sensex_chart`, `sensex`) VALUES ('".$_POST['sensex']."', '".$_POST['interactive']."', '".$_POST['image1']."', '".$_POST['sensex1']."')")) echo "Successfully Added";
 }
 else if (mysql_num_rows($query)==1)
 {
 if (mysql_query("UPDATE `exchange` SET `chart_interactive` = '".$_POST['interactive']."', `sensex_chart` = '".$_POST['image1']."', `sensex` = '".$_POST['sensex1']."' WHERE `exchange` = '".$_POST['sensex']."'")) echo "Successfully Updated";
 }
 }
echo mysql_error();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>


  <title>SMS | ADMIN</title>
  <script type="text/javascript" src="js/core.js"></script>
  <script type="text/javascript" src="js/mootools-core.js"></script>
  <script type="text/javascript" src="js/mootools-more.js"></script>
  <script type="text/javascript">
	window.addEvent('domready', function(){ new Accordion($$('div#panel-sliders.pane-sliders .panel h3.jpane-toggler'), $$('div#panel-sliders.pane-sliders .panel div.jpane-slider'), {onActive: function(toggler, i) {toggler.addClass('jpane-toggler-down');toggler.removeClass('jpane-toggler');Cookie.write('jpanesliders_panel-sliders',$$('div#panel-sliders.pane-sliders .panel h3').indexOf(toggler));},onBackground: function(toggler, i) {toggler.addClass('jpane-toggler');toggler.removeClass('jpane-toggler-down');if($$('div#panel-sliders.pane-sliders .panel h3').length==$$('div#panel-sliders.pane-sliders .panel h3.jpane-toggler').length) Cookie.write('jpanesliders_panel-sliders',-1);},duration: 300,opacity: false,alwaysHide: true}); });
  </script>


<link rel="stylesheet" href="css/system.css" type="text/css">
<link href="css/template.css" rel="stylesheet" type="text/css">


	<link rel="stylesheet" type="text/css" href="css/rounded.css">




</head><body id="minwidth-body">
	<div id="border-top" class="h_blue">
		<div>
			<div>
				<span class="logo"><a href="#">&nbsp;</a></span>
				<span class="title"><a href="http://localhost/16/administrator/index.php">SMS | ADMIN</a></span>
			</div>
		</div>
	</div>
	<div id="header-box">
		<div id="module-status">
			<span class="loggedin-users">&nbsp;</span><span class="backloggedin-users">&nbsp;</span><span class="no-unread-messages"><a href="#">&nbsp;</a></span><span class="viewsite"><a href="#" target="_blank">&nbsp;</a></span>
			<span class="logout"><a href="index.php?option=logout">Log out</a></span>		</div>
<?php
include("menu.php");
?>
		<div class="clr"></div>
	</div>
	<div id="content-box">
		<div class="border">
			<div class="padding">
				<div id="toolbar-box">
				<div class="t">
				<div class="t">
					<div class="t"></div>

				</div>
			</div>
			<div class="m">
				<div class="toolbar-list" id="toolbar">
<ul>
<li class="button" id="toolbar-apply">
<?php 
  echo "<a href='#' onclick='javascript:vreq(Form)' class='toolbar'>" ;
  ?>
<span class="icon-32-apply">
</span>
<?php 
  echo "Create" ;
  ?>
</a>
</li>
</ul>
<div class="clr"></div>
</div>
					<div class="pagetitle icon-48-user-add"><h2>
Fill Details
</h2></div>

				<div class="clr"></div>
			</div>

			<div class="b">
				<div class="b">
					<div class="b"></div>
				</div>
			</div>
		</div>
		<div class="clr"></div>
				
		<div id="element-box">
			<div class="t">

				<div class="t">
					<div class="t"></div>
				</div>
			</div>
			<div class="m">
                        
<script type="text/javascript">
function checkn(field,alertt)
{
	with(field)
	{
		if ((value==null)||(value==""))
		{
			alert(alertt);
			return false;
		}
		else
		{
			return true;
		}
	}
}

function vreq(thisform)
{
	with(thisform)
	{
		if (checkn(sensex,"Please enter Exchange Data!")==false)
		{
			sensex.focus();
		}
		if (checkn(sensex1,"Please enter Sensex Data!")==false)
		{
			sensex1.focus();
		}
		if (checkn(image1,"Please enter complete image URL!")==false)
		{
			image1.focus();
		}
		if (checkn(interactive,"Please enter complete link!")==false)
		{
			interactive.focus();
		}
		else
		{
			thisform.submit();
		}
	}
		
}
</script>                            

<form action="index.php?option=exchange-details" method="post" name="Form" id="user-form" class="form-validate">
	<div class="width-60 fltlft">

		<fieldset class="adminform">
			<legend>Details</legend>
			<ul class="adminformlist">
							<li>
							<label id="sensex" for="sensex" class="hasTip">Exchange #</label>
							<input type="text" name="sensex" id="sensex" value="" class="inputbox required" size="30"/>  
							</li>
							
							<li>
							<label id="sensex" for="sensex" class="hasTip">Sensex #</label>
							<input type="text" name="sensex1" id="sensex1" value="" class="inputbox required" size="30"/>  
							</li>
							
							<li>
							<label id="image1" for="image1" class="hasTip">Chart Image Link #</label>
							<input type="text" name="image1" id="image1" value="" class="inputbox required" size="30"/>  
							</li>
							
							<li>
							<label id="interactive" for="interactive" class="hasTip">Chart Interactive Link #</label>
							<input type="text" name="interactive" id="interactive" value="" class="inputbox required" size="30"/>  
							</li>
							
							<li><a href="564634244444451323212316.txt">Click here for examples</a></li>

							
			</ul>
		</fieldset>

	</div>


</form>

				<div class="clr"></div>
			</div>
			<div class="b">
				<div class="b">

					<div class="b"></div>
				</div>
			</div>
		</div>

		<div class="clr"></div>
	</div>
	<div class="clr"></div>

</div>
</div>
	<div id="border-bottom"><div><div></div></div></div>
		
	<div id="footer">
		<p class="copyright">
			<b>ACM, BITS Pilani</b> Stock Market Simulation</a>.			<span class="version"><i>V (beta0.0.1)</i></span>
		</p>
	</div>
</body></html>

