<form action="body.php?territory_id=<?php { echo $territory_id; } ?>&vp=2" method="POST">
<input type="hidden" name="action" value="add_ID"> 
<input type="submit" value="Add ID">
</form>
<br><?php if (isset($error)) { echo '<div style="color:red; font-weight:bold">' . $error . '</div>'; } ?>
            <table>
            <tr>
                <th>UNIT</th>
                <th>ID</th>
                <th class="right">LOCATION</th>
                <th>SUN</th>
                <th>MON</th>
                <th>TUE</th>
                <th>WED</th>
                <th>THU</th>
                <th>FRI</th>
                <th>SAT</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($units as $unit) : ?>
            <tr>
                <th><?php echo $unit['UNIT_NAME']; ?></td>
                <td><?php echo $unit['UNIT_ID']; ?></td>
                <td class="right"><?php echo $unit['UNIT_LOCATION']; ?></td>
                <td class="center"><?php if ($unit['SUN'] == '1') { echo '<center>SUN</center>'; } ; ?></td>
                <td class="center"><?php if ($unit['MON'] == '1') { echo '<center>MON</center>'; } ; ?></td>
                <td class="center"><?php if ($unit['TUE'] == '1') { echo '<center>TUE</center>'; } ; ?></td>
                <td class="center"><?php if ($unit['WED'] == '1') { echo '<center>WED</center>'; } ; ?></td>
                <td class="center"><?php if ($unit['THU'] == '1') { echo '<center>THU</center>'; } ; ?></td>
                <td class="center"><?php if ($unit['FRI'] == '1') { echo '<center>FRI</center>'; } ; ?></td>
                <td class="center"><?php if ($unit['SAT'] == '1') { echo '<center>SAT</center>'; } ; ?></td>
                <td class="center">
				<form action=".?territory_id=<?php { echo $territory_id; } ?>&vp=1&del=1" method="POST">
                <input type="hidden" name="action2" value="delete_ID"> 
                    <input type="hidden" name="unit_key"
                           value="<?php echo $unit['KEY']; ?>">
                    <input type="hidden" name="unit_name"
                           value="<?php echo $unit['UNIT_NAME'] ?>">
                    <input type="submit" value="Delete ID">
                </form>
		</td>
            </tr>
            <tr>
                <td colspan="11" > Subdivisions: 
                       <?php  if ($unit['ALL_SUBS'] == '1') { echo 'All Subdivisions'; } ; ?>
                       <?php  if ($unit['TUSCALOOSA'] == '1') { echo ', Tuscaloosa'; } ; ?>
                       <?php  if ($unit['WARRIOR'] == '1') { echo ', Warrior'; } ; ?>
                       <?php  if ($unit['BROOKWOOD'] == '1') { echo ', Brookwood'; } ; ?>
                       <?php  if ($unit['ABWR'] == '1') { echo ', ABWR'; } ; ?>
                       <?php  if ($unit['NASHVILLE'] == '1') { echo ', Nashville'; } ; ?>
                       <?php  if ($unit['WALDRON'] == '1') { echo ', Waldron'; } ; ?>
                       <?php  if ($unit['AUTAUGA_CREEK'] == '1') { echo ', Autauga Creek'; } ; ?>
                       <?php  if ($unit['PORT'] == '1') { echo ', Port'; } ; ?>
                       <?php  if ($unit['HOOPER'] == '1') { echo ', Hooper'; } ; ?>
                       <?php  if ($unit['COLFAX'] == '1') { echo ', Colfax'; } ; ?>
                       <?php  if ($unit['PV'] == '1') { echo ', PV'; } ; ?>
                       <?php  if ($unit['WALLULA'] == '1') { echo ', Wallula'; } ; ?>
                       <?php  if ($unit['MILTON_FREEWATER'] == '1') { echo ', Milton-Freewater'; } ; ?>
                       <?php  if ($unit['WAL_AIR'] == '1') { echo ', Wal-Air'; } ; ?>
                       <?php  if ($unit['CONDON'] == '1') { echo ', Condon'; } ; ?>
                       <?php  if ($unit['CANTON'] == '1') { echo ', Canton'; } ; ?>
                       <?php  if ($unit['SKYLAND'] == '1') { echo ', Skyland'; } ; ?>
                       <?php  if ($unit['BOISE'] == '1') { echo ', Boise'; } ; ?>
                       <?php  if ($unit['WILDER'] == '1') { echo ', Wilder'; } ; ?>
                       <?php  if ($unit['TWIN_FALLS'] == '1') { echo ', Twin Falls'; } ; ?>
                       <?php  if ($unit['NORTHSIDE'] == '1') { echo ', Northside'; } ; ?>
                       <?php  if ($unit['RAFT_RIVER'] == '1') { echo ', Raft River'; } ; ?>
                       <?php  if ($unit['OAKLEY'] == '1') { echo ', Oakely'; } ; ?>
                       <?php  if ($unit['YELLOWSTONE'] == '1') { echo ', Yellowstone'; } ; ?>
                       <?php  if ($unit['ST_ANTHONY'] == '1') { echo ', St Anthony'; } ; ?>
                       <?php  if ($unit['GOSHEN'] == '1') { echo ', Goshen'; } ; ?>
                       <?php  if ($unit['EAST_BELT'] == '1') { echo ', East Belt'; } ; ?>
                       <?php  if ($unit['WEST_BELT'] == '1') { echo ', West Belt'; } ; ?>
                       <?php  if ($unit['OLD_BUTTE'] == '1') { echo ', Old Butte'; } ; ?>
                       <?php  if ($unit['KALAMAZOO'] == '1') { echo ', Kalamazoo'; } ; ?>
                       <?php  if ($unit['KOOSKIA'] == '1') { echo ', Kooskia'; } ; ?>
                       <?php  if ($unit['RIPARIA'] == '1') { echo ', Riparia'; } ; ?>
                       <?php  if ($unit['HERR'] == '1') { echo ', HERR'; } ; ?>
                       <?php  if ($unit['KEARNEY'] == '1') { echo ', Kearney'; } ; ?>
                       <?php  if ($unit['KANAWHA'] == '1') { echo ', Kanawha, '; } ; ?>
                       <?php  if ($unit['MULLENS'] == '1') { echo ', Mullens'; } ; ?>
                       <?php  if ($unit['HUTCHINSON'] == '1') { echo ', Hutchinson'; } ; ?>
                       <?php  if ($unit['CONWAY_SPRINGS'] == '1') { echo ', Conway Springs'; } ; ?>
                       <?php  if ($unit['KINGMAN'] == '1') { echo ', Kingman'; } ; ?>
                       <?php  if ($unit['GREAT_BEND'] == '1') { echo ', Great Bend'; } ; ?>
                       <?php  if ($unit['GENESEO'] == '1') { echo ', Geneseo'; } ; ?>
                       <?php  if ($unit['SCOTT_CITY'] == '1') { echo ', Scott City'; } ; ?>
                       <?php  if ($unit['HOISINGTON'] == '1') { echo ', Hoisington'; } ; ?>
                       <?php  if ($unit['TOWNER'] == '1') { echo ', Towner'; } ; ?>
                       <?php  if ($unit['SALINA'] == '1') { echo ', Salina'; } ; ?>
                       <?php  if ($unit['MCPHERSON'] == '1') { echo ', McPherson'; } ; ?>
                       <?php  if ($unit['NEWTON'] == '1') { echo ', Newton'; } ; ?>
                       <?php  if ($unit['HOPE'] == '1') { echo ', Hope'; } ; ?>
                       <?php  if ($unit['PRINCETON'] == '1') { echo ', Princeton'; } ; ?>
                       <?php  if ($unit['HODGE'] == '1') { echo ', Hodge'; } ; ?>
                       <?php  if ($unit['WHITEFACE'] == '1') { echo ', Whiteface'; } ; ?>
                       <?php  if ($unit['SEAGRAVES'] == '1') { echo ', Seagraves'; } ; ?>
                       <?php  if ($unit['BROADVIEW'] == '1') { echo ', Broadview'; } ; ?>
                       <?php  if ($unit['DIMMITT'] == '1') { echo ', Dimmitt'; } ; ?>
                       <?php  if ($unit['KALISPELL'] == '1') { echo ', Kalispell'; } ; ?>
                       <?php  if ($unit['EUREKA'] == '1') { echo ', Eureka'; } ; ?>
                       <?php  if ($unit['MSRR'] == '1') { echo ', MSRR'; } ; ?>
                       <?php  if ($unit['MIRAMAR'] == '1') { echo ', Miramar'; } ; ?>
                       <?php  if ($unit['ESCONDIDO'] == '1') { echo ', Escondido'; } ; ?>
                       <?php  if ($unit['PECOS_VALLEY'] == '1') { echo ', Pecos Valley'; } ; ?>
                       <?php  if ($unit['MOLINE'] == '1') { echo ', Moline'; } ; ?>
                       <?php  if ($unit['NEODESHA'] == '1') { echo ', Neodesha'; } ; ?>
                       <?php  if ($unit['CHANUTE'] == '1') { echo ', Chanute'; } ; ?>
                       <?php  if ($unit['TULSA'] == '1') { echo ', Tulsa'; } ; ?>
                       <?php  if ($unit['COFFEYVILLE'] == '1') { echo ', Coffeyville'; } ; ?>
                       <?php  if ($unit['GORILLA'] == '1') { echo ', Gorilla'; } ; ?>
                       <?php  if ($unit['SOONER'] == '1') { echo ', Sooner'; } ; ?>
                       <?php  if ($unit['COWBOY'] == '1') { echo ', Cowboy'; } ; ?>
                       <?php  if ($unit['LAWTON'] == '1') { echo ', Lawton'; } ; ?>
                       <?php  if ($unit['CHEYENNE'] == '1') { echo ', Cheyenne'; } ; ?>
                       <?php  if ($unit['DERIDDER'] == '1') { echo ', DeRidder'; } ; ?>
                       <?php  if ($unit['TXNR'] == '1') { echo ', TXNR'; } ; ?>
                       <?php  if ($unit['REDWOOD'] == '1') { echo ', Redwood'; } ; ?>
                       <?php  if ($unit['MILWAUKEE'] == '1') { echo ', Milwaukee'; } ; ?>
                       <?php  if ($unit['MADISON'] == '1') { echo ', Madison'; } ; ?>
                       <?php  if ($unit['WATERTOWN'] == '1') { echo ', Watertown'; } ; ?>
                       <?php  if ($unit['CAMBRIA'] == '1') { echo ', Cambria'; } ; ?>
                       <?php  if ($unit['OSHKOSH'] == '1') { echo ', Oshkosh'; } ; ?>
                       <?php  if ($unit['MARKESON'] == '1') { echo ', Markeson'; } ; ?>
                       <?php  if ($unit['PLYMOUTH'] == '1') { echo ', Plymouth'; } ; ?>
                       <?php  if ($unit['PRAIRIE'] == '1') { echo ', Prairie'; } ; ?>
                       <?php  if ($unit['WAUKESHA'] == '1') { echo ', Waukesha'; } ; ?>
                       <?php  if ($unit['MONROE'] == '1') { echo ', Monroe'; } ; ?>
                       <?php  if ($unit['FOX_LAKE'] == '1') { echo ', Fox Lake'; } ; ?>
                       <?php  if ($unit['ELKHORN'] == '1') { echo ', Elkhorn'; } ; ?>
                       <?php  if ($unit['REEDSBURG'] == '1') { echo ', Reedsburg'; } ; ?>
                       <?php  if ($unit['COTTAGE_GROVE'] == '1') { echo ', Cottage Grove'; } ; ?>
                       <?php  if ($unit['SHEBOYGAN'] == '1') { echo ', Sheboygan'; } ; ?>
                       <?php  if ($unit['GEAUX_GEAUX'] == '1') { echo ', Bogalusa Geuax Geaux'; } ; ?>
                </td>
            </tr>
            <tr>
                <td colspan="11">&nbsp;</td>
            </tr>
            <?php endforeach; ?>
        </table>