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
		<h1>Select Custom Stocks</h1>
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
			
			<form id="formElem" name="formElem" action="custom_stock.php" method="post">
			<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
    		<tr>
    			<th valign="top">Stock</th>
	    		<td><input type="text" class="inp-form"  id="tag" name="txtAutosuggest" value="" autocomplete=" off" />
	            <?php    		
	    		    $sql="SELECT `name` FROM `stocks`";
                    $result = mysql_query($sql) or die(mysql_error());

                    if($result)
                    {
                    while($row=mysql_fetch_array($result))
                        {
                            echo $row['name']."\n";
                        }
                    }
                ?>
	    		
	    		
            </td>
		    <td></td>
		
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td valign="top">
			<button id="registerButton" type="submit" class="form-submit" >Register</button>
			<!-- <input type="button" value="Submit" class="form-submit" /> -->
 			
		</td>
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
