<?php 

	include "./IncludeMe.php";
	$showDetails = $Schedule->getShow($_GET['ID']);
	print_r($showDetails);
	//echo $showDetails[ShowName]; **/

?>

<html>
<head>
	<title>Edit Show | <?php echo $showDetails['ShowName']; ?></title>
	<script type="text/javascript" src="../includes/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    width: "1000",
    height: "150",
    menubar : false,
    statusbar : false,
    plugins: "code",
 });
</script>
</head>
<body>

	<form id="adminForm" name="editShow" action="../includes/saveShow.php" method="POST">
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
							<input type="text" name="ShowName" value="<?php echo $showDetails["ShowName"]; ?>" />
						</td>
					</tr>
					<tr>
						<td>What is the description of the show?</td>
						<td colspan="2">
							<textarea name="ShowDesc"><?php echo $showDetails['ShowDesc'];?></textarea>
						</td>
					</tr>
                                        <?php $days = array(Sunday, Monday, Tuesday, Wednesday, Thursday, Firday, Saturday); 
                                        
                                        foreach ($days as $day) { ?>
                                        <tr>
						<td>Does this show air on <?php echo $day; ?>?</td>
                                                <?php if ($showDetails[$day] = 1) { ?>
						<td>Yes<input type="radio" name="Monday" value="1" checked="yes" /></td>
						<td>No<input type="radio" name="Monday" value="0" /></td>
                                                <?php } else if ($showDetails[$day] = 0) { ?>
                                                <td>Yes<input type="radio" name="Monday" value="1" /></td>
						<td>No<input type="radio" name="Monday" value="0" checked="yes" /></td>
                                                <?php }; ?>
					</tr>
                                        <? }; ?>
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
						<td colspan="2"><input type="submit" value="Save Show" /><input type="reset" value="Clear Form" /></td>
					</tr>
				</tbody>
				<input type="text" name="ID" value="<?php echo $showDetails["ID"]; ?>" hidden />
	</form>
</body>
</html>