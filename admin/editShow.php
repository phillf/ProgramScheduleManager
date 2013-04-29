<?php 

	include "./IncludeMe.php";
	$showDetails = $Schedule->getShow($_GET['$ID']);
	print_r($showDetails);
	echo $showDetails[ShowName];

?>
	<form id="adminForm" name="addBook" action="../handlers/saveBook.php" method="POST">
		<table width="100%" cellspacing="3">
				<tbody>
					<tr>
						<td>What time does this show start?</td>
						<td>
							<select name="AirTime">
							<?php for($i = 0; $i < 24; $i++): ?>
	  							<option value="<?= $i; ?>"><?= $i % 12 ? $i % 12 : 12 ?>:00 <?= $i >= 12 ? 'pm' : 'am' ?></option>
							<?php endfor ?>
							</select>
						</td>
					<tr>
					<tr>
						<td>What time does the show end?</td>
						<td>
							<select name="EndTime">
							<?php for($i = 0; $i < 24; $i++): ?>
	  							<option value="<?= $i; ?>"><?= $i % 12 ? $i % 12 : 12 ?>:00 <?= $i >= 12 ? 'pm' : 'am' ?></option>
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
						<td>
							<input type="textarea" name="ShowDesc" value="<?php echo $showDetails["ShowDesc"]; ?>" />
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
	<br />