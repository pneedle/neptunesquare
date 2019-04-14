<?php
	
	$query  = "SELECT * FROM {natal_data} WHERE {natal_name_first} = '$firstName'" ;
	$result = db_query($query);

	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
	{
			$sun_sign = $row['natal_sun_sign'];
			$sun_deg = $row['sun_deg'];	
			$moon_sign = $row['moon_sign'];
			$moon_deg = $row['moon_deg'];				
			$mercury_sign = $row['mercury_sign'];
			$mercury_deg = $row['mercury_deg'];				
			$venus_sign = $row['venus_sign'];
			$venus_deg = $row['venus_deg'];	
			$mars_sign = $row['mars_sign'];
			$mars_deg = $row['mars_deg'];				
			$jupiter_sign = $row['jupiter_sign'];
			$jupiter_deg = $row['jupiter_deg'];
			$saturn_sign = $row['saturn_sign'];
			$saturn_deg = $row['saturn_deg'];	
			$uranus_sign = $row['uranus_sign'];
			$uranus_deg = $row['uranus_deg'];				
			$neptune_sign = $row['neptune_sign'];
			$neptune_deg = $row['neptune_deg'];				
			$pluto_sign = $row['pluto_sign'];
			$pluto_deg = $row['pluto_deg'];	
			$nnode_sign = $row['nnode_sign'];
			$nnode_deg = $row['nnode_deg'];				

			$asc_sign = $row['asc_sign'];
			$asc_deg = $row['asc_deg'];
			$mc_sign = $row['mc_sign'];
			$mc_deg = $row['mc_deg'];	
			$cusp02_sign = $row['cusp02_sign'];
			$cusp02_deg = $row['cusp02_deg'];				
			$cusp03_sign = $row['cusp03_sign'];
			$cusp03_deg = $row['cusp03_deg'];				
			$cusp05_sign = $row['cusp05_sign'];
			$cusp05_deg = $row['cusp05_deg'];	
			$cusp06_sign = $row['cusp06_sign'];
			$cusp06_deg = $row['cusp06_deg'];
		
$test = sunAngle($sun_sign, $sun_deg);
$sunAngle = $test;

$test = moonAngle($moon_sign, $moon_deg);
$moonAngle = $test;

$test = mercuryAngle($mercury_sign, $mercury_deg);
$mercuryAngle = $test;

$test = venusAngle($venus_sign, $venus_deg);
$venusAngle = $test;

$test = marsAngle($mars_sign, $mars_deg);
$marsAngle = $test;

$test = jupiterAngle($jupiter_sign, $jupiter_deg);
$jupiterAngle = $test;

$test = saturnAngle($saturn_sign, $saturn_deg);
$saturnAngle = $test;

$test = uranusAngle($uranus_sign, $uranus_deg);
$uranusAngle = $test;

$test = neptuneAngle($neptune_sign, $neptune_deg);
$neptuneAngle = $test;

$test = plutoAngle($pluto_sign, $pluto_deg);
$plutoAngle = $test;

$test = nnodeAngle($nnode_sign, $nnode_deg);
$nnodeAngle = $test;

$test = ascAngle($asc_sign, $asc_deg);
$ascAngle = $test;

$test = mcAngle($mc_sign, $mc_deg);
$mcAngle = $test;

echo "Name: ".$row['firstName']."<br />";

if(isset($_SESSION['orb'])) {
		echo "Tolerance is set at : &#177;".$_SESSION['orb']." degrees (updated)<br /><br /> ";
	} else {
		echo "Orb is not set.<br /><br />";
	}

// sun functions

function sunDescription($pick){
	global $connection;
	$query = "SELECT * FROM aspects_sun";
	$result_set = mysql_query($query, $connection);
	confirm_query($result_set);
	while($row = mysql_fetch_array($result_set, MYSQL_ASSOC)) {
	echo $row[$pick]."<br />";
	}
}

if (sun_moon($sunAngle, $moonAngle) 							!= NULL) { 
	echo "Sun-Moon aspect is: ".sun_moon($sunAngle, $moonAngle)."<br />";
	$pick = "sun_moon_".sun_moon($sunAngle, $moonAngle);
	echo sunDescription($pick)."<br />";
}

if (sun_mercury($sunAngle, $mercuryAngle)         != NULL) { 
	echo "Sun-Mercury aspect is: ".sun_mercury($sunAngle, $mercuryAngle)."<br />";
	$pick = "sun_mercury_".sun_mercury($sunAngle, $mercuryAngle);
	echo sunDescription($pick)."<br />";	
}

if (sun_venus($sunAngle, $venusAngle)							!= NULL) { 
	echo "Sun-Venus aspect is: ".sun_venus($sunAngle, $venusAngle)."<br />";
	$pick = "sun_venus_".sun_venus($sunAngle, $venusAngle);
	echo sunDescription($pick)."<br />";	
	 }

if (sun_mars($sunAngle, $marsAngle) 					 		!= NULL) { 
	echo "Sun-Mars aspect is: ".sun_mars($sunAngle, $marsAngle)."<br />";
	$pick = "sun_mars_".sun_mars($sunAngle, $marsAngle);
	echo sunDescription($pick)."<br />";	
	 }

if (sun_jupiter($sunAngle, $jupiterAngle)				  != NULL) {
	 echo "Sun-Jupiter aspect is: ".sun_jupiter($sunAngle, $jupiterAngle)."<br />";
	$pick = "sun_jupiter_".sun_jupiter($sunAngle, $jupiterAngle);
	echo sunDescription($pick)."<br />";	
	 }

if (sun_saturn($sunAngle, $saturnAngle)	        	!= NULL) { 
	echo "Sun-Saturn aspect is: ".sun_saturn($sunAngle, $saturnAngle)."<br />"; 
	$pick = "sun_saturn_".sun_saturn($sunAngle, $saturnAngle);
	echo sunDescription($pick)."<br />";	
}

if (sun_uranus($sunAngle, $uranusAngle)	        	!= NULL) { 
	echo "Sun-Uranus aspect is: ".sun_uranus($sunAngle, $uranusAngle)."<br />";
	$pick = "sun_uranus_".sun_uranus($sunAngle, $uranusAngle);
	echo sunDescription($pick)."<br />";	
	 }

if (sun_neptune($sunAngle, $neptuneAngle)       	!= NULL) { 
	echo "Sun-Neptune aspect is: ".sun_neptune($sunAngle, $neptuneAngle)."<br />";
	$pick = "sun_neptune_".sun_neptune($sunAngle, $neptuneAngle);
	echo sunDescription($pick)."<br />";	
	 }
	
if (sun_pluto($sunAngle, $plutoAngle)	        	  != NULL) { 
	echo "Sun-Pluto aspect is: ".sun_pluto($sunAngle, $plutoAngle)."<br />";
	$pick = "sun_pluto_".sun_pluto($sunAngle, $plutoAngle);
	echo sunDescription($pick)."<br />";	
	 }

if (sun_nnode($sunAngle, $nnodeAngle)	          	!= NULL) { 
	echo "Sun-North Node aspect is: ".sun_nnode($sunAngle, $nnodeAngle)."<br />";
	$pick = "sun_nnode_".sun_nnode($sunAngle, $nnodeAngle);
	echo sunDescription($pick)."<br />";	
	 }

if (sun_asc($sunAngle, $ascAngle)	              	!= NULL) { 
	echo "Sun-Ascendent aspect is: ".sun_asc($sunAngle, $ascAngle)."<br />";
	$pick = "sun_asc_".sun_asc($sunAngle, $ascAngle);
	echo sunDescription($pick)."<br />";	
	 }

if (sun_mc($sunAngle, $mcAngle)		                != NULL) { 
	echo "Sun-Medium Coeli aspect is: ".sun_mc($sunAngle, $mcAngle)."<br />";
	$pick = "sun_mc_".sun_mc($sunAngle, $mcAngle);
	echo sunDescription($pick)."<br />";	
	 }
	
// Moon functions

	function moonDescription($pick){
		global $connection;
		$query = "SELECT * FROM aspects_moon";
		$result_set = mysql_query($query, $connection);
		confirm_query($result_set);
		while($row = mysql_fetch_array($result_set, MYSQL_ASSOC)) {
		echo $row[$pick]."<br />";
		}
	}

if (sun_moon($sunAngle, $moonAngle) 							!= NULL) { 
	echo "Sun-Moon aspect is: ".sun_moon($sunAngle, $moonAngle)."<br />";
	$pick = "sun_moon_".sun_moon($sunAngle, $moonAngle);
	echo moonDescription($pick)."<br />";
	}

if (moon_mercury($moonAngle, $mercuryAngle)       != NULL) { 
	echo "Moon-Mercury aspect is: ".moon_mercury($moonAngle, $mercuryAngle)."<br />";
	$pick = "moon_mercury_".moon_mercury($moonAngle, $mercuryAngle);
	echo moonDescription($pick)."<br />";	
	 }
	
if (moon_venus($moonAngle, $venusAngle)		      	!= NULL) { 
	echo "Moon-Venus aspect is: ".moon_venus($moonAngle, $venusAngle)."<br />";
	$pick = "moon_venus_".moon_venus($moonAngle, $venusAngle);
	echo moonDescription($pick)."<br />";	
	 }

if (moon_mars($moonAngle, $marsAngle) 	      		!= NULL) { 
	echo "Moon-Mars aspect is: ".moon_mars($moonAngle, $marsAngle)."<br />";
	$pick = "moon_mars_".moon_mars($moonAngle, $marsAngle);
	echo moonDescription($pick)."<br />";	
	 }

if (moon_jupiter($moonAngle, $jupiterAngle)       != NULL) { 
	echo "Moon-Jupiter aspect is: ".moon_jupiter($moonAngle, $jupiterAngle)."<br />";
	$pick = "moon_jupiter_".moon_jupiter($moonAngle, $jupiterAngle);
	echo moonDescription($pick)."<br />";	
	 }

if (moon_saturn($moonAngle, $saturnAngle)	      	!= NULL) { 
	echo "Moon-Saturn aspect is: ".moon_saturn($moonAngle, $saturnAngle)."<br />";
	$pick = "moon_saturn_".moon_saturn($moonAngle, $saturnAngle);
	echo moonDescription($pick)."<br />";	
	 }

if (moon_uranus($moonAngle, $uranusAngle)	      	!= NULL) { 
	echo "Moon-Uranus aspect is: ".moon_uranus($moonAngle, $uranusAngle)."<br />";
	$pick = "moon_uranus_".moon_uranus($moonAngle, $uranusAngle);
	echo moonDescription($pick)."<br />";	
	 }

if (moon_neptune($moonAngle, $neptuneAngle)	      != NULL) { 
	echo "Moon-Neptune aspect is: ".moon_neptune($moonAngle, $neptuneAngle)."<br />";
	$pick = "moon_neptune_".moon_neptune($moonAngle, $neptuneAngle);
	echo moonDescription($pick)."<br />";	
	 }

if (moon_pluto($moonAngle, $plutoAngle)	      	  != NULL) { 
	echo "Moon-Pluto aspect is: ".moon_pluto($moonAngle, $plutoAngle)."<br />";
	$pick = "moon_pluto_".moon_pluto($moonAngle, $plutoAngle);
	echo moonDescription($pick)."<br />";	
	 }

if (moon_nnode($moonAngle, $nnodeAngle)	        	!= NULL) { 
	echo "Moon-North Node aspect is: ".moon_nnode($moonAngle, $nnodeAngle)."<br />";
	$pick = "moon_nnode_".moon_nnode($moonAngle, $nnodeAngle);
	echo moonDescription($pick)."<br />";	
	 }

if (moon_asc($moonAngle, $ascAngle)	            	!= NULL) { 
	echo "Moon-Ascendent aspect is: ".moon_asc($moonAngle, $ascAngle)."<br />";
	$pick = "moon_asc_".moon_asc($moonAngle, $ascAngle);
	echo moonDescription($pick)."<br />";	
	 }

if (moon_mc($moonAngle, $mcAngle)		              != NULL) { 
	echo "Moon-Medium Coeli aspect is: ".moon_mc($moonAngle, $mcAngle)."<br />";
	$pick = "moon_mc_".moon_mc($moonAngle, $mcAngle);
	echo moonDescription($pick)."<br />";	
	 }

// Mercury functions

	function mercuryDescription($pick){
		global $connection;
		$query = "SELECT * FROM aspects_mercury";
		$result_set = mysql_query($query, $connection);
		confirm_query($result_set);
		while($row = mysql_fetch_array($result_set, MYSQL_ASSOC)) {
		echo $row[$pick]."<br />";
		}
	}

if (mercury_venus($mercuryAngle, $venusAngle)			!= NULL) { 
	echo "Mercury-Venus aspect is: ".mercury_venus($mercuryAngle, $venusAngle)."<br />";
	$pick = "mercury_venus_".mercury_venus($mercuryAngle, $venusAngle);
	echo mercuryDescription($pick)."<br />";	
	 }
	
if (mercury_mars($mercuryAngle, $marsAngle) 			!= NULL) { 
	echo "Mercury-Mars aspect is: ".mercury_mars($mercuryAngle, $marsAngle)."<br />";
	$pick = "mercury_mars_".mercury_mars($mercuryAngle, $marsAngle);
	echo mercuryDescription($pick)."<br />";	
	 }
	
if (mercury_jupiter($mercuryAngle, $jupiterAngle) != NULL) { 
	echo "Mercury-Jupiter aspect is: ".mercury_jupiter($mercuryAngle, $jupiterAngle)."<br />";
	$pick = "mercury_jupiter_".mercury_jupiter($mercuryAngle, $jupiterAngle);
	echo mercuryDescription($pick)."<br />";	
	 }
	
if (mercury_saturn($mercuryAngle, $saturnAngle)		!= NULL) { 
	echo "Mercury-Saturn aspect is: ".mercury_saturn($mercuryAngle, $saturnAngle)."<br />";
	$pick = "mercury_saturn_".mercury_saturn($mercuryAngle, $saturnAngle);
	echo mercuryDescription($pick)."<br />";	
	 }
	
if (mercury_uranus($mercuryAngle, $uranusAngle)		!= NULL) { 
	echo "Mercury-Uranus aspect is: ".mercury_uranus($mercuryAngle, $uranusAngle)."<br />";
	$pick = "mercury_uranus_".mercury_uranus($mercuryAngle, $uranusAngle);
	echo mercuryDescription($pick)."<br />";	
	 }
	
if (mercury_neptune($mercuryAngle, $neptuneAngle)	!= NULL) { 
	echo "Mercury-Neptune aspect is: ".mercury_neptune($mercuryAngle, $neptuneAngle)."<br />";
	$pick = "mercury_neptune_".mercury_neptune($mercuryAngle, $neptuneAngle);
	echo mercuryDescription($pick)."<br />";	
	 }
	
if (mercury_pluto($mercuryAngle, $plutoAngle)		  != NULL) { 
	echo "Mercury-Pluto aspect is: ".mercury_pluto($mercuryAngle, $plutoAngle)."<br />";
	$pick = "mercury_pluto_".mercury_pluto($mercuryAngle, $plutoAngle);
	echo mercuryDescription($pick)."<br />";	
	 }
	
if (mercury_nnode($mercuryAngle, $nnodeAngle)	  	!= NULL) { 
	echo "Mercury-North Node aspect is: ".mercury_nnode($mercuryAngle, $nnodeAngle)."<br />";
	$pick = "mercury_nnode_".mercury_nnode($mercuryAngle, $nnodeAngle);
	echo mercuryDescription($pick)."<br />";	
	 }
	
if (mercury_asc($mercuryAngle, $ascAngle)	      	!= NULL) { 
	echo "Mercury-Ascendent aspect is: ".mercury_asc($mercuryAngle, $ascAngle)."<br />";
	$pick = "mercury_asc_".mercury_asc($mercuryAngle, $ascAngle);
	echo mercuryDescription($pick)."<br />";	
	 }
	
if (mercury_mc($mercuryAngle, $mcAngle)		        != NULL) { 
	echo "Mercury-Medium Coeli aspect is: ".mercury_mc($mercuryAngle, $mcAngle)."<br />";
	$pick = "mercury_mc_".mercury_mc($mercuryAngle, $mcAngle);
	echo mercuryDescription($pick)."<br />";	
	 }

if (venus_mars($venusAngle, $marsAngle) 			!= NULL) { echo "Venus-Mars aspect is: ".venus_mars($venusAngle, $marsAngle)."<br />"; }
if (venus_jupiter($venusAngle, $jupiterAngle)		!= NULL) { echo "Venus-Jupiter aspect is: ".venus_jupiter($venusAngle, $jupiterAngle)."<br />"; }
if (venus_saturn($venusAngle, $saturnAngle)	    	!= NULL) { echo "Venus-Saturn aspect is: ".venus_saturn($venusAngle, $saturnAngle)."<br />"; }
if (venus_uranus($venusAngle, $uranusAngle)	    	!= NULL) { echo "Venus-Uranus aspect is: ".venus_uranus($venusAngle, $uranusAngle)."<br />"; }
if (venus_neptune($venusAngle, $neptuneAngle)	    != NULL) { echo "Venus-Neptune aspect is: ".venus_neptune($venusAngle, $neptuneAngle)."<br />"; }
if (venus_pluto($venusAngle, $plutoAngle)			!= NULL) { echo "Venus-Pluto aspect is: ".venus_pluto($venusAngle, $plutoAngle)."<br />"; }
if (venus_nnode($venusAngle, $nnodeAngle)			!= NULL) { echo "Venus-North Node aspect is: ".venus_nnode($venusAngle, $nnodeAngle)."<br />"; }
if (venus_asc($venusAngle, $ascAngle)				!= NULL) { echo "Venus-Ascendent aspect is: ".venus_asc($venusAngle, $ascAngle)."<br />"; }
if (venus_mc($venusAngle, $mcAngle)					!= NULL) { echo "Venus-Medium Coeli aspect is: ".venus_mc($venusAngle, $mcAngle)."<br />"; }

if (mars_jupiter($marsAngle, $jupiterAngle)			!= NULL) { echo "Mars-Jupiter aspect is: ".mars_jupiter($marsAngle, $jupiterAngle)."<br />"; }
if (mars_saturn($marsAngle, $saturnAngle)			!= NULL) { echo "Mars-Saturn aspect is: ".mars_saturn($marsAngle, $saturnAngle)."<br />"; }
if (mars_uranus($marsAngle, $uranusAngle)			!= NULL) { echo "Mars-Uranus aspect is: ".mars_uranus($marsAngle, $uranusAngle)."<br />"; }
if (mars_neptune($marsAngle, $neptuneAngle)			!= NULL) { echo "Mars-Neptune aspect is: ".mars_neptune($marsAngle, $neptuneAngle)."<br />"; }
if (mars_pluto($marsAngle, $plutoAngle)		        != NULL) { echo "Mars-Pluto aspect is: ".mars_pluto($marsAngle, $plutoAngle)."<br />"; }
if (mars_nnode($marsAngle, $nnodeAngle)				!= NULL) { echo "Mars-North Node aspect is: ".mars_nnode($marsAngle, $nnodeAngle)."<br />"; }
if (mars_asc($marsAngle, $ascAngle)					!= NULL) { echo "Mars-Ascendent aspect is: ".mars_asc($marsAngle, $ascAngle)."<br />"; }
if (mars_mc($marsAngle, $mcAngle)					!= NULL) { echo "Mars-Medium Coeli aspect is: ".mars_mc($marsAngle, $mcAngle)."<br />"; }

if (jupiter_saturn($jupiterAngle, $saturnAngle)		!= NULL) { echo "Jupiter-Saturn aspect is: ".jupiter_saturn($jupiterAngle, $saturnAngle)."<br />"; }
if (jupiter_uranus($jupiterAngle, $uranusAngle)		!= NULL) { echo "Jupiter-Uranus aspect is: ".jupiter_uranus($jupiterAngle, $uranusAngle)."<br />"; }
if (jupiter_neptune($jupiterAngle, $neptuneAngle)	!= NULL) { echo "Jupiter-Neptune aspect is: ".jupiter_neptune($jupiterAngle, $neptuneAngle)."<br />"; }
if (jupiter_pluto($jupiterAngle, $plutoAngle)		!= NULL) { echo "Jupiter-Pluto aspect is: ".jupiter_pluto($jupiterAngle, $plutoAngle)."<br />"; }
if (jupiter_nnode($jupiterAngle, $nnodeAngle)	  	!= NULL) { echo "Jupiter-North Node aspect is: ".jupiter_nnode($jupiterAngle, $nnodeAngle)."<br />"; }
if (jupiter_asc($jupiterAngle, $ascAngle)	      	!= NULL) { echo "Jupiter-Ascendent aspect is: ".jupiter_asc($jupiterAngle, $ascAngle)."<br />"; }
if (jupiter_mc($jupiterAngle, $mcAngle)		        != NULL) { echo "Jupiter-Medium Coeli aspect is: ".jupiter_mc($jupiterAngle, $mcAngle)."<br />"; }

if (saturn_uranus($saturnAngle, $uranusAngle)	  	!= NULL) { echo "Saturn-Uranus aspect is: ".saturn_uranus($saturnAngle, $uranusAngle)."<br />"; }
if (saturn_neptune($saturnAngle, $neptuneAngle)  	!= NULL) { echo "Saturn-Neptune aspect is: ".saturn_neptune($saturnAngle, $neptuneAngle)."<br />"; }
if (saturn_pluto($saturnAngle, $plutoAngle)		    != NULL) { echo "Saturn-Pluto aspect is: ".saturn_pluto($saturnAngle, $plutoAngle)."<br />"; }
if (saturn_nnode($saturnAngle, $nnodeAngle)	    	!= NULL) { echo "Saturn-North Node aspect is: ".saturn_nnode($saturnAngle, $nnodeAngle)."<br />"; }
if (saturn_asc($saturnAngle, $ascAngle)	        	!= NULL) { echo "Saturn-Ascendent aspect is: ".saturn_asc($saturnAngle, $ascAngle)."<br />"; }
if (saturn_mc($saturnAngle, $mcAngle)				!= NULL) { echo "Saturn-Medium Coeli aspect is: ".saturn_mc($saturnAngle, $mcAngle)."<br />"; }

if (uranus_neptune($uranusAngle, $neptuneAngle) 	!= NULL) { echo "Uranus-Neptune aspect is: ".uranus_neptune($uranusAngle, $neptuneAngle)."<br />"; }
if (uranus_pluto($uranusAngle, $plutoAngle)			!= NULL) { echo "Uranus-Pluto aspect is: ".uranus_pluto($uranusAngle, $plutoAngle)."<br />"; }
if (uranus_nnode($uranusAngle, $nnodeAngle)	    	!= NULL) { echo "Uranus-North Node aspect is: ".uranus_nnode($uranusAngle, $nnodeAngle)."<br />"; }
if (uranus_asc($uranusAngle, $ascAngle)	        	!= NULL) { echo "Uranus-Ascendent aspect is: ".uranus_asc($uranusAngle, $ascAngle)."<br />"; }
if (uranus_mc($uranusAngle, $mcAngle)				!= NULL) { echo "Uranus-Medium Coeli aspect is: ".uranus_mc($uranusAngle, $mcAngle)."<br />"; }

if (neptune_pluto($neptuneAngle, $plutoAngle)		!= NULL) { echo "Neptune-Pluto aspect is: ".neptune_pluto($neptuneAngle, $plutoAngle)."<br />"; }
if (neptune_nnode($neptuneAngle, $nnodeAngle)	  	!= NULL) { echo "Neptune-North Node aspect is: ".neptune_nnode($neptuneAngle, $nnodeAngle)."<br />"; }
if (neptune_asc($neptuneAngle, $ascAngle)	      	!= NULL) { echo "Neptune-Ascendent aspect is: ".neptune_asc($neptuneAngle, $ascAngle)."<br />"; }
if (neptune_mc($neptuneAngle, $mcAngle)		        != NULL) { echo "Neptune-Medium Coeli aspect is: ".neptune_mc($neptuneAngle, $mcAngle)."<br />"; }

if (pluto_nnode($plutoAngle, $nnodeAngle)	      	!= NULL) { echo "Pluto-North Node aspect is: ".pluto_nnode($plutoAngle, $nnodeAngle)."<br />"; }
if (pluto_asc($plutoAngle, $ascAngle)	          	!= NULL) { echo "Pluto-Ascendent aspect is: ".pluto_asc($plutoAngle, $ascAngle)."<br />"; }
if (pluto_mc($plutoAngle, $mcAngle)	    	        != NULL) { echo "Pluto-Medium Coeli aspect is: ".pluto_mc($plutoAngle, $mcAngle)."<br />"; }

if (nnode_asc($nnodeAngle, $ascAngle)           	!= NULL) { echo "North Node-Ascendent aspect is: ".nnode_asc($nnodeAngle, $ascAngle)."<br />"; }
if (nnode_mc($nnodeAngle, $mcAngle)    		        != NULL) { echo "North Node-Medium Coeli aspect is: ".nnode_mc($nnodeAngle, $mcAngle)."<br />"; }

if (asc_mc($ascAngle, $mcAngle)	        	        != NULL) { echo "Ascendent-Medium Coeli aspect is: ".asc_mc($ascAngle, $mcAngle)."<br />"; }

}

?>
