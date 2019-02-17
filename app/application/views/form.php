<!DOCTYPE html>
<html>
<head>
	<title>DFW FTW</title>
	<?= style_link_tag('main') ?>
	<?= style_link_tag('form') ?>
</head>
<body id="form">

<?= $head ?>


<form>

	<h1>Tell us a little about yourself</h1>
	
	<span class="field">
		<label>What size city would you like to live in?</label>
		<select name="">
			<option value="">Very big (500,000+)</option>
			<option value="">Big (200,000-499,000)</option>
			<option value="">Average-sized (100,000-199,999)</option>
			<option value="">Smaller (fewer than 100,000)</option>
		</select>
	</span>

	<span class="field">
		<label>Are you interested in children’s events and activities?</label>
		<select name="">
			<option value="">Yes</option>
			<option value="">No</option>
		</select>
	</span>

	<span class="field">
		<label>What kind(s) of art are you interested in?</label>
		<span><input type="checkbox" name="" value=""><label>Traditional</label></span>
		<span><input type="checkbox" name="" value=""><label>Contemporary</label></span>
		<span><input type="checkbox" name="" value=""><label>Local</label></span>
		<span><input type="checkbox" name="" value=""><label>Sculpture</label></span>
		<span><input type="checkbox" name="" value=""><label>Photography</label></span>
	</span>

	<span class="field">
		<label>Are you interested in hiking and nature trails?</label>
		<select name="">
			<option value="">Yes</option>
			<option value="">No</option>
		</select>
	</span>

	<span class="field">
		<label>What sport(s) are you interested in?</label>
		<span><input type="checkbox" name="" value=""><label>Baseball</label></span>
		<span><input type="checkbox" name="" value=""><label>Soccer</label></span>
		<span><input type="checkbox" name="" value=""><label>Football</label></span>
		<span><input type="checkbox" name="" value=""><label>Hockey</label></span>
		<span><input type="checkbox" name="" value=""><label>Horseback Riding</label></span>
	</span>


	<span class="field">
		<label>What kind(s) of music are you interested in?</label>
		<span><input type="checkbox" name="" value=""><label>Local Music</label></span>
		<span><input type="checkbox" name="" value=""><label>Large Concerts</label></span>
	</span>
		

	<span class="field">
		<label>What is your preferred method of transit?</label>
		<select name="">
			<option value="">Public Transit</option>
			<option value="">Car</option>
		</select>
	</span>
	
	<span class="field">
		<label>Which industry do you work in?</label>
		<select name="">
			<option value="">Tech</option>
			<option value="">Finance</option>
			<option value="">Marketing & Communications</option>
			<option value="">Legal</option>
			<option value="">Healthcare</option>
			<option value="">Architecture & Engineering</option>
			<option value="">Manufacturing, Transportation & Construction</option>
			<option value="">Education, Non-Profit & Government</option>
			<option value="">Retail & Hospitality</option>
			<option value="">Professional Services</option>
		</select>
	</span>
	
	<input type="submit" name="">
	
</form>

</body>
</html>