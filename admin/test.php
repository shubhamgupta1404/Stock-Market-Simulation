<?php
if (isset($_GET['type']))
if (mysql_query("UPDATE `".$db."`.`".$_GET['type']."` SET `success` = '".$_GET['change']."' WHERE `".$_GET['type']."`.`sl` =".$_GET['stock'])) echo "Successfully Executed";
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
				<span class="title"><a href="http://localhost/16/administrator/index.php">SMS | Admin</a></span>
			</div>
		</div>
	</div>
	<div id="header-box">
		<div id="module-status">
			<span class="loggedin-users">&nbsp;</span><span class="backloggedin-users">&nbsp;</span><span class="no-unread-messages"><a href="#">&nbsp;</a></span><span class="viewsite"><a href="#" target="_blank">&nbsp;</a></span>
			<span class="logout"><a href="index.php?option=logout">Log out</a></span>		</div>
<?php
include("menu.php");
			$username = $_SESSION['username'];
			$id = $_SESSION['id'];
?>
		<div class="clr"></div>
	</div>
	<div id="content-box">
		<div class="border">
			<div class="padding">
				<div id="element-box">
					
					<div class="t">
						<div class="t">
							<div class="t"></div>
						</div>
					</div>
					<div class="m">
					<div class="adminform">
						<div class="cpanel-right" style = "width:100%">
							
<div id="panel-sliders" class="pane-sliders"><div class="panel"><h3 class="jpane-toggler title" id="cpanel-panel-popular">Welcome <?php echo $id; ?></h3><div style="padding-top: 0px; border-top: medium none; padding-bottom: 0px; border-bottom: medium none; overflow: hidden; height: 0px;" class="jpane-slider content"><table class="adminlist">
	<thead>
		<tr>
			<th>
				<strong>Sl</strong>
			</th>
			<th>
				<strong>Username</strong>
			</th>
			<th>
				<strong>Stock</strong>
			</th>
			<th>
				<strong>Volume</strong>
			</th>
			<th>
				<strong>Rate</strong>
			</th>
			<th>
				<strong>Type</strong>
			</th>
			<th>
				<strong>Time</strong>
			</th><th>
				<strong>Action</strong>
			</th>
		</tr>
	</thead>
	<tbody>
	
	<tr>



	
	<?php
			$details_b = mysql_query("SELECT * FROM `buy`");
			$details_s = mysql_query("SELECT * FROM `sell`");
			while ($detail_b = mysql_fetch_array($details_b))
			{
					echo "<tr>
					<td class='center'>";
					echo $detail_b['sl'];
					echo "</td>";
					
					echo "<td class='center'>";
					echo $detail_b['username'];
					echo "</td>";
					
					echo "<td class='center'>";
					echo $detail_b['stock'];
					echo "</td>";
					
					echo "<td class='center'>";
					echo $detail_b['amount'];
					echo "</td>";
					
					echo "<td class='center'>";
					echo $detail_b['rate'];
					echo "</td>";
					
					echo "<td class='center'>";
					echo $detail_b['time'];
					echo "</td>";
					
					echo "<td class='center'>";
					echo "BUY";
					echo "</td>";
					if ($detail_b['success']=='1')
					echo "<td class='center'><a href='index.php?option=view-transaction&stock=".$detail_b['sl']."&type=buy&change=0'>Stall</a></td></tr>";
					else
					if ($detail_b['success']=='0')
					echo "<td class='center'><a href='index.php?option=view-transaction&stock=".$detail_b['sl']."&type=buy&change=1'>Execute</a></td></tr>";
					
	
					
			}
			
			while ($detail_s = mysql_fetch_array($details_s))
			{
					echo "<tr>
					<td class='center'>";
					echo $detail_s['sl'];
					echo "</td>";
					
					echo "<td class='center'>";
					echo $detail_s['username'];
					echo "</td>";
					
					echo "<td class='center'>";
					echo $detail_s['stock'];
					echo "</td>";
					
					echo "<td class='center'>";
					echo $detail_s['amount'];
					echo "</td>";
					
					echo "<td class='center'>";
					echo $detail_s['rate'];
					echo "</td>";
					
					echo "<td class='center'>";
					echo $detail_s['time'];
					echo "</td>";
					
					echo "<td class='center'>";
					echo "SELL";
					echo "</td>";
					if ($detail_s['success']=='1')
					echo "<td class='center'><a href='index.php?option=view-transaction&stock=".$detail_s['sl']."&type=sell&change=0'>Stall</a></td></tr>";
					else
					if ($detail_s['success']=='0')
					echo "<td class='center'><a href='index.php?option=view-transaction&stock=".$detail_s['sl']."&type=sell&change=1'>Execute</a></td></tr>";
					
	
					
			}
			
	?>
	
	
	



			</tbody>
</table>
</div></div>


						</div>
					</div>
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
		</div>
	</div>
	<div id="border-bottom"><div><div></div></div></div>
		
	<div id="footer">
		<p class="copyright">
			<b>ACM, BITS Pilani</b> Stock Market Simulation</a>.			<span class="version"><i>V (beta0.0.1)</i></span>
		</p>
	</div>
</body></html>
