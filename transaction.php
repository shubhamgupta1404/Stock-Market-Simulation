<?php
function check($type, $user, $stock, $value, $amount)
{
$return = false;
include "db.php";
if ($type == 'buy'){
$query_buy = mysql_query("SELECT sum(`rate`*`amount`) FROM `".$db."`.`buy` where username='".$_SESSION['username']."'");
				$query_sell= mysql_query("SELECT sum(`rate`*`amount`) FROM `".$db."`.`sell` where `username`='".$_SESSION['username']."' AND `success`='1'");
				$buy= (mysql_fetch_row($query_buy));
				$sell= (mysql_fetch_row($query_sell));
				$inhand=$initial_balance-$buy[0]+$sell[0];
if ($inhand >= ($value*$amount))
$return = true;
}

else if ($type == 'sell'){
$query_b = mysql_query("SELECT sum(`amount`) FROM `".$db."`.`buy` WHERE `username`='".$_SESSION['username']."' and `stock`='".$stock."' AND `success`='1'");
$query_s = mysql_query("SELECT sum(`amount`) FROM `".$db."`.`sell` WHERE `username`='".$_SESSION['username']."' and `stock`='".$stock."'");
$amt_b= (mysql_fetch_row($query_b));
$amt_c= (mysql_fetch_row($query_s));
$amt=$amt_b[0]-$amt_c[0];
if ($amt>=$amount)
$return=true;
}
return $return;
}

if (isset($_POST['type']) && isset($_POST['stock']) && isset($_POST['value']) && isset($_POST['amount']) && (mysql_escape_string(trim($_POST['type']!=''))) && (mysql_escape_string(trim($_POST['stock']!=''))) && (mysql_escape_string(trim($_POST['value'] !=''))) && (mysql_escape_string(trim($_POST['value'] > 0))) && (mysql_escape_string(trim($_POST['amount'] > 0))) && (mysql_escape_string(trim($_POST['amount']!=''))))
{
include "db.php";
if (check(strtolower($_POST['type']),$_SESSION['username'],$_POST['stock'],$_POST['value'],$_POST['amount']) == true)
{
$query = mysql_query("INSERT INTO `".$db."`.`".strtolower($_POST['type'])."` (`username`, `stock`, `rate`, `amount`, `success`) VALUES ('".$_SESSION['username']."', '".$_POST['stock']."', '".$_POST['value']."', '".$_POST['amount']."', '0')");
if ($query) {
include "compare_current.php";
header('location: '.$_POST['page'].'.php?value=true&type='.$_POST['type'].'&order=place');
}

else {
$error = 'There was an error placing your order. You can retry placing the order, or you can contact us.';
}
}
else $error='You have crossed your buying/selling limit. Please check your balance/number of stocks before placing any order.';
}
else $error='All fields are necessary. Please Go back and fill all the fields.';
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
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Error</h1>
	</div>
	<!-- end page-heading -->

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
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content-auto">
			
			
			
			<?php
			echo "<font color='red'>".$error."</font>";
			?>
			
			
			
			
			
			
			
			</div>
			<!--  end table-content  -->
	
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
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
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
<!-- <div id="footer-pad">&nbsp;</div> -->
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
