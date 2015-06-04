<?php
if (isset($_POST['set']) && ($_POST['set']=='custom'))
{
include "db.php";
mysql_query("DELETE FROM `".$db."`.`stock_user` WHERE `user` = '".$_SESSION['username']."'");
$query_custom=mysql_query("SELECT `name` FROM `".$db."`.`stocks`");
while($row_custom=mysql_fetch_array($query_custom))
{
    if (isset($_POST[$row_custom[0]]) && $_POST[$row_custom[0]]=='1')
    $query_insert=mysql_query("INSERT INTO `".$db."`.`stock_user` (`stock`, `user`) VALUES ('".$row_custom[0]."', '".$_SESSION['username']."')");
}
header('location: custom_game.php');
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
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Create Custom Board</h1>
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
				
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Add</a> </th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Exchange</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Stock</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Current</a></th>
					<th class="table-header-repeat line-left"><a href="">% Change</a></th>
					<th class="table-header-repeat line-left"><a href="">Low</a></th>
					<th class="table-header-repeat line-left"><a href="">High</a></th>
					<th class="table-header-repeat line-left"><a href="">Open</a></th>
					<th class="table-header-repeat line-left"><a href="">Volume</a></th>
					<th class="table-header-repeat line-left"><a href="">Last Close</a></th>
					
				</tr>
				<div id="AutoUpdte">
				<?php
				$i = 1;
				$query = mysql_query("SELECT * FROM `".$db."`.`stocks` WHERE `exchange_data`='".$stock_online."' ORDER BY `stocks`.`name` ASC");
				?>
				<form id="formElem" name="formElem" action="custom_stock.php" method="post">
				<?php
				while ($row = mysql_fetch_array($query))
				{
				    //var_dump ($row);
				    if ($i%2 != 0 )
				    echo '<tr>';
				    else echo '<tr class="alternate-row">';
				    //var_dump ($row);
				    echo "
					<td><input type='checkbox' name='".$row['name']."' value='1'></td>
					<td>".$row['exchange_data']."</a>	</td>
					<td>".$row['name']."</a>	</td>
					<td>".$row['last_data']."</a></td>
					<td>".$row['perc_change_data']."</a></td>
					<td>".$row['low_data']."</a></td>
					<td>".$row['high_data']."</a></td>
					<td>".$row['open_data']."</a></td>
					<td>".$row['volume_data']."</a></td>
					<td>".$row['y_close_data']."</a></td>
					
					</tr>
				    ";
				    $i++;
				}
				echo "	
                <input type='hidden' name='set' id='hiddenField' value='custom' />
                <th></th>";
				?>
				<tr>
		        <th valign="top">
			    <button id="registerButton" type="submit" class="form-submit" >Sell</button>
			    <!-- <input type="button" value="Submit" class="form-submit" /> -->
 			
		    </th>
		    </tr>
		    </form>
		<th></th>
				</div>
				</table>
				<!--  end product-table................................... --> 
				
				
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
