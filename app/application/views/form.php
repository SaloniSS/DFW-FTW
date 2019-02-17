<!DOCTYPE html>
<html>
<head>
	<title>DFW FTW</title>
	<?= style_link_tag('main') ?>
	<?= style_link_tag('form') ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body id="form">

<?= $head ?>


<form id="mainForm" method="POST" action="store">

	<h1>Tell us a little about yourself</h1>
	
	<span class="field">
		<label>What size city would you like to live in?</label>
		<select name="size">
			<option value="3">Very big (500,000+)</option>
			<option value="2">Big (200,000-499,000)</option>
			<option value="1">Average-sized (100,000-199,999)</option>
			<option value="0">Smaller (fewer than 100,000)</option>
		</select>
	</span>

	<span class="field">
		<label>Are you interested in children’s events and activities?</label>
		<span><input type="radio" name="children" value="1" checked><label>Yes</label></span>
		<span><input type="radio" name="children" value="0"><label>No</label></span>
	</span>

	<span class="field">
		<label>What kind(s) of art are you interested in?</label>
		<span><input type="checkbox" name="art0" value="1"><label>Traditional</label></span>
		<span><input type="checkbox" name="art1" value="1"><label>Contemporary</label></span>
		<span><input type="checkbox" name="art2" value="1"><label>Local</label></span>
		<span><input type="checkbox" name="art3" value="1"><label>Sculpture</label></span>
		<span><input type="checkbox" name="art4" value="1"><label>Photography</label></span>
	</span>

	<span class="field">
		<label>Are you interested in hiking and nature trails?</label>
		<span><input type="radio" name="nature" value="1" checked><label>Yes</label></span>
		<span><input type="radio" name="nature" value="0"><label>No</label></span>
	</span>

	<span class="field">
		<label>What sport(s) are you interested in?</label>
		<span><input type="checkbox" name="sport0" value="1"><label>Baseball</label></span>
		<span><input type="checkbox" name="sport1" value="1"><label>Soccer</label></span>
		<span><input type="checkbox" name="sport2" value="1"><label>Football</label></span>
		<span><input type="checkbox" name="sport3" value="1"><label>Hockey</label></span>
		<span><input type="checkbox" name="sport4" value="1"><label>Horseback Riding</label></span>
		<span><input type="checkbox" name="sport5" value="1"><label>Basketball</label></span>
	</span>


	<span class="field">
		<label>What kind(s) of music are you interested in?</label>
		<span><input type="checkbox" name="music0" value="1"><label>Local Music</label></span>
		<span><input type="checkbox" name="music1" value="1"><label>Large Concerts</label></span>
	</span>
		

	<span class="field">
		<label>What is your preferred method of transit?</label>
		<span><input type="radio" name="transit" value="0" checked><label>Car</label></span>
		<span><input type="radio" name="transit" value="1"><label>Public Transit</label></span>
	</span>
	
	<span class="field">
		<label>Which industry do you work in?</label>
		<select name="industry">
			<option value="0">Tech</option>
			<option value="1">Finance</option>
			<option value="2">Marketing & Communications</option>
			<option value="3">Legal</option>
			<option value="4">Healthcare</option>
			<option value="5">Architecture & Engineering</option>
			<option value="6">Manufacturing, Transportation & Construction</option>
			<option value="7">Education, Non-Profit & Government</option>
			<option value="8">Retail & Hospitality</option>
			<option value="9">Professional Services</option>
		</select>
	</span>
	
	<input type="submit" name="" value="Next">

</form>

	<?= script_tag('form') ?>


</body>
</html>