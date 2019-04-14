<?php
	// This file is the place to store all basic functions

	function redirect_to( $location = NULL ) {
		if ($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function confirm_query($result) {
		if (!$result) {
			die("Database query failed: " . mysql_error());
		}
		
//		echo "successfully queried database";
	}

/*		
	function get_subject_by_id($subject_id) {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM subjects ";
		$query .= "WHERE id=" . $subject_id ." ";
		$query .= "LIMIT 1";
		$result_set = mysql_query($query, $connection);
		confirm_query($result_set);
		// REMEMBER:
		// if no rows are returned, fetch_array will return false
		if ($subject = mysql_fetch_array($result_set)) {
			return $subject;
		} else {
			return NULL;
		}
	}

	function get_page_by_id($page_id) {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM pages ";
		$query .= "WHERE id=" . $page_id ." ";
		$query .= "LIMIT 1";
		$result_set = mysql_query($query, $connection);
		confirm_query($result_set);
		// REMEMBER:
		// if no rows are returned, fetch_array will return false
		if ($page = mysql_fetch_array($result_set)) {
			return $page;
		} else {
			return NULL;
		}
	}
*/

// Sun Sign Long calculations
function sunSignLong($natal_sun_sign){
		if ($natal_sun_sign == "ARI") {	
				$result = "Aries";
		} elseif ($natal_sun_sign == "TAU") { 
				$result = "Taurus";
		} elseif ($natal_sun_sign == "GEM") {
				$result = "Gemini";
		} elseif ($natal_sun_sign == "CAN") {
				$result = "Cancer";
		} elseif ($natal_sun_sign == "LEO") {
				$result = "Leo";
		} elseif ($natal_sun_sign == "VIR") {
				$result = "Virgo";
		} elseif ($natal_sun_sign == "LIB") {
				$result = "Libra";
		} elseif ($natal_sun_sign == "SCO") {
				$result = "Scorpio";
		} elseif ($natal_sun_sign == "SAG") {
				$result = "Sagittarius";
		} elseif ($natal_sun_sign == "CAP") {
				$result = "Capricorn";
		} elseif ($natal_sun_sign == "AQU") {
				$result = "Aquarius";
		} elseif ($natal_sun_sign == "PIS") { 
				$result = "Pisces"; 
		} else {
				echo "check Sun data"; 
		} return $result;
}
	
function moonSignLong($natal_moon_sign){
		if ($natal_moon_sign == "ARI") {
				$result = "Aries";
		} elseif ($natal_moon_sign == "TAU") { 
				$result = "Taurus";
		} elseif ($natal_moon_sign == "GEM") {
				$result = "Gemini";
		} elseif ($natal_moon_sign == "CAN") {
				$result = "Cancer";
		} elseif ($natal_moon_sign == "LEO") {
				$result = "Leo";
		} elseif ($natal_moon_sign == "VIR") {
				$result = "Virgo";
		} elseif ($natal_moon_sign == "LIB") {
				$result = "Libra";
		} elseif ($natal_moon_sign == "SCO") {
				$result = "Scorpio";
		} elseif ($natal_moon_sign == "SAG") {
				$result = "Sagittarius";
		} elseif ($natal_moon_sign == "CAP") {
				$result = "Capricorn";
		} elseif ($natal_moon_sign == "AQU") {
				$result = "Aquarius";
		} elseif ($natal_moon_sign == "PIS") { 
				$result = "Pisces"; 
		} else {
				echo "check Moon data";
		} return $result;
}

function mercurySignLong($natal_mercury_sign){
			if ($natal_mercury_sign == "ARI") {	
					$result = "Aries";
			} elseif ($natal_mercury_sign == "TAU") { 
					$result = "Taurus";
			} elseif ($natal_mercury_sign == "GEM") {
					$result = "Gemini";
			} elseif ($natal_mercury_sign == "CAN") {
					$result = "Cancer";
			} elseif ($natal_mercury_sign == "LEO") {
					$result = "Leo";
			} elseif ($natal_mercury_sign == "VIR") {
					$result = "Virgo";
			} elseif ($natal_mercury_sign == "LIB") {
					$result = "Libra";
			} elseif ($natal_mercury_sign == "SCO") {
					$result = "Scorpio";
			} elseif ($natal_mercury_sign == "SAG") {
					$result = "Sagittarius";
			} elseif ($natal_mercury_sign == "CAP") {
					$result = "Capricorn";
			} elseif ($natal_mercury_sign == "AQU") {
					$result = "Aquarius";
			} elseif ($natal_mercury_sign == "PIS") { 
					$result = "Pisces"; 
			} else {
					echo "check Mercury data";
			} return $result;
}
	
function venusSignLong($natal_venus_sign){
			if ($natal_venus_sign == "ARI") {	
					$result = "Aries";
			} elseif ($natal_venus_sign == "TAU") { 
					$result = "Taurus";
			} elseif ($natal_venus_sign == "GEM") {
					$result = "Gemini";
			} elseif ($natal_venus_sign == "CAN") {
					$result = "Cancer";
			} elseif ($natal_venus_sign == "LEO") {
					$result = "Leo";
			} elseif ($natal_venus_sign == "VIR") {
					$result = "Virgo";
			} elseif ($natal_venus_sign == "LIB") {
					$result = "Libra";
			} elseif ($natal_venus_sign == "SCO") {
					$result = "Scorpio";
			} elseif ($natal_venus_sign == "SAG") {
					$result = "Sagittarius";
			} elseif ($natal_venus_sign == "CAP") {
					$result = "Capricorn";
			} elseif ($natal_venus_sign == "AQU") {
					$result = "Aquarius";
			} elseif ($natal_venus_sign == "PIS") { 
					$result = "Pisces"; 
			} else {
					echo "check Venus data";
			} return $result;
}
	
function marsSignLong($natal_mars_sign){
			if ($natal_mars_sign == "ARI") {	
					$result = "Aries";
			} elseif ($natal_mars_sign == "TAU") { 
					$result = "Taurus";
			} elseif ($natal_mars_sign == "GEM") {
					$result = "Gemini";
			} elseif ($natal_mars_sign == "CAN") {
					$result = "Cancer";
			} elseif ($natal_mars_sign == "LEO") {
					$result = "Leo";
			} elseif ($natal_mars_sign == "VIR") {
					$result = "Virgo";
			} elseif ($natal_mars_sign == "LIB") {
					$result = "Libra";
			} elseif ($natal_mars_sign == "SCO") {
					$result = "Scorpio";
			} elseif ($natal_mars_sign == "SAG") {
					$result = "Sagittarius";
			} elseif ($natal_mars_sign == "CAP") {
					$result = "Capricorn";
			} elseif ($natal_mars_sign == "AQU") {
					$result = "Aquarius";
			} elseif ($natal_mars_sign == "PIS") { 
					$result = "Pisces"; 
			} else {
					echo "check Mars data";
			} return $result;
}
	
function jupiterSignLong($natal_jupiter_sign){
			if ($natal_jupiter_sign == "ARI") {	
					$result = "Aries";
			} elseif ($natal_jupiter_sign == "TAU") { 
					$result = "Taurus";
			} elseif ($natal_jupiter_sign == "GEM") {
					$result = "Gemini";
			} elseif ($natal_jupiter_sign == "CAN") {
					$result = "Cancer";
			} elseif ($natal_jupiter_sign == "LEO") {
					$result = "Leo";
			} elseif ($natal_jupiter_sign == "VIR") {
					$result = "Virgo";
			} elseif ($natal_jupiter_sign == "LIB") {
					$result = "Libra";
			} elseif ($natal_jupiter_sign == "SCO") {
					$result = "Scorpio";
			} elseif ($natal_jupiter_sign == "SAG") {
					$result = "Sagittarius";
			} elseif ($natal_jupiter_sign == "CAP") {
					$result = "Capricorn";
			} elseif ($natal_jupiter_sign == "AQU") {
					$result = "Aquarius";
			} elseif ($natal_jupiter_sign == "PIS") { 
					$result = "Pisces"; 
			} else {
					echo "check Jupiter data";
			} return $result;
}

function saturnSignLong($natal_saturn_sign){
			if ($natal_saturn_sign == "ARI") {	
					$result = "Aries";
			} elseif ($natal_saturn_sign == "TAU") { 
					$result = "Taurus";
			} elseif ($natal_saturn_sign == "GEM") {
					$result = "Gemini";
			} elseif ($natal_saturn_sign == "CAN") {
					$result = "Cancer";
			} elseif ($natal_saturn_sign == "LEO") {
					$result = "Leo";
			} elseif ($natal_saturn_sign == "VIR") {
					$result = "Virgo";
			} elseif ($natal_saturn_sign == "LIB") {
					$result = "Libra";
			} elseif ($natal_saturn_sign == "SCO") {
					$result = "Scorpio";
			} elseif ($natal_saturn_sign == "SAG") {
					$result = "Sagittarius";
			} elseif ($natal_saturn_sign == "CAP") {
					$result = "Capricorn";
			} elseif ($natal_saturn_sign == "AQU") {
					$result = "Aquarius";
			} elseif ($natal_saturn_sign == "PIS") { 
					$result = "Pisces"; 
			} else {
					echo "check Saturn data";
			} return $result;
}
	
function uranusSignLong($natal_uranus_sign){
			if ($natal_uranus_sign == "ARI") {	
					$result = "Aries";
			} elseif ($natal_uranus_sign == "TAU") { 
					$result = "Taurus";
			} elseif ($natal_uranus_sign == "GEM") {
					$result = "Gemini";
			} elseif ($natal_uranus_sign == "CAN") {
					$result = "Cancer";
			} elseif ($natal_uranus_sign == "LEO") {
					$result = "Leo";
			} elseif ($natal_uranus_sign == "VIR") {
					$result = "Virgo";
			} elseif ($natal_uranus_sign == "LIB") {
					$result = "Libra";
			} elseif ($natal_uranus_sign == "SCO") {
					$result = "Scorpio";
			} elseif ($natal_uranus_sign == "SAG") {
					$result = "Sagittarius";
			} elseif ($natal_uranus_sign == "CAP") {
					$result = "Capricorn";
			} elseif ($natal_uranus_sign == "AQU") {
					$result = "Aquarius";
			} elseif ($natal_uranus_sign == "PIS") { 
					$result = "Pisces"; 
			} else {
					echo "check Uranus data";
			} return $result;
}
	
function neptuneSignLong($natal_neptune_sign){
			if ($natal_neptune_sign == "ARI") {	
					$result = "Aries";
			} elseif ($natal_neptune_sign == "TAU") { 
					$result = "Taurus";
			} elseif ($natal_neptune_sign == "GEM") {
					$result = "Gemini";
			} elseif ($natal_neptune_sign == "CAN") {
					$result = "Cancer";
			} elseif ($natal_neptune_sign == "LEO") {
					$result = "Leo";
			} elseif ($natal_neptune_sign == "VIR") {
					$result = "Virgo";
			} elseif ($natal_neptune_sign == "LIB") {
					$result = "Libra";
			} elseif ($natal_neptune_sign == "SCO") {
					$result = "Scorpio";
			} elseif ($natal_neptune_sign == "SAG") {
					$result = "Sagittarius";
			} elseif ($natal_neptune_sign == "CAP") {
					$result = "Capricorn";
			} elseif ($natal_neptune_sign == "AQU") {
					$result = "Aquarius";
			} elseif ($natal_neptune_sign == "PIS") { 
					$result = "Pisces"; 
			} else {
					echo "check Neptune data";
			} return $result;
}
	
function plutoSignLong($natal_pluto_sign){
			if ($natal_pluto_sign == "ARI") {	
					$result = "Aries";
			} elseif ($natal_pluto_sign == "TAU") { 
					$result = "Taurus";
			} elseif ($natal_pluto_sign == "GEM") {
					$result = "Gemini";
			} elseif ($natal_pluto_sign == "CAN") {
					$result = "Cancer";
			} elseif ($natal_pluto_sign == "LEO") {
					$result = "Leo";
			} elseif ($natal_pluto_sign == "VIR") {
					$result = "Virgo";
			} elseif ($natal_pluto_sign == "LIB") {
					$result = "Libra";
			} elseif ($natal_pluto_sign == "SCO") {
					$result = "Scorpio";
			} elseif ($natal_pluto_sign == "SAG") {
					$result = "Sagittarius";
			} elseif ($natal_pluto_sign == "CAP") {
					$result = "Capricorn";
			} elseif ($natal_pluto_sign == "AQU") {
					$result = "Aquarius";
			} elseif ($natal_pluto_sign == "PIS") { 
					$result = "Pisces"; 
			} else {
					echo "check Pluto data";
			} return $result;
}

function nnodeSignLong($natal_nnode_sign){
			if ($natal_nnode_sign == "ARI") {	
					$result = "Aries";
			} elseif ($natal_nnode_sign == "TAU") { 
					$result = "Taurus";
			} elseif ($natal_nnode_sign == "GEM") {
					$result = "Gemini";
			} elseif ($natal_nnode_sign == "CAN") {
					$result = "Cancer";
			} elseif ($natal_nnode_sign == "LEO") {
					$result = "Leo";
			} elseif ($natal_nnode_sign == "VIR") {
					$result = "Virgo";
			} elseif ($natal_nnode_sign == "LIB") {
					$result = "Libra";
			} elseif ($natal_nnode_sign == "SCO") {
					$result = "Scorpio";
			} elseif ($natal_nnode_sign == "SAG") {
					$result = "Sagittarius";
			} elseif ($natal_nnode_sign == "CAP") {
					$result = "Capricorn";
			} elseif ($natal_nnode_sign == "AQU") {
					$result = "Aquarius";
			} elseif ($natal_nnode_sign == "PIS") { 
					$result = "Pisces"; 
			} else {
					echo "check North Node data";
			} return $result;
}

function ascSignLong($natal_asc_sign){
			if ($natal_asc_sign == "ARI") {	
					$result = "Aries";
			} elseif ($natal_asc_sign == "TAU") { 
					$result = "Taurus";
			} elseif ($natal_asc_sign == "GEM") {
					$result = "Gemini";
			} elseif ($natal_asc_sign == "CAN") {
					$result = "Cancer";
			} elseif ($natal_asc_sign == "LEO") {
					$result = "Leo";
			} elseif ($natal_asc_sign == "VIR") {
					$result = "Virgo";
			} elseif ($natal_asc_sign == "LIB") {
					$result = "Libra";
			} elseif ($natal_asc_sign == "SCO") {
					$result = "Scorpio";
			} elseif ($natal_asc_sign == "SAG") {
					$result = "Sagittarius";
			} elseif ($natal_asc_sign == "CAP") {
					$result = "Capricorn";
			} elseif ($natal_asc_sign == "AQU") {
					$result = "Aquarius";
			} elseif ($natal_asc_sign == "PIS") { 
					$result = "Pisces"; 
			} else {
					echo "check Ascendent data";
			} return $result;
}

function mcSignLong($natal_mc_sign){
			if ($natal_mc_sign == "ARI") {	
					$result = "Aries";
			} elseif ($natal_mc_sign == "TAU") { 
					$result = "Taurus";
			} elseif ($natal_mc_sign == "GEM") {
					$result = "Gemini";
			} elseif ($natal_mc_sign == "CAN") {
					$result = "Cancer";
			} elseif ($natal_mc_sign == "LEO") {
					$result = "Leo";
			} elseif ($natal_mc_sign == "VIR") {
					$result = "Virgo";
			} elseif ($natal_mc_sign == "LIB") {
					$result = "Libra";
			} elseif ($natal_mc_sign == "SCO") {
					$result = "Scorpio";
			} elseif ($natal_mc_sign == "SAG") {
					$result = "Sagittarius";
			} elseif ($natal_mc_sign == "CAP") {
					$result = "Capricorn";
			} elseif ($natal_mc_sign == "AQU") {
					$result = "Aquarius";
			} elseif ($natal_mc_sign == "PIS") { 
					$result = "Pisces"; 
			} else {
					echo "check Mid-heaven data";
			} return $result;
}
	
// absoulute degree calculations
function sunAngle($natal_sun_sign, $natal_sun_degree) {
	if ($natal_sun_sign == "ARI") {	
			$result = (0 + $natal_sun_degree);
		} elseif ($natal_sun_sign == "TAU") { 
			$result = (30 + $natal_sun_degree);
		} elseif ($natal_sun_sign == "GEM") {
			$result = (60 + $natal_sun_degree);
		} elseif ($natal_sun_sign == "CAN") {
			$result = (90 + $natal_sun_degree);
		} elseif ($natal_sun_sign == "LEO") {
			$result = (120 + $natal_sun_degree);
		} elseif ($natal_sun_sign == "VIR") {
			$result = (150 + $natal_sun_degree);
		} elseif ($natal_sun_sign == "LIB") {
			$result = (180 + $natal_sun_degree);
		} elseif ($natal_sun_sign == "SCO") {
			$result = (210 + $natal_sun_degree);
		} elseif ($natal_sun_sign == "SAG") {
			$result = (240 + $natal_sun_degree);
		} elseif ($natal_sun_sign == "CAP") {
			$result = (270 + $natal_sun_degree);
		} elseif ($natal_sun_sign == "AQU") {
			$result = (300 + $natal_sun_degree);
		} elseif ($natal_sun_sign == "PIS")  { 
			$result = (330 + $natal_sun_degree); 
		} else {echo "check Moon data";
	}
return $result;
}

function moonAngle($natal_moon_sign, $natal_moon_degree) {
	if ($natal_moon_sign == "ARI") {	
		$result = (0 + $natal_moon_degree);
	} elseif ($natal_moon_sign == "TAU") { 
		$result = (30 + $natal_moon_degree);
	} elseif ($natal_moon_sign == "GEM") {
		$result = (60 + $natal_moon_degree);
	} elseif ($natal_moon_sign == "CAN") {
		$result = (90 + $natal_moon_degree);
	} elseif ($natal_moon_sign == "LEO") {
		$result = (120 + $natal_moon_degree);
	} elseif ($natal_moon_sign == "VIR") {
		$result = (150 + $natal_moon_degree);
	} elseif ($natal_moon_sign == "LIB") {
		$result = (180 + $natal_moon_degree);
	} elseif ($natal_moon_sign == "SCO") {
		$result = (210 + $natal_moon_degree);
	} elseif ($natal_moon_sign == "SAG") {
		$result = (240 + $natal_moon_degree);
	} elseif ($natal_moon_sign == "CAP") {
		$result = (270 + $natal_moon_degree);
	} elseif ($natal_moon_sign == "AQU") {
		$result = (300 + $natal_moon_degree);
	} elseif ($natal_moon_sign == "PIS") { 
		$result = (330 + $natal_moon_degree); 
	} else {
		echo "check Moon data";
	}
return $result;
}

function mercuryAngle($natal_mercury_sign, $natal_mercury_degree) {
	if ($natal_mercury_sign == "ARI") {	
			$result = (0 + $natal_mercury_degree);
		} elseif ($natal_mercury_sign == "TAU") { 
			$result = (30 + $natal_mercury_degree);
		} elseif ($natal_mercury_sign == "GEM") {
			$result = (60 + $natal_mercury_degree);
		} elseif ($natal_mercury_sign == "CAN") {
			$result = (90 + $natal_mercury_degree);
		} elseif ($natal_mercury_sign == "LEO") {
			$result = (120 + $natal_mercury_degree);
		} elseif ($natal_mercury_sign == "VIR") {
			$result = (150 + $natal_mercury_degree);
		} elseif ($natal_mercury_sign == "LIB") {
			$result = (180 + $natal_mercury_degree);
		} elseif ($natal_mercury_sign == "SCO") {
			$result = (210 + $natal_mercury_degree);
		} elseif ($natal_mercury_sign == "SAG") {
			$result = (240 + $natal_mercury_degree);
		} elseif ($natal_mercury_sign == "CAP") {
			$result = (270 + $natal_mercury_degree);
		} elseif ($natal_mercury_sign == "AQU") {
			$result = (300 + $natal_mercury_degree);
		} elseif ($natal_mercury_sign == "PIS")  { 
			$result = (330 + $natal_mercury_degree); 
		} else {echo "check Mercury data"; 
	}
return $result;
}

function venusAngle($natal_venus_sign, $venus_degree) {
	if ($natal_venus_sign == "ARI") {	
			$result = (0 + $venus_degree);
		} elseif ($natal_venus_sign == "TAU") { 
			$result = (30 + $venus_degree);
		} elseif ($natal_venus_sign == "GEM") {
			$result = (60 + $venus_degree);
		} elseif ($natal_venus_sign == "CAN") {
			$result = (90 + $venus_degree);
		} elseif ($natal_venus_sign == "LEO") {
			$result = (120 + $venus_degree);
		} elseif ($natal_venus_sign == "VIR") {
			$result = (150 + $venus_degree);
		} elseif ($natal_venus_sign == "LIB") {
			$result = (180 + $venus_degree);
		} elseif ($natal_venus_sign == "SCO") {
			$result = (210 + $venus_degree);
		} elseif ($natal_venus_sign == "SAG") {
			$result = (240 + $venus_degree);
		} elseif ($natal_venus_sign == "CAP") {
			$result = (270 + $venus_degree);
		} elseif ($natal_venus_sign == "AQU") {
			$result = (300 + $venus_degree);
		} elseif ($natal_venus_sign == "PIS")  { 
			$result = (330 + $venus_degree); 
		} else {echo "check Venus data";
	}
return $result;
}

function marsAngle($natal_mars_sign, $mars_degree) {
	if ($natal_mars_sign == "ARI") {	
			$result = (0 + $mars_degree);
		} elseif ($natal_mars_sign == "TAU") { 
			$result = (30 + $mars_degree);
		} elseif ($natal_mars_sign == "GEM") {
			$result = (60 + $mars_degree);
		} elseif ($natal_mars_sign == "CAN") {
			$result = (90 + $mars_degree);
		} elseif ($natal_mars_sign == "LEO") {
			$result = (120 + $mars_degree);
		} elseif ($natal_mars_sign == "VIR") {
			$result = (150 + $mars_degree);
		} elseif ($natal_mars_sign == "LIB") {
			$result = (180 + $mars_degree);
		} elseif ($natal_mars_sign == "SCO") {
			$result = (210 + $mars_degree);
		} elseif ($natal_mars_sign == "SAG") {
			$result = (240 + $mars_degree);
		} elseif ($natal_mars_sign == "CAP") {
			$result = (270 + $mars_degree);
		} elseif ($natal_mars_sign == "AQU") {
			$result = (300 + $mars_degree);
		} elseif ($natal_mars_sign == "PIS")  { 
			$result = (330 + $mars_degree); 
		} else {echo "check Mars data";
	}
return $result;
}

function jupiterAngle($natal_jupiter_sign, $jupiter_degree) {
	if ($natal_jupiter_sign == "ARI") {	
			$result = (0 + $jupiter_degree);
		} elseif ($natal_jupiter_sign == "TAU") { 
			$result = (30 + $jupiter_degree);
		} elseif ($natal_jupiter_sign == "GEM") {
			$result = (60 + $jupiter_degree);
		} elseif ($natal_jupiter_sign == "CAN") {
			$result = (90 + $jupiter_degree);
		} elseif ($natal_jupiter_sign == "LEO") {
			$result = (120 + $jupiter_degree);
		} elseif ($natal_jupiter_sign == "VIR") {
			$result = (150 + $jupiter_degree);
		} elseif ($natal_jupiter_sign == "LIB") {
			$result = (180 + $jupiter_degree);
		} elseif ($natal_jupiter_sign == "SCO") {
			$result = (210 + $jupiter_degree);
		} elseif ($natal_jupiter_sign == "SAG") {
			$result = (240 + $jupiter_degree);
		} elseif ($natal_jupiter_sign == "CAP") {
			$result = (270 + $jupiter_degree);
		} elseif ($natal_jupiter_sign == "AQU") {
			$result = (300 + $jupiter_degree);
		} elseif ($natal_jupiter_sign == "PIS")  { 
			$result = (330 + $jupiter_degree); 
		} else {echo "check Jupiter data";
	}
return $result;
}

function saturnAngle($natal_saturn_sign, $saturn_degree) {
	if ($natal_saturn_sign == "ARI") {	
			$result = (0 + $saturn_degree);
		} elseif ($natal_saturn_sign == "TAU") { 
			$result = (30 + $saturn_degree);
		} elseif ($natal_saturn_sign == "GEM") {
			$result = (60 + $saturn_degree);
		} elseif ($natal_saturn_sign == "CAN") {
			$result = (90 + $saturn_degree);
		} elseif ($natal_saturn_sign == "LEO") {
			$result = (120 + $saturn_degree);
		} elseif ($natal_saturn_sign == "VIR") {
			$result = (150 + $saturn_degree);
		} elseif ($natal_saturn_sign == "LIB") {
			$result = (180 + $saturn_degree);
		} elseif ($natal_saturn_sign == "SCO") {
			$result = (210 + $saturn_degree);
		} elseif ($natal_saturn_sign == "SAG") {
			$result = (240 + $saturn_degree);
		} elseif ($natal_saturn_sign == "CAP") {
			$result = (270 + $saturn_degree);
		} elseif ($natal_saturn_sign == "AQU") {
			$result = (300 + $saturn_degree);
		} elseif ($natal_saturn_sign == "PIS")  { 
			$result = (330 + $saturn_degree); 
		} else {
			echo "check Saturn data";
	}
return $result;
}

function uranusAngle($natal_uranus_sign, $uranus_degree) {
	if ($natal_uranus_sign == "ARI") {	
			$result = (0 + $uranus_degree);
		} elseif ($natal_uranus_sign == "TAU") { 
			$result = (30 + $uranus_degree);
		} elseif ($natal_uranus_sign == "GEM") {
			$result = (60 + $uranus_degree);
		} elseif ($natal_uranus_sign == "CAN") {
			$result = (90 + $uranus_degree);
		} elseif ($natal_uranus_sign == "LEO") {
			$result = (120 + $uranus_degree);
		} elseif ($natal_uranus_sign == "VIR") {
			$result = (150 + $uranus_degree);
		} elseif ($natal_uranus_sign == "LIB") {
			$result = (180 + $uranus_degree);
		} elseif ($natal_uranus_sign == "SCO") {
			$result = (210 + $uranus_degree);
		} elseif ($natal_uranus_sign == "SAG") {
			$result = (240 + $uranus_degree);
		} elseif ($natal_uranus_sign == "CAP") {
			$result = (270 + $uranus_degree);
		} elseif ($natal_uranus_sign == "AQU") {
			$result = (300 + $uranus_degree);
		} elseif ($natal_uranus_sign == "PIS") { 
			$result = (330 + $uranus_degree); 
		} else {
			echo "check Uranus data";
		}
return $result;
}

function neptuneAngle($natal_neptune_sign, $neptune_degree) {
	if ($natal_neptune_sign == "ARI") {	
			$result = (0 + $neptune_degree);
		} elseif ($natal_neptune_sign == "TAU") { 
			$result = (30 + $neptune_degree);
		} elseif ($natal_neptune_sign == "GEM") {
			$result = (60 + $neptune_degree);
		} elseif ($natal_neptune_sign == "CAN") {
			$result = (90 + $neptune_degree);
		} elseif ($natal_neptune_sign == "LEO") {
			$result = (120 + $neptune_degree);
		} elseif ($natal_neptune_sign == "VIR") {
			$result = (150 + $neptune_degree);
		} elseif ($natal_neptune_sign == "LIB") {
			$result = (180 + $neptune_degree);
		} elseif ($natal_neptune_sign == "SCO") {
			$result = (210 + $neptune_degree);
		} elseif ($natal_neptune_sign == "SAG") {
			$result = (240 + $neptune_degree);
		} elseif ($natal_neptune_sign == "CAP") {
			$result = (270 + $neptune_degree);
		} elseif ($natal_neptune_sign == "AQU") {
			$result = (300 + $neptune_degree);
		} elseif ($natal_neptune_sign == "PIS") { 
			$result = (330 + $neptune_degree); 
		} else {
			echo "check Neptune data"; 
	}
return $result;
}

function plutoAngle($natal_pluto_sign, $pluto_degree) {
	if ($natal_pluto_sign == "ARI") {	
		$result = (0 + $pluto_degree);
	} elseif ($natal_pluto_sign == "TAU") { 
		$result = (30 + $pluto_degree);
	} elseif ($natal_pluto_sign == "GEM") {
		$result = (60 + $pluto_degree);
	} elseif ($natal_pluto_sign == "CAN") {
		$result = (90 + $pluto_degree);
	} elseif ($natal_pluto_sign == "LEO") {
		$result = (120 + $pluto_degree);
	} elseif ($natal_pluto_sign == "VIR") {
		$result = (150 + $pluto_degree);
	} elseif ($natal_pluto_sign == "LIB") {
		$result = (180 + $pluto_degree);
	} elseif ($natal_pluto_sign == "SCO") {
		$result = (210 + $pluto_degree);
	} elseif ($natal_pluto_sign == "SAG") {
		$result = (240 + $pluto_degree);
	} elseif ($natal_pluto_sign == "CAP") {
		$result = (270 + $pluto_degree);
	} elseif ($natal_pluto_sign == "AQU") {
		$result = (300 + $pluto_degree);
	} elseif ($natal_pluto_sign == "PIS") { 
		$result = (330 + $pluto_degree); 
	} else {
		echo "check Pluto data"; 
	}
return $result;
}
	
function nnodeAngle($natal_nnode_sign, $nnode_degree) {
	if ($natal_nnode_sign == "ARI") {	
		$result = (0 + $nnode_degree);
	} elseif ($natal_nnode_sign == "TAU") { 
		$result = (30 + $nnode_degree);
	} elseif ($natal_nnode_sign == "GEM") {
		$result = (60 + $nnode_degree);
	} elseif ($natal_nnode_sign == "CAN") {
		$result = (90 + $nnode_degree);
	} elseif ($natal_nnode_sign == "LEO") {
		$result = (120 + $nnode_degree);
	} elseif ($natal_nnode_sign == "VIR") {
		$result = (150 + $nnode_degree);
	} elseif ($natal_nnode_sign == "LIB") {
		$result = (180 + $nnode_degree);
	} elseif ($natal_nnode_sign == "SCO") {
		$result = (210 + $nnode_degree);
	} elseif ($natal_nnode_sign == "SAG") {
		$result = (240 + $nnode_degree);
	} elseif ($natal_nnode_sign == "CAP") {
		$result = (270 + $nnode_degree);
	} elseif ($natal_nnode_sign == "AQU") {
		$result = (300 + $nnode_degree);
	} elseif ($natal_nnode_sign == "PIS") { 
		$result = (330 + $nnode_degree); 
	} else {
		echo "check North Node data"; 
	}
return $result;
}

// house cups angles
function ascAngle($natal_asc_sign, $asc_degree) {
	if ($natal_asc_sign == "ARI") {	
		$result = (0 + $asc_degree);
	} elseif ($natal_asc_sign == "TAU") { 
		$result = (30 + $asc_degree);
	} elseif ($natal_asc_sign == "GEM") {
		$result = (60 + $asc_degree);
	} elseif ($natal_asc_sign == "CAN") {
		$result = (90 + $asc_degree);
	} elseif ($natal_asc_sign == "LEO") {
		$result = (120 + $asc_degree);
	} elseif ($natal_asc_sign == "VIR") {
		$result = (150 + $asc_degree);
	} elseif ($natal_asc_sign == "LIB") {
		$result = (180 + $asc_degree);
	} elseif ($natal_asc_sign == "SCO") {
		$result = (210 + $asc_degree);
	} elseif ($natal_asc_sign == "SAG") {
		$result = (240 + $asc_degree);
	} elseif ($natal_asc_sign == "CAP") {
		$result = (270 + $asc_degree);
	} elseif ($natal_asc_sign == "AQU") {
		$result = (300 + $asc_degree);
	} elseif ($natal_asc_sign == "PIS")  { 
		$result = (330 + $asc_degree); 
	} else {
		$result = NULL;
	}
return $result;
}

function cusp02Angle($natal_cusp02_sign, $cusp02_degree) {
	if ($natal_cusp02_sign == "ARI") {	
		$result = (0 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "TAU") { 
		$result = (30 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "GEM") {
		$result = (60 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "CAN") {
		$result = (90 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "LEO") {
		$result = (120 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "VIR") {
		$result = (150 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "LIB") {
		$result = (180 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "SCO") {
		$result = (210 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "SAG") {
		$result = (240 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "CAP") {
		$result = (270 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "AQU") {
		$result = (300 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "PIS") {
		$result = (330 + $cusp02_degree); 
	} else {
		echo "check 2nd House Cusp data";
	}
return $result;
}

function cusp03Angle($cusp03_sign, $cusp03_degree) {
	if ($cusp03_sign == "ARI") {	
		$result = (0 + $cusp03_degree);
	} elseif ($cusp03_sign == "TAU") { 
		$result = (30 + $cusp03_degree);
	} elseif ($cusp03_sign == "GEM") {
		$result = (60 + $cusp03_degree);
	} elseif ($cusp03_sign == "CAN") {
		$result = (90 + $cusp03_degree);
	} elseif ($cusp03_sign == "LEO") {
		$result = (120 + $cusp03_degree);
	} elseif ($cusp03_sign == "VIR") {
		$result = (150 + $cusp03_degree);
	} elseif ($cusp03_sign == "LIB") {
		$result = (180 + $cusp03_degree);
	} elseif ($cusp03_sign == "SCO") {
		$result = (210 + $cusp03_degree);
	} elseif ($cusp03_sign == "SAG") {
		$result = (240 + $cusp03_degree);
	} elseif ($cusp03_sign == "CAP") {
		$result = (270 + $cusp03_degree);
	} elseif ($cusp03_sign == "AQU") {
		$result = (300 + $cusp03_degree);
	} elseif ($cusp03_sign == "PIS") { 
		$result = (330 + $cusp03_degree); 
	} else {
		echo "check 3rd House Cusp data"; 
	}
return $result;
}

function cusp04Angle($mc_sign, $mc_degree) {
	if ($mc_sign == "ARI") {	
		$result = (0 + $mc_degree);
	} elseif ($mc_sign == "TAU") { 
		$result = (30 + $mc_degree);
	} elseif ($mc_sign == "GEM") {
		$result = (60 + $mc_degree);
	} elseif ($mc_sign == "CAN") {
		$result = (90 + $mc_degree);
	} elseif ($mc_sign == "LEO") {
		$result = (120 + $mc_degree);
	} elseif ($mc_sign == "VIR") {
		$result = (150 + $mc_degree);
	} elseif ($mc_sign == "LIB") {
		$result = (180 + $mc_degree);
	} elseif ($mc_sign == "SCO") {
		$result = (210 + $mc_degree);
	} elseif ($mc_sign == "SAG") {
		$result = (240 + $mc_degree);
	} elseif ($mc_sign == "CAP") {
		$result = (270 + $mc_degree);
	} elseif ($mc_sign == "AQU") {
		$result = (300 + $mc_degree);
	} elseif ($mc_sign == "PIS") { 
		$result = (330 + $mc_degree); 
	} else {
		$result = NULL;
	}
return ($result-180);
}

function cusp05Angle($cusp05_sign, $cusp05_degree) {
	if ($cusp05_sign == "ARI") {	
		$result = (0 + $cusp05_degree);
	} elseif ($cusp05_sign == "TAU") { 
		$result = (30 + $cusp05_degree);
	} elseif ($cusp05_sign == "GEM") {
		$result = (60 + $cusp05_degree);
	} elseif ($cusp05_sign == "CAN") {
		$result = (90 + $cusp05_degree);
	} elseif ($cusp05_sign == "LEO") {
		$result = (120 + $cusp05_degree);
	} elseif ($cusp05_sign == "VIR") {
		$result = (150 + $cusp05_degree);
	} elseif ($cusp05_sign == "LIB") {
		$result = (180 + $cusp05_degree);
	} elseif ($cusp05_sign == "SCO") {
		$result = (210 + $cusp05_degree);
	} elseif ($cusp05_sign == "SAG") {
		$result = (240 + $cusp05_degree);
	} elseif ($cusp05_sign == "CAP") {
		$result = (270 + $cusp05_degree);
	} elseif ($cusp05_sign == "AQU") {
		$result = (300 + $cusp05_degree);
	} elseif ($cusp05_sign == "PIS") { 
		$result = (330 + $cusp05_degree); 
	} else {
		echo "check 5th House Cusp data";
	}
return $result;
}

function cusp06Angle($cusp06_sign, $cusp06_degree) {
	if ($cusp06_sign == "ARI") {	
		$result = (0 + $cusp06_degree);
	} elseif ($cusp06_sign == "TAU") { 
		$result = (30 + $cusp06_degree);
	} elseif ($cusp06_sign == "GEM") {
		$result = (60 + $cusp06_degree);
	} elseif ($cusp06_sign == "CAN") {
		$result = (90 + $cusp06_degree);
	} elseif ($cusp06_sign == "LEO") {
		$result = (120 + $cusp06_degree);
	} elseif ($cusp06_sign == "VIR") {
		$result = (150 + $cusp06_degree);
	} elseif ($cusp06_sign == "LIB") {
		$result = (180 + $cusp06_degree);
	} elseif ($cusp06_sign == "SCO") {
		$result = (210 + $cusp06_degree);
	} elseif ($cusp06_sign == "SAG") {
		$result = (240 + $cusp06_degree);
	} elseif ($cusp06_sign == "CAP") {
		$result = (270 + $cusp06_degree);
	} elseif ($cusp06_sign == "AQU") {
		$result = (300 + $cusp06_degree);
	} elseif ($cusp06_sign == "PIS") { 
		$result = (330 + $cusp06_degree); 
	} else {
		echo "check 6th House Cusp data";
	}
return $result;
}

function dscAngle($natal_asc_sign, $asc_degree) {
	if ($natal_asc_sign == "ARI") {	
		$result = (0 + $asc_degree);
	} elseif ($natal_asc_sign == "TAU") { 
		$result = (30 + $asc_degree);
	} elseif ($natal_asc_sign == "GEM") {
		$result = (60 + $asc_degree);
	} elseif ($natal_asc_sign == "CAN") {
		$result = (90 + $asc_degree);
	} elseif ($natal_asc_sign == "LEO") {
		$result = (120 + $asc_degree);
	} elseif ($natal_asc_sign == "VIR") {
		$result = (150 + $asc_degree);
	} elseif ($natal_asc_sign == "LIB") {
		$result = (180 + $asc_degree);
	} elseif ($natal_asc_sign == "SCO") {
		$result = (210 + $asc_degree);
	} elseif ($natal_asc_sign == "SAG") {
		$result = (240 + $asc_degree);
	} elseif ($natal_asc_sign == "CAP") {
		$result = (270 + $asc_degree);
	} elseif ($natal_asc_sign == "AQU") {
		$result = (300 + $asc_degree);
	} elseif ($natal_asc_sign == "PIS")  { 
		$result = (330 + $asc_degree); 
	} else {
		$result = NULL;
	}
return ($result+180);
}

function cusp08Angle($natal_cusp02_sign, $cusp02_degree) {
	if ($natal_cusp02_sign == "ARI") {	
		$result = (0 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "TAU") { 
		$result = (30 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "GEM") {
		$result = (60 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "CAN") {
		$result = (90 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "LEO") {
		$result = (120 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "VIR") {
		$result = (150 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "LIB") {
		$result = (180 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "SCO") {
		$result = (210 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "SAG") {
		$result = (240 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "CAP") {
		$result = (270 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "AQU") {
		$result = (300 + $cusp02_degree);
	} elseif ($natal_cusp02_sign == "PIS") { 
		$result = (330 + $cusp02_degree); 
	} else {
		$result = NULL;
	}
return ($result+180);
}

function cusp09Angle($cusp03_sign, $cusp03_degree) {
	if ($cusp03_sign == "ARI") {	
		$result = (0 + $cusp03_degree);
	} elseif ($cusp03_sign == "TAU") { 
		$result = (30 + $cusp03_degree);
	} elseif ($cusp03_sign == "GEM") {
		$result = (60 + $cusp03_degree);
	} elseif ($cusp03_sign == "CAN") {
		$result = (90 + $cusp03_degree);
	} elseif ($cusp03_sign == "LEO") {
		$result = (120 + $cusp03_degree);
	} elseif ($cusp03_sign == "VIR") {
		$result = (150 + $cusp03_degree);
	} elseif ($cusp03_sign == "LIB") {
		$result = (180 + $cusp03_degree);
	} elseif ($cusp03_sign == "SCO") {
		$result = (210 + $cusp03_degree);
	} elseif ($cusp03_sign == "SAG") {
		$result = (240 + $cusp03_degree);
	} elseif ($cusp03_sign == "CAP") {
		$result = (270 + $cusp03_degree);
	} elseif ($cusp03_sign == "AQU") {
		$result = (300 + $cusp03_degree);
	} elseif ($cusp03_sign == "PIS")  { 
		$result = (330 + $cusp03_degree); 
	} else {
		$result = NULL;
	}
return ($result+180);
}

function mcAngle($mc_sign, $mc_degree) {
	if ($mc_sign == "ARI") {	
		$result = (0 + $mc_degree);
	} elseif ($mc_sign == "TAU") { 
		$result = (30 + $mc_degree);
	} elseif ($mc_sign == "GEM") {
		$result = (60 + $mc_degree);
	} elseif ($mc_sign == "CAN") {
		$result = (90 + $mc_degree);
	} elseif ($mc_sign == "LEO") {
		$result = (120 + $mc_degree);
	} elseif ($mc_sign == "VIR") {
		$result = (150 + $mc_degree);
	} elseif ($mc_sign == "LIB") {
		$result = (180 + $mc_degree);
	} elseif ($mc_sign == "SCO") {
		$result = (210 + $mc_degree);
	} elseif ($mc_sign == "SAG") {
		$result = (240 + $mc_degree);
	} elseif ($mc_sign == "CAP") {
		$result = (270 + $mc_degree);
	} elseif ($mc_sign == "AQU") {
		$result = (300 + $mc_degree);
	} elseif ($mc_sign == "PIS") { 
		$result = (330 + $mc_degree); 
	} else {
		$result = NULL;
	}
return $result;
}

function cusp11Angle($cusp05_sign, $cusp05_degree) {
	if ($cusp05_sign == "ARI") {	
		$result = (0 + $cusp05_degree);
	} elseif ($cusp05_sign == "TAU") { 
		$result = (30 + $cusp05_degree);
	} elseif ($cusp05_sign == "GEM") {
		$result = (60 + $cusp05_degree);
	} elseif ($cusp05_sign == "CAN") {
		$result = (90 + $cusp05_degree);
	} elseif ($cusp05_sign == "LEO") {
		$result = (120 + $cusp05_degree);
	} elseif ($cusp05_sign == "VIR") {
		$result = (150 + $cusp05_degree);
	} elseif ($cusp05_sign == "LIB") {
		$result = (180 + $cusp05_degree);
	} elseif ($cusp05_sign == "SCO") {
		$result = (210 + $cusp05_degree);
	} elseif ($cusp05_sign == "SAG") {
		$result = (240 + $cusp05_degree);
	} elseif ($cusp05_sign == "CAP") {
		$result = (270 + $cusp05_degree);
	} elseif ($cusp05_sign == "AQU") {
		$result = (300 + $cusp05_degree);
	} elseif ($cusp05_sign == "PIS")  { 
		$result = (330 + $cusp05_degree); 
	} else {
		$result = NULL;
	}
return ($result+180);
}

function cusp12Angle($cusp06_sign, $cusp06_degree) {
	if ($cusp06_sign == "ARI") {	
		$result = (0 + $cusp06_degree);
	} elseif ($cusp06_sign == "TAU") { 
		$result = (30 + $cusp06_degree);
	} elseif ($cusp06_sign == "GEM") {
		$result = (60 + $cusp06_degree);
	} elseif ($cusp06_sign == "CAN") {
		$result = (90 + $cusp06_degree);
	} elseif ($cusp06_sign == "LEO") {
		$result = (120 + $cusp06_degree);
	} elseif ($cusp06_sign == "VIR") {
		$result = (150 + $cusp06_degree);
	} elseif ($cusp06_sign == "LIB") {
		$result = (180 + $cusp06_degree);
	} elseif ($cusp06_sign == "SCO") {
		$result = (210 + $cusp06_degree);
	} elseif ($cusp06_sign == "SAG") {
		$result = (240 + $cusp06_degree);
	} elseif ($cusp06_sign == "CAP") {
		$result = (270 + $cusp06_degree);
	} elseif ($cusp06_sign == "AQU") {
		$result = (300 + $cusp06_degree);
	} elseif ($cusp06_sign == "PIS") { 
		$result = (330 + $cusp06_degree); 
	} else {
		$result = NULL;;
	}
return ($result+180);
}

?>