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
		<h1>LeaderBoard</h1> 
		<font color="red">In case you do not find yourself <?php echo "(username: \"".$_SESSION['username']."\")"; ?> on this page, email us at <strong><a href="mailto:acm@bits-student.org">acm@bits-student.org</a></strong> from your registered email address.</font>
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
					<th class="table-header-repeat line-left minwidth-1"><a href="">Rank</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Username</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Total Worth</a></th>
					
				</tr>
				<div id="AutoUpdte">
				<?php
				include "sort1.php";
				$i = 1;
				/*
				//$query = mysql_query("SELECT (table1.inhandbalance+table2.stockworth) AS worth, table2.username AS username FROM (SELECT (100000-t2.buytotal+t1.selltotal) AS inhandbalance, t2.username AS username from (SELECT sum(`sell`.`rate`*`sell`.`amount`) AS selltotal, `sell`.`username` AS username FROM `sell` WHERE `sell`.`success`='1' GROUP BY `sell`.`username`) AS t1, (SELECT sum(`buy`.`rate`*`buy`.`amount`) AS buytotal, `buy`.`username` AS //username FROM `buy` GROUP BY `buy`.`username`) AS t2 WHERE t1.username=t2.username) AS table1, (SELECT (t4.cbuy-t3.csell) AS stockworth, t3.username AS username //FROM (SELECT sum(`stocks`.`last_data`*`sell`.`amount`) AS csell, `sell`.`username` AS username FROM `stocks`,`sell` WHERE  `sell`.`success`='1' AND //`sell`.`stock`=`stocks`.`name` GROUP BY `sell`.`username`) as t3, (SELECT  sum(`stocks`.`last_data`*`buy`.`amount`) AS cbuy, `buy`.`username` AS username FROM //`stocks`,`buy` WHERE  `buy`.`success`='1' AND `buy`.`stock`=`stocks`.`name` GROUP BY `buy`.`username`) AS t4 WHERE t3.username=t4.username) AS table2 
//WHERE table2.username=table1.username ORDER BY worth DESC"); */
                    
                    for ($j = 0; $j < count($scores); $j++)
			{
		    if ($scores[$j]['username'] == $_SESSION['username']){
                    echo "<tr class='alternate-row'><td>".$i."</td>";
                    echo"<td>".$scores[$j]['username']."</td>";
			        echo "<td>".round($scores[$j]['value'], 2)."</td></tr>";
			        }
			        else {
		 echo "<tr><td>".$i."</td>";
                    echo"<td>".$scores[$j]['username']."</td>";
			        echo "<td>".round($scores[$j]['value'], 2)."</td></tr>";
			        }
			        
			        $i++;
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
