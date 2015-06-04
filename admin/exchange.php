<?php
if (isset($_POST['exchange_data'])) {
     $query = mysql_query("SELECT * FROM `exchange` where `exchange`='".$_POST['exchange_data']."'");
     $row = mysql_fetch_row($query);
     //var_dump ($row);
        if(isset($row[0]) && isset($row[1]) && isset($row[2]))
        {
           $myFile = "config.php";
           $fh = fopen($myFile, 'w') or die("can't open file");
           
           $stringData = "<?php\n\$initial_balance = 100000;\n\$stock_online = \"".$row[0]."\";\n\$sensex = \"".$row[3]."\";\n\$chart_interactive = \"".$row[1]."\";\n\$sensex_chart = \"".$row[2]."\";\n?>";
           fwrite($fh, $stringData);
           fclose($fh);
        }
        else echo "Please set all the fields for ".$_POST['exchange_data'];
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
  echo "Select" ;
  ?>
</a>
</li>
</ul>
<div class="clr"></div>
</div>
					<div class="pagetitle icon-48-user-add"><h2>
Exchange
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
		if (checkn(exchange_data,"Invalid!")==false)
		{
			exchange_data.focus();
		}
		else
		{
			thisform.submit();
		}
	}
		
}
</script>                            

<form action="index.php?option=exchange" method="post" name="Form" id="user-form" class="form-validate">
	<div class="width-60 fltlft">

		<fieldset class="adminform">
			<legend>Details</legend>
			<ul class="adminformlist">
							<li>
							<label id="jform_username-lbl" for="jform_username" class="hasTip">Exchange #</label>
							<?php 
							 
							    echo "<select id='exchange_data' name='exchange_data'  class='inputbox'>";
							    $details = mysql_query("SELECT distinct `exchange_data` FROM `stocks`");
							    
							    while ($detail = mysql_fetch_array($details)) {
							    
							      echo '<option value="'.$detail['exchange_data'].'">'.$detail['exchange_data'].'</option>';
							    
							    }
							    echo "</select>";
							  
							    
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

