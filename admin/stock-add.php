<?php
if (isset($_POST['stock']))
{
if (mysql_query("INSERT INTO `".$db."`.`stocks` (`name`, `pretty_symbol_data`, `symbol_lookup_url_data`, `company_data`, `exchange_data`, `exchange_timezone_data`, `exchange_utc_offset_data`, `exchange_closing_data`, `divisor_data`, `currency_data`, `last_data`, `high_data`, `low_data`, `volume_data`, `avg_volume_data`, `market_cap_data`, `open_data`, `y_close_data`, `change_data`, `perc_change_data`, `delay_data`, `trade_timestamp_data`, `trade_date_utc_data`, `trade_time_utc_data`, `current_date_utc_data`, `current_time_utc_data`, `symbol_url_data`, `chart_url_data`, `disclaimer_url_data`, `ecn_url_data`, `isld_last_data`, `isld_trade_date_utc_data`, `isld_trade_time_utc_data`, `brut_last_data`, `brut_trade_date_utc_data`, `brut_trade_time_utc_data`, `daylight_savings_data`) VALUES ('".$_POST['stock']."', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')"))
echo "Successfully Added ".$_POST['stock'];
}
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
				<span class="title"><a href="http://localhost/16/administrator/index.php">SMS Admin</a></span>
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
  if ($insert != 1) echo "Create" ;
  else echo "Done" ;
?>
</a>
</li>
</ul>
<div class="clr"></div>
</div>
					<div class="pagetitle icon-48-user-add"><h2>
Add Stock
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
		if (checkn(stock,"Stock name?")==false)
		{
			stock.focus();
		}
		else
		{
			thisform.submit();
		}
	}
		
}
</script>                            

<form action="index.php?option=stock-add" method="post" name="Form" id="user-form" class="form-validate">
	<div class="width-60 fltlft">

		<fieldset class="adminform">
			<legend>Stock Details</legend>
			<ul class="adminformlist">
							
							
							<li>
							<label id="jform_username-lbl" for="jform_username" class="hasTip">Stock #</label>
							<?php 
							   
							     echo "<input type='text' name='stock' id='jform_username' value='' class='inputbox required' size='30' maxlength = '10'/> " ;  
							  
							 
							?>
							
							</li>
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

