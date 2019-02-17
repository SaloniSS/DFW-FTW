<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?= style_link_tag('main') ?>
	<?= style_link_tag('exit') ?>

	<style type="text/css">
		body {
    		background-image:url(' https://media.giphy.com/media/y18j1wxVZTWEM/giphy.gif');
   			background-size:100%;
    		background-repeat: repeat-y;
    		background-attachment: fixed;
   		 	height:100%;
   			width:100%;
		}

		.aligncenter {
    		text-align: center;
    		position: fixed;
  			top: 40%;
  			left: 40%;
		}

		input.Button {
		width: 300px;
		padding: 20px;
		cursor: pointer;
		font-weight: bold;
		font-size: 150%;
		background: red;
		color: white;
		border: 1px solid white;
		border-radius: 10px;
		}

		input.Button:hover {
		color: red
		background: white;
		border: 1px solid white;
		}

	</style>
</head>
<body id="exit">
	
	<main>
	</main>

	<div class="aligncenter">
    		<h1> <font size="75" color="red" ><b>Stay in DFW !!!</b></font> </h1>
    		<input class="Button" type="button" value="Start Over!!!" onclick="window.location.href='http://localhost:90'" />

    	</div>
	

</body>
</html>

<!-- https://media.giphy.com/media/y18j1wxVZTWEM/giphy.gif -->