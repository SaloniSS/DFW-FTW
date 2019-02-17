<!DOCTYPE html>
<html>
<head>
	<title></title>
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
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit dolores, ullam ipsam officia repellat explicabo sunt aspernatur. Maxime ipsa architecto quisquam, enim praesentium ab expedita quis saepe officia explicabo quas.
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