<? include "./IncludeMe.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>PowerCast Radio - Program Schedule</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.fancybox.js?v=2.0.6"></script>
<script src="../js/fancyFunction.js"></script>
<script src="../js/picnet.table.filter.min.js"></script>
<script src="http://www.sunsean.com/idTabs/jquery.idTabs.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var options = {
		additionalFilterTriggers: [$('#quickfind')]
	};
	$('#stripe').tableFilter(options);
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
			<?php include '../includes/static/navigation.static.php'; ?>
		</div><div class="ribTri"></div></div>
		</div>
	</div>
</div>
<div id="container">
<div id="quickFind">Quick Find: <input type="text" id="quickfind" alt="Quick Find" /></div>
	<div id="stripe">
	<table width="100%" cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th class="type-string" width="10%">Air Time</th>
				<th class="type-string" width="10%">End Time</th>
				<th class="type-string" width="20%">Show Name</th>
				<th class="type-string" width="50%">Show Description</th>
				<th width="1000%">Toolbox</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$Shows = $Schedule->getAllShows();	
        foreach ($Shows as $Show)
		{?>
	  		<tr>
     			<td><?php echo $Show["AirTime"]; ?></td>
     			<td><?php echo $Show["EndTime"]; ?></td>
				<td><?php echo $Show["ShowName"]; ?></td>
     			<td><?php echo $Show["ShowDesc"]; ?></td>
     			<td><a href="./editShow.php?ID=<?php echo $Show["ID"] ?>" target="_blank">Edit Show</a><form action="./handlers/removeShow.php" method="POST"><input type="hidden" name="ID" value="<?php echo $Show['ID'];?>"><input type="submit" value="Delete" /></form></td>	
     		</tr>
    	<? } ?>
        </tbody>
	</table>
</div>
</div>
</body>
</html>
