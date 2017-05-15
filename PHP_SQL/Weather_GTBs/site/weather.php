        <table class="weather">
            <tr>
                <th>Location</th>
                <th>Conditions</th>
		<th>Last Updated</th>
		<?php if ((isset($locations[0]['Warned'])) || (isset($locations[1]['Warned'])) || (isset($locations[2]['Warned'])) || (isset($locations[3]['Warned'])) || 
		(isset($locations[4]['Warned'])) || (isset($locations[5]['Warned'])) || (isset($locations[6]['Warned'])) || (isset($locations[7]['Warned'])) || 
		(isset($locations[8]['Warned'])) || (isset($locations[9]['Warned'])) || (isset($locations[10]['Warned'])) || (isset($locations[11]['Warned'])) || 
		(isset($locations[12]['Warned'])) || (isset($locations[13]['Warned'])) || (isset($locations[14]['Warned'])) || (isset($locations[15]['Warned'])))
		{ echo '<th>Current Alert(s)</th><th>Alert Link</th>'; }
		?>
            </tr>

            <?php foreach ($locations as $location) : ?>
            <tr>
                <th><?php echo $location['Locations']; ?></td>
                <td class="condition"><?php echo round($location['Temperature'], 0) . '&deg; and ' . $location['Conditions'] ; ?></td>
                <td class="time"><?php 
		$epoch = $location['Time']; 
		date_default_timezone_set('America/Chicago');
		echo date('Hi', $epoch) . ' CST, ' . date('m-d', $epoch);
		?></td>
                <?php  if (!isset($location['Warned'])) { 
					   } else { 
					   echo '<td class="alert">' . $location['Warned'] . '</td>
						 <td class="link">' . $location['Warning_Link'] . '</td>'; 
					   } 
                ?>
            </tr>
            <?php endforeach; ?>
        </table>
