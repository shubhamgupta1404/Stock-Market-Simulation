<!DOCTYPE html>
<html>
<head>
	<title>Updater</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<script type="text/javascript">
	$(document).ready(function(){
		var time = 5000;
		setInterval(function(){
			$.ajax({
				url : "fetchxml.php",
				success : function(e){
					$(".data").html(e);
					// alert("hello");
				}
			});
		},5000);
		
	});
</script>
<div class="data">
	
</div>
</body>
</html>