<!DOCTYPE html>
<html>
<head>
	<title>DFW FTW</title>
	<?= style_link_tag('main') ?>
	<?= style_link_tag('landing') ?>
	<script src="https://apis.google.com/js/api:client.js"></script>
	<script>
		var googleUser = {};
		var startApp = function() {
			gapi.load('auth2', function(){
				auth2 = gapi.auth2.init({
					client_id: '<?= $google_signin_client_id ?>'
				});
				attachSignin(document.getElementById('gSignIn'));
			});
		};
	</script>
</head>
<body id="landing">
	
	<main>
		<iframe src="http://sayyestodallas.com/" id="frame"></iframe><!--
		--><div id="login">
			<h1>DFW FTW</h1>
			<div class="subtitle">
				The largest urban arts district in the United States. Enchanting, pristine forests. A blossoming tech industry. The DFW area has something for everyone to love. In this ever-expanding metropolitan area, there’s always new places to explore. Take our quiz to see why so many people have chosen to make DFW their home!
			</div>
			
			<div id="gSignInWrapper">
				<div id="gSignIn">
					<i class="icon material-icons">arrow_forward</i><!--
					--><span class="text">Begin</span>
				</div>
			</div>
			<script>startApp();</script>

		</div>

	</main>

	<?= script_tag('login') ?>
</body>
</html>