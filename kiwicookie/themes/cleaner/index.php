<?php
$theme = "cleaner";
$lang = LANG;
?>

<DOCTYPE !html>
<html>

<head>
<?php include("$currentDir/themes/$theme/css/style.css"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>

	<div class="intro">
		<?php include("$currentDir/lang/$lang/intro.html"); ?>
	</div>

	<div class="buttons">
		<?php include("$currentDir/lang/$lang/buttons.html"); ?>
	</div>

	<div class="privacy">
		<?php include("$currentDir/lang/$lang/privacy.html"); ?>
	</div>

	<div class="cookies">
		<?php include("$currentDir/lang/$lang/cookies.html"); ?>
	</div>

</body>

<script>
		function show(elm) {
			$('#'+elm).fadeIn('slow');
		}
		
		function hide(elm) {
			$('#'+elm).fadeOut('slow');
		}
</script>

</html>