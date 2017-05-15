<?php
require_once('database.php');
require_once('weather_db.php');
include('user_check.php');


$action = filter_input(INPUT_POST, 'action');

switch ( $action ) {
	case 'login':
		$uname = filter_input(INPUT_POST, 'uname');
		$pword = filter_input(INPUT_POST, 'pword');

	
		$query = "SELECT * FROM login WHERE BINARY username=:uname and BINARY password=:pword";
		$statement = $u_db->prepare($query);
		$statement->bindValue(':uname', $uname);
		$statement->bindValue(':pword', $pword);
		$statement->execute();
		$login = $statement->fetch();
		$statement->closeCursor();

		$_SESSION['login_user'] = $uname; // Initializing Session

		break;

	case 'add_ID':
		$addID2 = "1";  // If action is add_ID, give addID a value of 1
		break;
}

/*
if (isset($login['username'])) {
	//session_set_cookie_params(60, "/"); 
	//session_start();

	$error = "Success!";
} else {
	$error = "Username or Password is invalid";
}
*/
	



////////////////////
////////////////////
////////////////////


//if ($action == 'add_ID') {
//      $addID2 = "1";  // If action is add_ID, give addID a value of 1
//} 


////////////////////
////////////////////
////////////////////


// Get territory ID
if (!isset($territory_id)) {
    $territory_id = filter_input(INPUT_GET, 'territory_id');
    if ($territory_id == NULL || $territory_id == FALSE) {
        $territory_id = "ABSR";  // Default to the ABSR territory
    }
}


////////////////////
////////////////////
////////////////////

// Get viewport
if (!isset($vp)) {
    $vp = filter_input(INPUT_GET, 'vp', 
            FILTER_VALIDATE_INT);  
    if ($vp == NULL || $vp == FALSE || $vp > 2) {
        $vp = "0";  // Default to the weather viewport.  0 = weather; 1 = bulletins.
    }
}


////////////////////
////////////////////
////////////////////

if ($_GET['del'] == '1') { 

        $unit_key = filter_input(INPUT_POST, 'unit_key', FILTER_VALIDATE_INT);
	$unit_name = filter_input(INPUT_POST, 'unit_name');
	
	// Validate inputs
	if ($unit_key == null || $unit_key == false || $unit_name == null) {
		$error = 'Insufficient ID data. Check all fields and try again.<br><br>';
	} else {		
		// Delete ID from the database  
		$queryDEL = 'DELETE FROM ' . $territory_id . '
					 WHERE `KEY`=:unit_key and `UNIT_NAME`=:unit_name limit 1';
		$statementDEL = $db->prepare($queryDEL);
		$statementDEL->bindValue(':unit_key', $unit_key);
		$statementDEL->bindValue(':unit_name', $unit_name);
		$statementDEL->execute();
		$statementDEL->closeCursor();

		header('Location: body.php?territory_id='.$territory_id.'&vp=1');
	}
}


////////////////////
////////////////////
////////////////////

// Get list of all territories
$queryTables = "SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE' AND TABLE_SCHEMA='bulletins'";
$statement1 = $db->prepare($queryTables);
$statement1->execute();
$territories = $statement1->fetchAll();
$statement1->closeCursor();


// Get name for unit
$query = 'SELECT * FROM ' . $territory_id . ' ORDER BY UNIT_NAME';
$statement2 = $db->prepare($query);
$statement2->execute();
$units = $statement2->fetchAll();
$statement2->closeCursor();

// Get location info for weather
$query2 = 'SELECT * FROM ' . $territory_id;
$statement3 = $db2->prepare($query2);
$statement3->execute();
$locations = $statement3->fetchAll();
$statement3->closeCursor();


////////////////////
////////////////////
////////////////////

// Adding an ID
if ($_GET['add'] == '1') { 

	$NAME = filter_input(INPUT_POST, 'add_UNIT_NAME');
	$ID = filter_input(INPUT_POST, 'add_UNIT_ID');
	$LOCATION = filter_input(INPUT_POST, 'add_UNIT_LOCATION');
	$SUN = isset($_POST['add_SUN']);
	$MON =  isset($_POST['add_MON']);
	$TUE =  isset($_POST['add_TUE']);
	$WED =  isset($_POST['add_WED']);
	$THU = isset($_POST['add_THU']);
	$FRI =  isset($_POST['add_FRI']);
	$SAT =  isset($_POST['add_SAT']);

        // This is ugly AF.  Surely a better way to do this.
        if ($territory_id == 'ABSR') :
                $SUBS = 'TUSCALOOSA, WARRIOR, BROOKWOOD';
                if (isset($_POST['Tuscaloosa'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Warrior'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                if (isset($_POST['Brookwood'])) {  $SUB3 = '1'; } else { $SUB3 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2 . ', ' . $SUB3;
        elseif ($territory_id == 'ABWR') :
                $SUBS = 'ABWR';
                if (isset($_POST['ABWR'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; $SubError = '1'; }
                $TERR = $SUB1;
        elseif ($territory_id == 'ARSR') :
                $SUBS = 'NASHVILLE, WALDRON';
                if (isset($_POST['Nashville'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Waldron'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2;
        elseif ($territory_id == 'AUTR') :
                $SUBS = 'AUTAUGA_CREEK';
                if (isset($_POST['AUTR'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; $SubError = '1'; }
                $TERR = $SUB1;
        elseif ($territory_id == 'BBAY') :
                $SUBS = 'GEAUX_GEAUX';
                if (isset($_POST['BBAY'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; $SubError = '1'; }
                $TERR = $SUB1;
        elseif ($territory_id == 'BHRR') :
                $SUBS = 'PORT';
                if (isset($_POST['BHRR'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; $SubError = '1'; }
                $TERR = $SUB1;
        elseif ($territory_id == 'BLMR') :
                $SUBS = 'HOOPER, COLFAX, PV, WALLULA, MILTON_FREEWATER, WAL_AIR, CONDON';
                if (isset($_POST['Hooper'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Colfax'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                if (isset($_POST['PV'])) {  $SUB3 = '1'; } else { $SUB3 = '0'; }
                if (isset($_POST['Wallula'])) {  $SUB4 = '1'; } else { $SUB4 = '0'; }
                if (isset($_POST['Milton_Freewater'])) {  $SUB5 = '1'; } else { $SUB5 = '0'; }
                if (isset($_POST['Wal_Air'])) {  $SUB6 = '1'; } else { $SUB6 = '0'; }
                if (isset($_POST['Condon'])) {  $SUB7 = '1'; } else { $SUB7 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2 . ', ' . $SUB3 . ', ' . $SUB4 . ', ' . $SUB5 . ', ' . $SUB6 . ', ' . $SUB7;
        elseif ($territory_id == 'BLUR') :
                $SUBS = 'CANTON, SKYLAND';
                if (isset($_POST['Canton'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Skyland'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2;
        elseif ($territory_id == 'BVRR') :
                $SUBS = 'BOISE, WILDER';
                if (isset($_POST['Boise'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Wilder'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2;
        elseif ($territory_id == 'EIRR') :
                $SUBS = 'TWIN_FALLS, NORTHSIDE, RAFT_RIVER, OAKLEY, YELLOWSTONE, ST_ANTHONY, GOSHEN, EAST_BELT, WEST_BELT, OLD_BUTTE';
                if (isset($_POST['Twin_Falls'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Northside'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                if (isset($_POST['Raft_River'])) {  $SUB3 = '1'; } else { $SUB3 = '0'; }
                if (isset($_POST['Oakley'])) {  $SUB4 = '1'; } else { $SUB4 = '0'; }
                if (isset($_POST['Yellowstone'])) {  $SUB5 = '1'; } else { $SUB5 = '0'; }
                if (isset($_POST['St_Anthony'])) {  $SUB6 = '1'; } else { $SUB6 = '0'; }
                if (isset($_POST['Goshen'])) {  $SUB7 = '1'; } else { $SUB7 = '0'; }
                if (isset($_POST['East_Belt'])) {  $SUB8 = '1'; } else { $SUB8 = '0'; }
                if (isset($_POST['West_Belt'])) {  $SUB9 = '1'; } else { $SUB9 = '0'; }
                if (isset($_POST['Old_Butte'])) {  $SUB10 = '1'; } else { $SUB10 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2 . ', ' . $SUB3 . ', ' . $SUB4 . ', ' . $SUB5 . ', ' . $SUB6 . ', ' . $SUB7 . ', ' . $SUB8 . ', ' . $SUB9 . ', ' . $SUB10;
        elseif ($territory_id == 'GDLK') :
                $SUBS = 'KALAMAZOO';
                if (isset($_POST['GDLK'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; $SubError = '1'; }
                $TERR = $SUB1;
        elseif ($territory_id == 'GRNW') :
                $SUBS = 'KOOSKIA, RIPARIA';
                if (isset($_POST['Kooskia'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Riparia'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2;
        elseif ($territory_id == 'HERR') :
                $SUBS = 'HERR';
                if (isset($_POST['HERR'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; $SubError = '1'; }
                $TERR = $SUB1;
        elseif ($territory_id == 'KAWR') :
                $SUBS = 'KEARNEY';
                if (isset($_POST['Kooskia'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; $SubError = '1'; }
                $TERR = $SUB1;
        elseif ($territory_id == 'KNWA') :
                $SUBS = 'KANAWHA, MULLENS';
                if (isset($_POST['Kanawha'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Mullens'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2;
        elseif ($territory_id == 'KORR') :
                $SUBS = 'HUTCHINSON, CONWAY_SPRINGS, KINGMAN, GREAT_BEND, GENESEO, SCOTT_CITY, HOISINGTON, TOWNER, SALINA, MCPHERSON, NEWTON';
                if (isset($_POST['Hutchinson'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Conway_Springs'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                if (isset($_POST['Kingman'])) {  $SUB3 = '1'; } else { $SUB3 = '0'; }
                if (isset($_POST['Great_Bend'])) {  $SUB4 = '1'; } else { $SUB4 = '0'; }
                if (isset($_POST['Geneseo'])) {  $SUB5 = '1'; } else { $SUB5 = '0'; }
                if (isset($_POST['Scott_City'])) {  $SUB6 = '1'; } else { $SUB6 = '0'; }
                if (isset($_POST['Hoisington'])) {  $SUB7 = '1'; } else { $SUB7 = '0'; }
                if (isset($_POST['Towner'])) {  $SUB8 = '1'; } else { $SUB8 = '0'; }
                if (isset($_POST['Salina'])) {  $SUB9 = '1'; } else { $SUB9 = '0'; }
                if (isset($_POST['McPherson'])) {  $SUB10 = '1'; } else { $SUB10 = '0'; }
                if (isset($_POST['Newton'])) {  $SUB11 = '1'; } else { $SUB11 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2 . ', ' . $SUB3 . ', ' . $SUB4 . ', ' . $SUB5 . ', ' . $SUB6 . ', ' . $SUB7 . ', ' . $SUB8 . ', ' . $SUB9 . ', ' . $SUB10 . ', ' . $SUB11;
        elseif ($territory_id == 'LASR') :
                $SUBS = 'HOPE, PRINCETON, HODGE';
                if (isset($_POST['Hope'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Princeton'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                if (isset($_POST['Hodge'])) {  $SUB3 = '1'; } else { $SUB3 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2 . ', ' . $SUB3;
        elseif ($territory_id == 'LBWR') :
                $SUBS = 'WHITEFACE, SEAGRAVES, BROADVIEW, DIMMITT';
                if (isset($_POST['Whiteface'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Seagraves'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                if (isset($_POST['Broadview'])) {  $SUB3 = '1'; } else { $SUB3 = '0'; }
                if (isset($_POST['Dimmitt'])) {  $SUB4 = '1'; } else { $SUB4 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2 . ', ' . $SUB3 . ', ' . $SUB4;
        elseif ($territory_id == 'MMTR') :
                $SUBS = 'KALISPELL, EUREKA';
                if (isset($_POST['Kalispell'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Eureka'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2;
        elseif ($territory_id == 'MSRR') :
                $SUBS = 'MSRR';
                if (isset($_POST['MSRR'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; $SubError = '1'; }
                $TERR = $SUB1;
        elseif ($territory_id == 'PSRR') :
                $SUBS = 'MIRAMAR, ESCONDIDO';
                if (isset($_POST['Miramar'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Escondido'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2;
        elseif ($territory_id == 'PVSR') :
                $SUBS = 'PECOS_VALLEY';
                if (isset($_POST['PVSR'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; $SubError = '1'; }
                $TERR = $SUB1;
        elseif ($territory_id == 'SKOL') :
                $SUBS = 'MOLINE, NEODESHA, CHANUTE, TULSA, COFFEYVILLE, GORILLA';
                if (isset($_POST['Moline'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Neodesha'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                if (isset($_POST['Chanute'])) {  $SUB3 = '1'; } else { $SUB3 = '0'; }
                if (isset($_POST['Tulsa'])) {  $SUB4 = '1'; } else { $SUB4 = '0'; }
                if (isset($_POST['Coffeyville'])) {  $SUB5 = '1'; } else { $SUB5 = '0'; }
                if (isset($_POST['Gorilla'])) {  $SUB6 = '1'; } else { $SUB6 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2 . ', ' . $SUB3 . ', ' . $SUB4 . ', ' . $SUB5 . ', ' . $SUB6;
        elseif ($territory_id == 'SLWC') :
                $SUBS = 'SOONER, COWBOY, LAWTON';
                if (isset($_POST['Sooner'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Cowboy'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                if (isset($_POST['Lawton'])) {  $SUB3 = '1'; } else { $SUB3 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2 . ', ' . $SUB3;
        elseif ($territory_id == 'SRRR') :
                $SUBS = 'CHEYENNE';
                if (isset($_POST['SRRR'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; $SubError = '1'; }
                $TERR = $SUB1;
        elseif ($territory_id == 'TIBR') :
                $SUBS = 'DERIDDER';
                if (isset($_POST['TIBR'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; $SubError = '1'; }
                $TERR = $SUB1;
        elseif ($territory_id == 'TXNR') :
                $SUBS = 'TXNR';
                if (isset($_POST['TXNR'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; $SubError = '1'; }
                $TERR = $SUB1;
        elseif ($territory_id == 'VSOR') :
                $SUBS = 'REDWOOD';
                if (isset($_POST['VSOR'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; $SubError = '1'; }
                $TERR = $SUB1;
        elseif ($territory_id == 'WSOR') :
                $SUBS = 'MILWAUKEE, MADISON, WATERTOWN, CAMBRIA, OSHKOSH, MARKESON, PLYMOUTH, PRAIRIE, WAUKESHA, MONROE, FOX_LAKE, ELKHORN, REEDSBURG, COTTAGE_GROVE, SHEBOYGAN';
                if (isset($_POST['Milwaukee'])) {  $SUB1 = '1'; } else { $SUB1 = '0'; }
                if (isset($_POST['Madison'])) {  $SUB2 = '1'; } else { $SUB2 = '0'; }
                if (isset($_POST['Watertown'])) {  $SUB3 = '1'; } else { $SUB3 = '0'; }
                if (isset($_POST['Cambria'])) {  $SUB4 = '1'; } else { $SUB4 = '0'; }
                if (isset($_POST['Oshkosh'])) {  $SUB5 = '1'; } else { $SUB5 = '0'; }
                if (isset($_POST['Markeson'])) {  $SUB6 = '1'; } else { $SUB6 = '0'; }
                if (isset($_POST['Plymouth'])) {  $SUB7 = '1'; } else { $SUB7 = '0'; }
                if (isset($_POST['Prairie'])) {  $SUB8 = '1'; } else { $SUB8 = '0'; }
                if (isset($_POST['Waukesha'])) {  $SUB9 = '1'; } else { $SUB9 = '0'; }
                if (isset($_POST['Monroe'])) {  $SUB10 = '1'; } else { $SUB10 = '0'; }
                if (isset($_POST['Fox_Lake'])) {  $SUB11 = '1'; } else { $SUB11 = '0'; }
                if (isset($_POST['Elkhorn'])) {  $SUB12 = '1'; } else { $SUB12 = '0'; }
                if (isset($_POST['Reedsburg'])) {  $SUB13 = '1'; } else { $SUB13 = '0'; }
                if (isset($_POST['Cottage_Grove'])) {  $SUB14 = '1'; } else { $SUB14 = '0'; }
                if (isset($_POST['Sheboygan'])) {  $SUB15 = '1'; } else { $SUB15 = '0'; }
                $TERR = $SUB1 . ', ' . $SUB2 . ', ' . $SUB3 . ', ' . $SUB4 . ', ' . $SUB5 . ', ' . $SUB6 . ', ' . $SUB7 . ', ' . $SUB8 . ', ' . $SUB9 . ', ' . $SUB10 . ', ' . $SUB11 . ', ' . $SUB12 . ', ' . $SUB13 . ', ' . $SUB14 . ', ' . $SUB15;
        endif;
	
	// Validate inputs
	if ($NAME == null || $ID == null || $LOCATION == null || $SubError == '1') {
		$error = "Insufficient data. Check all fields and try again.";
	} else {		
		// Add the ID to the database  
		$queryID = 'INSERT INTO  ' . $territory_id . '
					 (UNIT_NAME, UNIT_ID, UNIT_LOCATION, SUN, MON, TUE, WED, THU, FRI, SAT, ' . $SUBS . ')
				  VALUES
					 (:NAME, :ID, :LOCATION, :SUN, :MON, :TUE, :WED, :THU, :FRI, :SAT, ' . $TERR . ')';
		$statementID = $db->prepare($queryID);
		$statementID->bindValue(':NAME', $NAME);
		$statementID->bindValue(':ID', $ID);
		$statementID->bindValue(':LOCATION', $LOCATION);
		$statementID->bindValue(':SUN', $SUN);
		$statementID->bindValue(':MON', $MON);
		$statementID->bindValue(':TUE', $TUE);
		$statementID->bindValue(':WED', $WED);
		$statementID->bindValue(':THU', $THU);
		$statementID->bindValue(':FRI', $FRI);
		$statementID->bindValue(':SAT', $SAT);
		$statementID->execute();
		$statementID->closeCursor();

                header('Location: ?territory_id=' . $territory_id . '&vp=1');
	}
}

?>