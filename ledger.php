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
		<h1>Ledger</h1>
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
			<div id="table-content">
			
				
		
		 
				<!--  start product-table ..................................................................................... -->
				
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Initial Balance</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Current in-hand Balance</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Current Stock Worth</a></th>
					
				</tr>
				<div id="AutoUpdte">
				<?php
				$i = 1;
				$query_buy = mysql_query("SELECT sum(`rate`*`amount`) FROM `".$db."`.`buy` where username='".$_SESSION['username']."'");
				$query_sell= mysql_query("SELECT sum(`rate`*`amount`) FROM `".$db."`.`sell` where `username`='".$_SESSION['username']."' AND `success`='1'");
				
				$query_current_sell= mysql_query("SELECT sum(`stocks`.`last_data`*`sell`.`amount`) FROM `".$db."`.`stocks`,`".$db."`.`sell` WHERE `sell`.`username`='".$_SESSION['username']."' AND `sell`.`success`='1' AND `sell`.`stock`=`stocks`.`name`");
				$query_current_buy = mysql_query("SELECT sum(`stocks`.`last_data`*`buy`.`amount`) FROM `".$db."`.`stocks`,`".$db."`.`buy` WHERE `buy`.`username`='".$_SESSION['username']."' AND `buy`.`success`='1' AND `buy`.`stock`=`stocks`.`name`");
				$worth_buy= (mysql_fetch_row($query_current_buy));
				$worth_sell= (mysql_fetch_row($query_current_sell));
				$current_worth=$worth_buy[0]-$worth_sell[0];
				
				$buy= (mysql_fetch_row($query_buy));
				$sell= (mysql_fetch_row($query_sell));
				
				
				$inhand=$initial_balance-$buy[0]+$sell[0];
				echo "
				<tr>
					<td>".$initial_balance."</td>
					<td>".round($inhand, 2)."</td>
					<td>".round($current_worth, 2)."</td>
					
				</tr>
				";
				?>
				
				</div>
				</table>
				<!--  end product-table................................... --> 
				</form>
				
			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			
			<!-- end actions-box........... -->
			
			<!--  start paging..................................................... -->
			
			<!--  end paging................ -->
			
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
