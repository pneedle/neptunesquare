<?php

function ab($aa, $bb) { 
//	$orb = ($_SESSION['orb']);
	$orb = 2;
	$x = abs($aa - $bb);
	if (((($x) > 0) && (($x) < $orb) || (($x) > (360-$orb)) && (($x) < (360+$orb)))) {
			$result = "conjunct";
	} elseif (((($x) > (60-$orb)) && (($x) < (60+$orb)) || (($x) > (300-$orb)) && (($x) < (300+$orb)))) {
			$result =  "sextile";
	}	elseif (((($x) > (90-$orb)) && (($x) < (90+$orb)) || (($x) > (270-$orb)) && (($x) < (270+$orb)))) {
			$result =  "square";
	}	elseif (((($x) > (120-$orb)) && (($x) < (120+$orb)) || (($x) > (240-$orb)) && (($x) < (240+$orb)))) {
			$result =  "trine";
	}	elseif ((($x) > (180-$orb)) && (($x) < (180+$orb))) {
			$result =  "opposite";
	} else {
			$result = NULL; 
	}
			return $result;
}

// aspect_desc($selection,$a_var[$i],$b_var[$x]) selection:
// selection: sun_pluto_opposite
// a_var: 347
// b_var: 166

/*
function aspect_desc($selection,$p1) {
	global $connection;
	$table = "ab_aspects_".$p1;
	$query = "SELECT * FROM $table";
	$result_set = db_query($query, $connection);
	confirm_query($result_set);
	while($row = mysql_fetch_array($result_set, MYSQL_ASSOC)) {
	echo $row[$selection];
	}
}
*/

function transit_desc($selection,$p1,$p2,$g) {
//	global $connection;
	$table = "transit_data";
	$s = $p1."_".$p2."_".$g;
	$query = "SELECT * FROM $table";
	$result_set = db_query($query, $connection);
	confirm_query($result_set);
	while($row = mysql_fetch_array($result_set, MYSQL_ASSOC)) {
		return $row[$s];
	}
}

?>