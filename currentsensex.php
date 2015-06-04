<?php
include "db.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Stock Market Simulation</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->



<!-- Yahoo Chart js ---------------------------------------------
<script type="text/javascript" charset="utf-8">
                                                if(!swfobject.hasFlashPlayerVersion("9")){
                                                        var toolsEl = YAHOO.util.Dom.get("yfi_chart_tools");
                                                        toolsEl.style.display = 'none';
                                                }						
                                        </script><script language="javascript">
if(window.yzq_d==null)window.yzq_d=new Object();
window.yzq_d['QfqdAGKImjs-']='&U=12bsan34c%2fN%3dQfqdAGKImjs-%2fC%3d-2%2fD%3dCSB%2fB%3d-2%2fV%3d0';
</script><noscript><img width=1 height=1 alt="" src="http://us.bc.yahoo.com/b?P=upOZEEwNclKuF6qmUJvfvAMxyk6vx1ETYyUACJyU&T=1degnj0oo%2fX%3d1360225061%2fE%3d2022773886%2fR%3dfin%2fK%3d5%2fV%3d2.1%2fW%3dH%2fY%3dYAHOO%2fF%3d2520265070%2fH%3dY2FjaGVoaW50PSIyMDIyNzczODg2IiBjb250ZW50PSJleGNoYW5nZT1CU0U7cGVyY2VudENoYW5nZUZsYWc9LTE7dGlja2VyPV5CU0VTTjt0aWNrZXJUeXBlPWluZGV4OyIgbHJlYz0iMzAweDI1MCIgc2VydmVJZD0idXBPWkVFd05jbEt1RjZxbVVKdmZ2QU14eWs2dngxRVRZeVVBQ0p5VSIgc2l0ZUlkPSI0NDUxMDUxIiB0U3RtcD0iMTM2MDIyNTA2MTU4MDcxNSIgdGlja2VyPSJeQlNFU04iIA--%2fQ%3d-1%2fS%3d1%2fJ%3dA6720D4C&U=12bsan34c%2fN%3dQfqdAGKImjs-%2fC%3d-2%2fD%3dCSB%2fB%3d-2%2fV%3d0"></noscript>
<!------------------ Yahoo Chart js ends ---------------------------->












<script type="text/javascript" src="js/jquery.min.js"></script>
<script language="JavaScript">
setInterval( "SANAjax();", 60000 );  ///////// 10 seconds
 
$(function() {
SANAjax = function(){
 
$('#table-content').load('currentsensex.php #table-content');
 
}
 });
</script>


<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!--  checkbox styling script -->
<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  

<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>

<!--  styled select box script version 2 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
      $("input.file_1").filestyle({ 
          image: "images/forms/choose-file.gif",
          imageheight : 21,
          imagewidth : 78,
          width : 310
      });
  });
</script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 


<!--  date picker script -->
<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="js/jquery/date.js" type="text/javascript"></script>
<script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/2005',
			endDate:'31/12/2020'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href=""><img src="images/shared/logo.png" width="380" height="90" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<!--  start top-search -->
	<div id="top-search">
		
 	<!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<div class="showhide-account"><img src="images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
			<div class="nav-divider">&nbsp;</div>
			<a href="logout.php" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="" id="acc-settings">Settings</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-details">Personal details </a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-project">Project details</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-inbox">Inbox</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-stats">Statistics</a> 
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="#nogo"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="http://www.bits-apogee.org/">Apogee</a></li>
				<li><a href="http://sms.bits-apogee.org/">SMS</a></li>
				<li><a href="http://www.bits-pilani.ac.in/Pilani/index.aspx">University Home</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a href="#nogo"><b>Game</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="home.php">All Stocks</a></li>
				<li><a href="custom_game.php">Custom Game</a></li>
				<li><a href="custom_stock.php">Create a Custom Game</a></li>
				
			 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a href="#nogo"><b>Transactions</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="successfulltransaction.php">Successfull</a></li>
				<li><a href="pendingtransaction.php">Pending</a></li>
				<li><a href="stocksinhand.php">Stocks In-hand</a></li>
				
				
			 
			</ul>
		</div>
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="ledger.php"><b>Ledger</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		
		
		
		
		<ul class="select"><li><a href="#nogo"><b>More</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="rules.php">Rules</a></li>
				<li><a href="notices.php">Notices</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>		

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
		<h1>Live Nasdaq</h1>
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
			
			
			<table width="100%" border="0" cellspacing="0" cellpadding="0" id="faq">
			<td class="maintext"><strong class="faqtitle">Nasdaq Chart (Auto Refreshes every 1 minute)</strong></td>
			 <tr><tr><td>&nbsp;&nbsp;</td></tr><td><?php  echo "<a href='".$chart_interactive."'  target='_blank'>Click here for a Live interactive chart (courtesy: Yahoo Finance)</a>"; ?></td></tr><tr><td>&nbsp;&nbsp;</td></tr><tr>
          <?php
           echo "<td height='300'><div align='center'><img width='700' height='520' border='0' alt='Chart' src='".$sensex_chart."'/>";
           ?>
           
         
			</td><tr></tr><td>
			
<!--Yahoo Chart HTML -------------------------------			
<div id="yfi_chart_flash" style="padding: 0pt;"><object style="visibility: visible; height: 535px;" data="http://l.yimg.com/bm/lib/fi/common/p/d/static/swf/2.0.239216/2.0.0/en-US/largechart.swf" id="yfi_chart_swf" type="application/x-shockwave-flash" height="516" width="824"><param value="always" name="allowscriptaccess"><param value="opaque" name="wmode"><param value="sigDevEnabled=true&amp;changeSymbolEnabled=false&amp;state=symbol=%5EBSESN;range=1y;compare=;indicator=volume;charttype=area;crosshair=on;ohlcvalues=0;logscale=off;source=;" name="flashvars"></object></div></div>			
<!-- Yahoo Chart HTML Ends ---------------------------->
			
			
			
		</div></td>
         </tr>	
		</table>	
			
			
			
			
			
			
			
			
			
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
