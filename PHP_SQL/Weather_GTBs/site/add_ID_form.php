<h1>Add ID</h1>
<?php if (isset($error)) { echo '<div style="color:red; font-weight:bold">' . $error . '</div><br>'; } ?>
<form action="body.php?territory_id=<?php { echo $territory_id; } ?>&vp=1&add=1" method="POST">
<input type="hidden" name="action" value="add_ID2"> 

    <label>Unit Name:</label>
    <input type="text" maxlength="26" name="add_UNIT_NAME" required><br><br>

    <label>Unit ID:</label>
    <input type="text" maxlength="26" name="add_UNIT_ID" required><br><br>

    <label>Unit Location:</label>
    <input type="text" maxlength="350" style="width:225px;" name="add_UNIT_LOCATION" required><br><br>

    <label>Days of the Week:</label><br>
	<input type="checkbox" name="add_SUN" value="Sunday">Sunday<br>
	<input type="checkbox" name="add_MON" value="Monday">Monday<br>
	<input type="checkbox" name="add_TUE" value="Tuesday">Tuesday<br>
	<input type="checkbox" name="add_WED" value="Wednesday">Wednesday<br>
	<input type="checkbox" name="add_THU" value="Thursday">Thursday<br>
	<input type="checkbox" name="add_FRI" value="Friday">Friday<br>
	<input type="checkbox" name="add_SAT" value="Saturday">Saturday<br><br>

    <label>Subdivisions:</label><br>
    <?php if($territory_id == 'ABSR') : ?>
	<input type="checkbox" name="Tuscaloosa" value="Tuscaloosa">Tuscaloosa<br>
	<input type="checkbox" name="Warrior" value="Warrior">Warrior<br>
	<input type="checkbox" name="Brookwood" value="Brookwood">Brookwood<br>
	<?php elseif($territory_id == 'ABWR') : ?>
	<input type="checkbox" name="ABWR" value="ABWR" checked required>Alabama Warrior<br>
    <?php elseif($territory_id == 'ARSR') : ?>
	<input type="checkbox" name="Nashville" value="Nashville">Nashville<br>
	<input type="checkbox" name="Waldron" value="Waldron">Waldron<br>
	<?php elseif($territory_id == 'AUTR') : ?>
	<input type="checkbox" name="AUTR" value="AUTR" checked required>Autauga Creek<br>
	<?php elseif($territory_id == 'BBAY') : ?>
	<input type="checkbox" name="BBAY" value="BBAY" checked required>Bogalusa Geaux Geaux<br>
    <?php elseif($territory_id == 'BHRR') : ?>
	<input type="checkbox" name="BHRR" value="BHRR" checked required>Port<br>
	<?php elseif($territory_id == 'BLMR') : ?>
	<input type="checkbox" name="Hooper" value="Hooper">Hooper<br>
	<input type="checkbox" name="Colfax" value="Colfax">Colfax<br>
	<input type="checkbox" name="PV" value="PV">PV<br>
	<input type="checkbox" name="Wallula" value="Wallula">Wallula<br>
	<input type="checkbox" name="Milton_Freewater" value="Milton_Freewater">Milton Freewater<br>
	<input type="checkbox" name="Wal_Air" value="Wal_Air">Wal-Air<br>
	<input type="checkbox" name="Condon" value="Condon">Condon<br>
	<?php elseif($territory_id == 'BLUR') : ?>
	<input type="checkbox" name="Canton" value="Canton">Canton<br>
	<input type="checkbox" name="Skyland" value="Skyland">Skyland<br>
    <?php elseif($territory_id == 'BVRR') : ?>
	<input type="checkbox" name="Boise" value="Boise">Boise<br>
	<input type="checkbox" name="Wilder" value="Wilder">Wilder<br>
	<?php elseif($territory_id == 'EIRR') : ?>
	<input type="checkbox" name="Twin_Falls" value="Twin_Falls">Twin Falls<br>
	<input type="checkbox" name="Northside" value="Northside">Northside<br>
	<input type="checkbox" name="Raft_River" value="Raft_River">Raft River<br>
	<input type="checkbox" name="Oakley" value="Oakley">Oakley<br>
	<input type="checkbox" name="Yellowstone" value="Yellowstone">Yellowstone<br>
	<input type="checkbox" name="St_Anthony" value="St_Anthony">St Anthony<br>
	<input type="checkbox" name="Goshen" value="Goshen">Goshen<br>
	<input type="checkbox" name="East_Belt" value="East_Belt">East Belt<br>
	<input type="checkbox" name="West_Belt" value="West_Belt">West Belt<br>
	<input type="checkbox" name="Old_Butte" value="Old_Butte">Old Butte<br>
	<?php elseif($territory_id == 'GDLK') : ?>
	<input type="checkbox" name="GDLK" value="GDLK" checked required>Kalamazoo<br>
    <?php elseif($territory_id == 'GRNW') : ?>
	<input type="checkbox" name="Kooskia" value="Kooskia">Kooskia<br>
	<input type="checkbox" name="Riparia" value="Riparia">Riparia<br>
	<?php elseif($territory_id == 'HERR') : ?>
	<input type="checkbox" name="HERR" value="HERR" checked required>HERR<br>
	<?php elseif($territory_id == 'KAWR') : ?>
	<input type="checkbox" name="KAWR" value="KAWR" checked required>Kearney<br>
	<?php elseif($territory_id == 'KNWA') : ?>
	<input type="checkbox" name="Kanawha" value="Kanawha">Kanawha<br>
	<input type="checkbox" name="Mullens" value="Mullens">Mullens<br>
	<?php elseif($territory_id == 'KORR') : ?>
	<input type="checkbox" name="Hutchinson" value="Hutchinson">Hutchinson<br>
	<input type="checkbox" name="Conway_Springs" value="Conway_Springs">Conway Springs<br>
	<input type="checkbox" name="Kingman" value="Kingman">Kingman<br>
	<input type="checkbox" name="Great_Bend" value="Great_Bend">Great Bend<br>
	<input type="checkbox" name="Geneseo" value="Geneseo">Geneseo<br>
	<input type="checkbox" name="Scott_City" value="Scott_City">Scott City<br>
	<input type="checkbox" name="Hoisington" value="Hoisington">Hoisington<br>
	<input type="checkbox" name="Towner" value="Towner">Towner<br>
	<input type="checkbox" name="Salina" value="Salina">Salina<br>
	<input type="checkbox" name="McPherson" value="McPherson">McPherson<br>
	<input type="checkbox" name="Newton" value="Newton">Newton<br>
	<?php elseif($territory_id == 'LASR') : ?>
	<input type="checkbox" name="Hope" value="Hope">Hope<br>
	<input type="checkbox" name="Princeton" value="Princeton">Princeton<br>
	<input type="checkbox" name="Hodge" value="Hodge">Hodge<br>
	<?php elseif($territory_id == 'LBWR') : ?>
	<input type="checkbox" name="Whiteface" value="Whiteface">Whiteface<br>
	<input type="checkbox" name="Seagraves" value="Seagraves">Seagraves<br>
	<input type="checkbox" name="Broadview" value="Broadview">Broadview<br>
	<input type="checkbox" name="Dimmitt" value="Dimmitt">Dimmitt<br>
	<?php elseif($territory_id == 'MMTR') : ?>
	<input type="checkbox" name="Kalispell" value="Kalispell">Kalispell<br>
	<input type="checkbox" name="Eureka" value="Eureka">Eureka<br>
	<?php elseif($territory_id == 'MSRR') : ?>
	<input type="checkbox" name="MSRR" value="MSRR" checked required>Mississippi Southern<br>
	<?php elseif($territory_id == 'PSRR') : ?>
	<input type="checkbox" name="Miramar" value="Miramar">Miramar<br>
	<input type="checkbox" name="Escondido" value="Escondido">Escondido<br>
	<?php elseif($territory_id == 'PVSR') : ?>
	<input type="checkbox" name="PVSR" value="PVSR" checked required>Pecos Valley<br>
	<?php elseif($territory_id == 'SKOL') : ?>
	<input type="checkbox" name="Moline" value="Moline">Moline<br>
	<input type="checkbox" name="Neodesha" value="Neodesha">Neodesha<br>
	<input type="checkbox" name="Chanute" value="Chanute">Chanute<br>
	<input type="checkbox" name="Tulsa" value="Tulsa">Tulsa<br>
	<input type="checkbox" name="Coffeyville" value="Coffeyville">Coffeyville<br>
	<input type="checkbox" name="Gorilla" value="Gorilla">Gorilla<br>
	<?php elseif($territory_id == 'SLWC') : ?>
	<input type="checkbox" name="Sooner" value="Sooner">Sooner<br>
	<input type="checkbox" name="Cowboy" value="Cowboy">Cowboy<br>
	<input type="checkbox" name="Lawton" value="Lawton">Lawton<br>
	<?php elseif($territory_id == 'SRRR') : ?>
	<input type="checkbox" name="SRRR" value="SRRR" checked required>Cheyenne<br>
	<?php elseif($territory_id == 'TIBR') : ?>
	<input type="checkbox" name="TIBR" value="TIBR" checked> requiredDeRidder<br>
	<?php elseif($territory_id == 'TXNR') : ?>
	<input type="checkbox" name="TXNR" value="TXNR" checked required>TXNR<br>
	<?php elseif($territory_id == 'VSOR') : ?>
	<input type="checkbox" name="VSOR" value="VSOR" checked required>Redwood<br>
	<?php elseif($territory_id == 'WSOR') : ?>
	<input type="checkbox" name="Milwaukee" value="Milwaukee">Milwaukee<br>
	<input type="checkbox" name="Madison" value="Madison">Madison<br>
	<input type="checkbox" name="Watertown" value="Watertown">Watertown<br>
	<input type="checkbox" name="Cambria" value="Cambria">Cambria<br>
	<input type="checkbox" name="Oshkosh" value="Oshkosh">Oshkosh<br>
	<input type="checkbox" name="Markeson" value="Markeson">Markeson<br>
	<input type="checkbox" name="Plymouth" value="Plymouth">Plymouth<br>
	<input type="checkbox" name="Prairie" value="Prairie">Prairie<br>
	<input type="checkbox" name="Waukesha" value="Waukesha">Waukesha<br>
	<input type="checkbox" name="Monroe" value="Monroe">Monroe<br>
	<input type="checkbox" name="Fox_Lake" value="Fox_Lake">Fox Lake<br>
	<input type="checkbox" name="Elkhorn" value="Elkhorn">Elkhorn<br>
	<input type="checkbox" name="Reedsburg" value="Reedsburg">Reedsburg<br>
	<input type="checkbox" name="Cottage_Grove" value="Cottage_Grove">Cottage Grove<br>
	<input type="checkbox" name="Sheboygan" value="Sheboygan">Sheboygan<br>
	<?php else : {echo '<br>Error retrieving subdivisions.<br>Please contact site administrator.<br>';} endif; ?>
    
	<br>

    <label>&nbsp;</label>
    <input type="submit" value="Submit"><br><br><br>
</form>