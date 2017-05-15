<?php
require_once('database.php');
require_once('functions.php');

if ($action == 'add_ID2' || $add == '1') {

	$commitID = "Commit Test";

	$NAME = filter_input(INPUT_POST, 'add_UNIT_NAME');
	$ID = filter_input(INPUT_POST, 'add_UNIT_ID');
	$LOCATION = filter_input(INPUT_POST, 'add_UNIT_LOCATION');
	//$SUN = filter_input(INPUT_POST, 'add_SUN');
	//$MON = filter_input(INPUT_POST, 'add_MON');
	//$TUE = filter_input(INPUT_POST, 'add_TUE');
	//$WED = filter_input(INPUT_POST, 'add_WED');
	//$THU = filter_input(INPUT_POST, 'add_THU');
	//$FRI = filter_input(INPUT_POST, 'add_FRI');
	//$SAT = filter_input(INPUT_POST, 'add_SAT');
	
	// Validate inputs
	if ($NAME == null || $ID == null || $LOCATION == null) {
		$error = "Insufficient ID data. Check all fields and try again.";
		include('error.php');
	} else {		
		// Add the ID to the database  
		$queryID = 'INSERT INTO  ' . $territory_id . '
					 (UNIT_NAME, UNIT_ID, UNIT_LOCATION)
				  VALUES
					 (:NAME, :ID, :LOCATION)';
		$statementID = $db->prepare($queryID);
		$statementID->bindValue(':NAME', $NAME);
		$statementID->bindValue(':ID', $ID);
		$statementID->bindValue(':LOCATION', $LOCATION);
		$statementID->execute();
		$statementID->closeCursor();

		header('Location: body.php');
	}
}
?>