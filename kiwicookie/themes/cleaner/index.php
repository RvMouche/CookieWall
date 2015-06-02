<DOCTYPE !html>
<html>
<head>
<?php include("$currentDir/themes/cleaner/css/style.css"); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script>
		function show(elm) {
			$('#'+elm).fadeIn('slow');
		}
		
		function hide(elm) {
			$('#'+elm).fadeOut('slow');
		}
	</script>
</head>
<?php
$lang = LANG;
?>
<body>
	<div class="intro">
		<?php include("$currentDir/lang/$lang/intro.html"); ?>
	</div>

	<div class="privacy">
		<?php include("$currentDir/lang/$lang/privacy.html"); ?>
	</div>

	<div class="cookies">
		<?php include("$currentDir/lang/$lang/cookies.html"); ?>
	</div>
</body>
</html>