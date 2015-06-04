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
		<h1>Sell</h1>
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
			
			<form id="formElem" name="formElem" action="transaction.php" method="post">
			<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
    		<tr><td>&nbsp;&nbsp;&nbsp;</td></tr>
    		
    		<tr>
    			<th valign="top">Stock</th>
	    		<td><?php echo $_GET['stock']; ?></td>
	    	</tr>
	    	
	    	<tr>	
	    		<th valign="top">Rate</th>
	    		<td><input type="text" class="inp-form" name="value" value="" autocomplete=" off" /></td>
	    	</tr>
	    	
	    	<tr>	
	    		<th valign="top">Volume</th>
	    		<td><input type="text" class="inp-form" name="amount" value="" autocomplete=" off" /></td>
	        </tr>    
	    	
	    	<?php
	    	
	    	echo "	
            <input type='hidden' name='stock' id='hiddenField' value='".$_GET['stock']."' />
            <input type='hidden' name='type' id='hiddenField' value='SELL' />
            <input type='hidden' name='page' id='hiddenField' value='".$_GET['p']."' />
            
            <td></td>";
		    
		    ?>
		
		<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td valign="top">
			<button id="registerButton" type="submit" class="form-submit" >Sell</button>
			<!-- <input type="button" value="Submit" class="form-submit" /> -->
 			
		</td>
		</tr>
		<td></td>
	</tr>
	</table>
	</form>
			
			
			
			
			
			
			
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
