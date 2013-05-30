<? include "IncludeMe.php"; ?>
<html>
<body>

	<?php $Shows = $Schedule->getShowsOnDay("Sunday");?>
	<table style="margin: 10px 0 10px 0;" cellpadding="3" border="1" width="100%">
		<caption><h3><center>Sunday</center></h3></caption>
		<thead>
			<tr>
				<th width="10%">Air Time</th>
				<th width="10%">End Time</th>
				<th width="20%">Show Name</th>
				<th width="60%">Show Description</th>
			</tr>
		</thead>
		<tbody>
		<?php
    	if (isset($Shows)) {
        	foreach ($Shows as $Show)
        	{ ?>
       			<tr>
     				<td><?php echo $Show["AirTime"]; ?></td>
     				<td><?php echo $Show["EndTime"]; ?></td>
					<td><?php echo $Show["ShowName"]; ?></td>
     				<td><?php echo $Show["ShowDesc"]; ?></td>
     			</tr>	
   	 <?php  }	
   		}
   		else { ?>
   			<tr>
   				<td colspan="4">No Show Data Available on this day.</td>
                        </tr>
   		<? } ?>
		</tbody>
	</table>

	<?php $Shows = $Schedule->getShowsOnDay("Monday");?>
	<table style="margin: 10px 0 10px 0;" cellpadding="3" border="1" width="100%">
		<caption><h3><center>Monday</center></h3></caption>
		<thead>
			<tr>
				<th width="10%">Air Time</th>
				<th width="10%">End Time</th>
				<th width="20%">Show Name</th>
				<th width="60%">Show Description</th>
			</tr>
		</thead>
		<tbody>
		<?php
    	if (isset($Shows)) {
        	foreach ($Shows as $Show)
        	{ ?>
       			<tr>
     				<td><?php echo $Show["AirTime"]; ?></td>
     				<td><?php echo $Show["EndTime"]; ?></td>
					<td><?php echo $Show["ShowName"]; ?></td>
     				<td><?php echo $Show["ShowDesc"]; ?></td>
     			</tr>	
   	 <?php  }	
   		}
   		else { ?>
   			<tr>
   				<td colspan="4">No Show Data Available on this day.</td>
   		<? } ?>
		</tbody>
	</table>

	<?php $Shows = $Schedule->getShowsOnDay("Tuesday");?>
	<table style="margin: 10px 0 10px 0;" cellpadding="3" border="1" width="100%">
		<caption><h3><center>Tuesday</center></h3></caption>
		<thead>
			<tr>
				<th width="10%">Air Time</th>
				<th width="10%">End Time</th>
				<th width="20%">Show Name</th>
				<th width="60%">Show Description</th>
			</tr>
		</thead>
		<tbody>
		<?php
    	if (isset($Shows)) {
        	foreach ($Shows as $Show)
        	{ ?>
       			<tr>
     				<td><?php echo $Show["AirTime"]; ?></td>
     				<td><?php echo $Show["EndTime"]; ?></td>
					<td><?php echo $Show["ShowName"]; ?></td>
     				<td><?php echo $Show["ShowDesc"]; ?></td>
     			</tr>	
   	 <?php  }	
   		}
   		else { ?>
   			<tr>
   				<td colspan="4">No Show Data Available on this day.</td>
   		<? } ?>
		</tbody>
	</table>

	<?php $Shows = $Schedule->getShowsOnDay("Wednesday");?>
	<table style="margin: 10px 0 10px 0;" cellpadding="3" border="1" width="100%">
		<caption><h3><center>Wednesday</center></h3></caption>
		<thead>
			<tr>
				<th width="10%">Air Time</th>
				<th width="10%">End Time</th>
				<th width="20%">Show Name</th>
				<th width="60%">Show Description</th>
			</tr>
		</thead>
		<tbody>
		<?php
    	if (isset($Shows)) {
        	foreach ($Shows as $Show)
        	{ ?>
       			<tr>
     				<td><?php echo $Show["AirTime"]; ?></td>
     				<td><?php echo $Show["EndTime"]; ?></td>
					<td><?php echo $Show["ShowName"]; ?></td>
     				<td><?php echo $Show["ShowDesc"]; ?></td>
     			</tr>	
   	 <?php  }	
   		}
   		else { ?>
   			<tr>
   				<td colspan="4">No Show Data Available on this day.</td>
   		<? } ?>
		</tbody>
	</table>

	<?php $Shows = $Schedule->getShowsOnDay("Thursday");?>
	<table style="margin: 10px 0 10px 0;" cellpadding="3" border="1" width="100%">
		<caption><h3><center>Thursday</center></h3></caption>
		<thead>
			<tr>
				<th width="10%">Air Time</th>
				<th width="10%">End Time</th>
				<th width="20%">Show Name</th>
				<th width="60%">Show Description</th>
			</tr>
		</thead>
		<tbody>
		<?php
    	if (isset($Shows)) {
        	foreach ($Shows as $Show)
        	{ ?>
       			<tr>
     				<td><?php echo $Show["AirTime"]; ?></td>
     				<td><?php echo $Show["EndTime"]; ?></td>
					<td><?php echo $Show["ShowName"]; ?></td>
     				<td><?php echo $Show["ShowDesc"]; ?></td>
     			</tr>	
   	 <?php  }	
   		}
   		else { ?>
   			<tr>
   				<td colspan="4">No Show Data Available on this day.</td>
   		<? } ?>
		</tbody>
	</table>

	<?php $Shows = $Schedule->getShowsOnDay("Friday");?>
	<table style="margin: 10px 0 10px 0;" cellpadding="3" border="1" width="100%">
		<caption><h3><center>Friday</center></h3></caption>
		<thead>
			<tr>
				<th width="10%">Air Time</th>
				<th width="10%">End Time</th>
				<th width="20%">Show Name</th>
				<th width="60%">Show Description</th>
			</tr>
		</thead>
		<tbody>
		<?php
    	if (isset($Shows)) {
        	foreach ($Shows as $Show)
        	{ ?>
       			<tr>
     				<td><?php echo $Show["AirTime"]; ?></td>
     				<td><?php echo $Show["EndTime"]; ?></td>
					<td><?php echo $Show["ShowName"]; ?></td>
     				<td><?php echo $Show["ShowDesc"]; ?></td>
     			</tr>	
   	 <?php  }	
   		}
   		else { ?>
   			<tr>
   				<td colspan="4">No Show Data Available on this day.</td>
   		<? } ?>
		</tbody>
	</table>

	<?php $Shows = $Schedule->getShowsOnDay("Saturday");?>
	<table style="margin: 10px 0 10px 0;" cellpadding="3" border="1" width="100%">
		<caption><h3><center>Saturday</center></h3></caption>
		<thead>
			<tr>
				<th width="10%">Air Time</th>
				<th width="10%">End Time</th>
				<th width="20%">Show Name</th>
				<th width="60%">Show Description</th>
			</tr>
		</thead>
		<tbody>
		<?php
    	if (isset($Shows)) {
        	foreach ($Shows as $Show)
        	{ ?>
       			<tr>
     				<td><?php echo $Show["AirTime"]; ?></td>
     				<td><?php echo $Show["EndTime"]; ?></td>
					<td><?php echo $Show["ShowName"]; ?></td>
     				<td><?php echo $Show["ShowDesc"]; ?></td>
     			</tr>	
   	 <?php  }	
   		}
   		else { ?>
   			<tr>
   				<td colspan="4">No Show Data Available on this day.</td>
   		<? } ?>
		</tbody>
	</table>
</body>
</html>	