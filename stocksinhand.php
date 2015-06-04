<?php
include "header.php";
?>

<?php
if (isset($_GET['sl']) && isset($_GET['table']))
{

$query_can=mysql_query("DELETE FROM `".$db."`.`".$_GET['table']."` WHERE `".$_GET['table']."`.`sl` = ".$_GET['sl']." AND `username`='".$_SESSION['username']."'");
$note = "<font color='red'>Successfully Removed</font>";
}
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
		<h1>Stocks In-Hand</h1>
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
				 
				
				<!---------------------------------------------->
				<br /><br />
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr><h1></h1></tr>
				<tr><br /></tr>
				<tr>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Stock</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Volume</a></th>
					
				</tr>
				<div id="AutoUpdte">
				<?php
				$i = 1;
				$query_b = mysql_query("SELECT sum(`amount`) volume, `stock` FROM `".$db."`.`buy` WHERE `success`='1'  AND `username` = '".$_SESSION['username']."' GROUP BY `stock`");
				while($row_b=mysql_fetch_array($query_b))
				{
				$query_s = mysql_query("SELECT sum(`amount`) volume, `stock` FROM `".$db."`.`sell` WHERE `stock` = '".$row_b['stock']."' AND `username` = '".$_SESSION['username']."' GROUP BY `stock` ");
				$row_s = mysql_fetch_array($query_s);
				$diff = $row_b['volume'] - $row_s['volume'];
				//print_r ($row_b['volume']);
				//var_dump ($row_s);
				//print_r ($diff);
				echo "
				<tr>
					<td>".$row_b['stock']."</td>
					<td>".$diff."</td>
					
				</tr>
				";
				}
				
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
