<?php
date_default_timezone_set('Kolkata');
//echo "Current Time: ".date('l jS \of F Y h:i:s A');

$current_time = time();
$my_time=strtotime( date('Y-m-d') . ' 3:30 pm' );
//echo date();
//if($current_time > $my_time) { Market closed. Trading will resume tomorrow.
?>
<div id="message-yellow">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
<tr>
					<td class="yellow-left"> <?php echo "Current Time: ".date('l jS \of F Y h:i:s A'); ?> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Market Timing: 7:00 pm - 1:30 am</td>
					<td class="yellow-right"><a class="close-yellow"><img src="images/table/icon_close_yellow.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
<?php
//}
?>
<!--
<tr>
					<td class="yellow-left">You have a new message. <a href="">Go to Inbox.</a></td>
					<td class="yellow-right"><a class="close-yellow"><img src="images/table/icon_close_yellow.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
				<!--  end message-yellow -->
				
				<!--  start message-red -->
				<div id="message-red">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="red-left"><a href="currentsensex.php" target="_blank">Current Nasdaq (Opens in a new tab/window)</a></td>
					<td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>





<!--  start message-yellow -->
<div id="message1">
				<div id="message-yellow">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				
				<!--  end message-red -->
				
				<!--  start message-blue -->
				<?php
				if (isset($_GET['value']) && isset($_GET['type']) && isset($_GET['order']) && ($_GET['value']=='true') && ($_GET['order']=='place')) {
							
				?>
				<div id="message-blue">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="blue-left"><?php echo "Your last <strong>'".$_GET['type']."'</strong> has been successfully placed. You will get a notification as soon as it is executed."; ?> </td>
					<td class="blue-right"><a class="close-blue"><img src="images/table/icon_close_blue.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
				<?php
				}
				?>
				<!--  end message-blue -->
			
				<!--  start message-green -->
				<div id="message-green">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
				<?php
				$query_buy = mysql_query("SELECT sum(`rate`*`amount`) FROM `".$db."`.`buy` where username='".$_SESSION['username']."'");
				$query_sell= mysql_query("SELECT sum(`rate`*`amount`) FROM `".$db."`.`sell` where `username`='".$_SESSION['username']."' AND `success`='1'");
				$buy= (mysql_fetch_row($query_buy));
				$sell= (mysql_fetch_row($query_sell));
				$inhand=$initial_balance-$buy[0]+$sell[0];
				?>
				
					<td class="green-left">Current Balance: <a href=""><?php echo round($inhand, 2); ?></a></td>
					<td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
</div>
				<!--  end message-green -->
