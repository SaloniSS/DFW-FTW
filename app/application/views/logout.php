<!DOCTYPE html>
<html>
<head>
	<meta name="google-signin-client_id" content="<?= $google_signin_client_id ?>">
</head>
<body>
	<?= script_tag('logout') ?>
	<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
</html>

