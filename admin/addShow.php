<? include "./IncludeMe.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>PowerCast Radio - Program Schedule</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="../includes/js/tinymce/tinymce.min.js"></script>
<script src="http://www.sunsean.com/idTabs/jquery.idTabs.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var options = {
		additionalFilterTriggers: [$('#quickfind')]
	};
	$('#stripe').tableFilter(options);
});

tinymce.init({
    selector: "textarea",
    width: "1000",
    height: "150",
    menubar : false,
    statusbar : false,
    plugins: "code",
 });
</script>
<link href="http://fonts.googleapis.com/css?family=Capriola" rel="stylesheet" type="text/css" />
<link href="../js/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<link href="../css/main.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="whiteHat"><!--<img class="logoPlacement" alt="IHCD Logo" src="images/ihcdSize.png" height="80" width="324">--><h1>PowerCast Radio - Program Schedule</h1><br />
</div>
<div id="usual1" class="usual">
<div id="sb">
	<div id="sbC">
		<div class="ribWrap"><div class="ribFro"><div class="ribTex">
			<?php include "../includes/static/navigation.static.php" ?>
		</div><div class="ribTri"></div></div>
		</div>
	</div>
</div>
<div id="container">
		<form id="adminForm" name="addStaff" action="../includes/addShow.php" method="POST">
			<table width="100%" cellspacing="3">
				<tbody>
					<tr>
						<td>What time does this show start?</td>
						<td>
							<select name="AirTime">
    						<?php for($i = 0; $i < 24; $i++): ?>
         						<option value="<?= $i; ?>:00:00" <?php if ($i == $showDetails['AirTime']) { echo 'selected'; } ?> ><?= $i % 12 ? $i % 12 : 12 ?>:00 <?= $i >= 12 ? 'pm' : 'am' ?></option>
    						<?php endfor ?>
							</select>
						</td>
					<tr>
					<tr>
						<td>What time does the show end?</td>
						<td>
							<select name="EndTime">
    						<?php for($i = 0; $i < 24; $i++): ?>
         						<option value="<?= $i; ?>:00:00" <?php if ($i == $showDetails['EndTime']) { echo 'selected'; } ?> ><?= $i % 12 ? $i % 12 : 12 ?>:00 <?= $i >= 12 ? 'pm' : 'am' ?></option>
    						<?php endfor ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>What is the show's name?</td>
						<td>
							<input type="text" name="ShowName" value="Show Name" />
						</td>
					</tr>
					<tr>
						<td>What is the description of the show?</td>
						<td colspan="2">
							<textarea name="ShowDesc">Sorry, no sohw description available. Please check back later.</textarea>
						</td>
					</tr>
					<tr>
						<td>Does this show air on Sunday?</td>
						<td>Yes<input type="radio" name="Sunday" value="1" /></td>
						<td>No<input checked="yes" type="radio" name="Sunday" value="0" /></td>
					</tr>
					<tr>
						<td>Does this show air on Monday?</td>
						<td>Yes<input type="radio" name="Monday" value="1" /></td>
						<td>No<input checked="yes" type="radio" name="Monday" value="0" /></td>
					</tr>
					<tr>
						<td>Does this show air on Tuesday?</td>
						<td>Yes<input type="radio" name="Tuesday" value="1" /></td>
						<td>No<input checked="yes" type="radio" name="Tuesday" value="0" /></td>
					</tr>
					<tr>
						<td>Does this show air on Wednesday?</td>
						<td>Yes<input type="radio" name="Wednesday" value="1" /></td>
						<td>No<input checked="yes" type="radio" name="Wednesday" value="0" /></td>
					</tr>
					<tr>
						<td>Does this show air on Thursday?</td>
						<td>Yes<input type="radio" name="Thursday" value="1" /></td>
						<td>No<input checked="yes" type="radio" name="Thursday" value="0" /></td>
					</tr>
					<tr>
						<td>Does this show air on Friday?</td>
						<td>Yes<input type="radio" name="Friday" value="1" /></td>
						<td>No<input checked="yes" type="radio" name="Friday" value="0" /></td>
					</tr>
					<tr>
						<td>Does this show air on Saturday?</td>
						<td>Yes<input type="radio" name="Saturday" value="1" /></td>
						<td>No<input checked="yes" type="radio" name="Saturday" value="0" /></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" value="Add Show" /><input type="reset" value="Clear Form" /></td>
					</tr>
				</tbody>
		</form>
</div>
</body>
</html>
