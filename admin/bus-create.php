<?php
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    $insert = 0;
    
      include("db.php");
      $sql = mysql_query("SELECT * FROM `bus-details` WHERE `id`='".$id."'");
      $rows2 = mysql_num_rows($sql);
      if ($rows2 >=1) header( 'Location: index.php?option=bus' );
    
    if (isset($_POST['slot-id']) && isset($_POST['mobile'])) {
      $group = mysql_real_escape_string($_POST['slot-id']);
      $mobile = mysql_real_escape_string($_POST['mobile']);
      
      $sql = mysql_query("SELECT * FROM `bus-slots` WHERE `slot-id`='".$group."'");
      $rows1 = mysql_num_rows($sql);
      if($rows1>=1) {
        $insert = mysql_query("INSERT INTO `bus-groups` (`slot-id`,`owner`,`mobile`) VALUES('".$group."', '".$id."','".$mobile."')");
        $gid = mysql_insert_id();
        if($gid !=0 )mysql_query("INSERT INTO `bus-details` (`id`, `group-id`) VALUES('".$id."', '".$gid."')");
      }
    }
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>


  <title>SU-RMS</title>
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
				<span class="title"><a href="http://localhost/16/administrator/index.php">SU-RMS</a></span>
			</div>
		</div>
	</div>
	<div id="header-box">
		<div id="module-status">
			<span class="loggedin-users">&nbsp;</span><span class="backloggedin-users">&nbsp;</span><span class="no-unread-messages"><a href="#">&nbsp;</a></span><span class="viewsite"><a href="#" target="_blank">&nbsp;</a></span>
			<span class="logout"><a href="index.php?option=logout">Log out</a></span>		</div>
<?php
include("menu.php");
?>
		<div class="clr"></div>
	</div>
	<div id="content-box">
		<div class="border">
			<div class="padding">
				<div id="toolbar-box">
				<div class="t">
				<div class="t">
					<div class="t"></div>

				</div>
			</div>
			<div class="m">
				<div class="toolbar-list" id="toolbar">
<ul>
<li class="button" id="toolbar-apply">
<?php 
  if ($insert != 1) echo "<a href='#' onclick='javascript:vreq(Form)' class='toolbar'>" ;
  else echo "<a href='index.php?option=bus' class='toolbar'>" ;
?>
<span class="icon-32-apply">
</span>
<?php 
  if ($insert != 1) echo "Create" ;
  else echo "Done" ;
?>
</a>
</li>
</ul>
<div class="clr"></div>
</div>
					<div class="pagetitle icon-48-user-add"><h2>
Create a Group
</h2></div>

				<div class="clr"></div>
			</div>

			<div class="b">
				<div class="b">
					<div class="b"></div>
				</div>
			</div>
		</div>
		<div class="clr"></div>
				
		<div id="element-box">
			<div class="t">

				<div class="t">
					<div class="t"></div>
				</div>
			</div>
			<div class="m">
                        
<script type="text/javascript">
function checkn(field,alertt)
{
	with(field)
	{
		if ((value==null)||(value==""))
		{
			alert(alertt);
			return false;
		}
		else
		{
			return true;
		}
	}
}

function vreq(thisform)
{
	with(thisform)
	{
		if (checkn(mobile,"Please enter your mobile number!")==false)
		{
			mobile.focus();
		}
		else
		{
			thisform.submit();
		}
	}
		
}
</script>                            

<form action="index.php?option=bus-create" method="post" name="Form" id="user-form" class="form-validate">
	<div class="width-60 fltlft">

		<fieldset class="adminform">
			<legend>Group Details</legend>
			<ul class="adminformlist">
							<li>
							<label id="jform_id-lbl" for="jform_id" class="hasTip">ID</label>
							<input type="text" name="ID" id="jform_id" value="<?php echo $id; ?>" class="readonly" readonly="readonly"/>
							</li>
							<li>
							<label id="jform_username-lbl" for="jform_username" class="hasTip">Slot #</label>
							<?php 
							  if ($insert != 1) {
							    echo "<select id='Slot-ID' name='slot-id'  class='inputbox'>";
							    include("db.php");
							    $details = mysql_query("SELECT *  FROM `bus-slots`  WHERE `slot-desc` NOT LIKE 'Dep%' ORDER BY `slot-id` ASC");
							    
							    while ($detail = mysql_fetch_array($details)) {
							    
							      echo '<option value="'.$detail['slot-id'].'">'.$detail['slot-desc'].'</option>';
							    
							    }
							    echo "</select>";
							  }
							    else {
							    echo "<input type='text' name='ID' id='jform_id' value='Created Group # ".$gid."' class='readonly' readonly='readonly' size='50'/>";
							  }
							?>
							
							</li>

							<li>
							<label id="jform_username-lbl" for="jform_username" class="hasTip">Mobile #</label>
							<?php 
							  if ($insert != 1) {
							     echo "<input type='text' name='mobile' id='jform_username' value='' class='inputbox required' size='30' maxlength = '10'/> " ;  
							  }
							  else {
							    echo "<input type='text' name='mobile' id='jform_username' value='".$mobile."' class='readonly' readonly='readonly' size='30' maxlength = '10'/> " ;
							  }
							?>
							
							</li>
			</ul>
		</fieldset>

	</div>


</form>

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
	<div class="clr"></div>

</div>
</div>
	<div id="border-bottom"><div><div></div></div></div>
		
	<div id="footer">
		<p class="copyright">
			<b>SU-RMS</b> Team Project Stage Imp</a>.			<span class="version"><i>V (beta0.0.1)</i></span>
		</p>
	</div>
</body></html>

