<?php
/*
require_once("includes/functions.php");
require_once("includes/AB_aspect.php");
if (isset($_POST['natal_data'])) {
	$_SESSION['natal_data'] = $_POST['natal_data'];
}
if (isset($_POST['orb'])) {
	$_SESSION['orb'] = $_POST['orb'];
}
*/
echo "Test";

$firstNameB = 'daily';
$lastNameB = "daily";

echo "<h2>Aspects for Today</h2><br />";
$orb = 2;
// $orb = $_POST["orb"];

if(isset($_SESSION['uid'])) {
	$pp = $_SESSION['uid'];
	$query = "SELECT natal_name_first from natal_data WHERE natal_name_first = '$pp'" ;
	$result = db_query($query);
	while($row = db_fetch_array($result, MYSQL_ASSOC)) {
		$firstNameA = $row['natal_name_first'];   // echo $firstName;
	}
	$query = "SELECT natal_name_last from natal_data WHERE natal_name_last = '$pp'" ;
	$result = db_query($query);	
	while($row = db_fetch_array($result, MYSQL_ASSOC)) {
		$lastNameA = $row['natal_name_last'];
		echo "<a><b>".$firstNameA." ".$lastNameA."</b><hr align=\"left\" width=\"500\" /></a>" ;
	}					
} else {
	echo "uid not set.<br /><br />";
}

global $firstNameA, $lastNameA;
$query  = "SELECT * FROM natal_data WHERE natal_name_first= '$firstNameA'" ;
$result =db_query($query);

while($row = db_fetch_array($result, MYSQL_ASSOC)) {
	// echo "<br />Name 1: ".$_POST["firstNameA"]." ".$_POST["lastNameA"];
	$sunA = sunAngle($row['natal_sun_sign'],$row['natal_sun_degree']);
	$moonA = moonAngle($row['natal_moon_sign'],$row['natal_moon_degree']);
/*	$mercuryA = mercuryAngle($row['natal_mercury_sign'],$row['natal_mercury_degree']);
	$venusA = venusAngle($row['natal_venus_sign'],$row['natal_venus_degree']);
	$marsA = marsAngle($row['natal_mars_sign'],$row['natal_mars_degree']);
	$jupiterA = jupiterAngle($row['natal_jupiter_sign'],$row['natal_jupiter_degree']);
	$saturnA = saturnAngle($row['natal_saturn_sign'],$row['natal_saturn_degree']);
	$uranusA = uranusAngle($row['natal_uranus_sign'],$row['natal_uranus_degree']);
	$neptuneA = neptuneAngle($row['natal_neptune_sign'],$row['natal_neptune_degree']);
	$plutoA = plutoAngle($row['natal_pluto_sign'],$row['natal_pluto_degree']);
	$nnodeA = nnodeAngle($row['natal_nnode_sign'],$row['natal_nnode_degree']);
	$ascA = ascAngle($row['natal_asc_sign'],$row['natal_asc_degree']);
	$mcA = mcAngle($row['natal_mc_sign'],$row['natal_mc_degree']); */
}

$sql  = "SELECT * 
FROM natal_data 
WHERE natal_name_first = '$firstNameB' 
AND natal_name_last = '$lastNameB'";
$result = db_query($sql);
confirm_query($result);
if (db_num_rows($result) == 0) {
	echo "<br />daily info not set";
}

while($row = db_fetch_array($result, MYSQL_ASSOC)) {
	// echo "<br />Name 2: ".$firstNameB." ".$lastNameB;
	$sunB = sunAngle($row['natal_sun_sign'],$row['natal_sun_degree']);
	$moonB = moonAngle($row['natal_moon_sign'],$row['natal_moon_degree']);
/*
	$mercuryB = mercuryAngle($row['natal_mercury_sign'],$row['natal_mercury_degree']);
	$venusB = venusAngle($row['natal_venus_sign'],$row['natal_venus_degree']);
	$marsB = marsAngle($row['natal_mars_sign'],$row['natal_mars_degree']);
	$jupiterB = jupiterAngle($row['natal_jupiter_sign'],$row['natal_jupiter_degree']);
	$saturnB = saturnAngle($row['natal_saturn_sign'],$row['natal_saturn_degree']);
	$uranusB = uranusAngle($row['natal_uranus_sign'],$row['natal_uranus_degree']);
	$neptuneB = neptuneAngle($row['natal_neptune_sign'],$row['natal_neptune_degree']);
	$plutoB = plutoAngle($row['natal_pluto_sign'],$row['natal_pluto_degree']);
	$nnodeB = nnodeAngle($row['natal_nnode_sign'],$row['natal_nnode_degree']);
	$ascB = ascAngle($row['natal_asc_sign'],$row['natal_asc_degree']);
	$mcB = mcAngle($row['natal_mc_sign'],$row['natal_mc_degree']);
	*/
}

echo "<br />" ;

$p = array("sun","moon","mercury","venus","mars","jupiter","saturn","uranus","neptune","pluto","nnode","asc","mc");

$a_var = array($sunA,$moonA); //,$mercuryA,$venusA,$marsA,$jupiterA,$saturnA,$uranusA,$neptuneA,$plutoA,$nnodeA,$ascA,$mcA);
$b_var = array($sunB,$moonB); //,$mercuryB,$venusB,$marsB,$jupiterB,$saturnB,$uranusB,$neptuneB,$plutoB,$nnodeB,$ascB,$mcB);
$a_txt = array("sunA","moonA"); //,"mercuryA","venusA","marsA","jupiterA","saturnA","uranusA","neptuneA","plutoA","nnodeA","ascA","mcA");
$b_txt = array("sunB","moonB"); //,"mercuryB","venusB","marsB","jupiterB","saturnB","uranusB","neptuneB","plutoB","nnodeB","ascB","mcB");
echo "<br />";

$j=13;                    // A's count for sun thru mc
for ($i=0; $i<$j; $i++) {
	$y=10;                // daily: count for sun thru pluto
	for ($x=0; $x<$y; $x++) {
		$aa = $a_var[$i] ;  // A's planets
		$bb = $b_var[$x] ;  // B's planets
		$g = ab($aa, $bb);  // AB_aspect (conjunct, sextile, square, trine, opposite) between A and B; require_once("includes/AB_aspect.php");

		if ($g != NULL) {
			echo "<b>".$firstNameA."'s natal ".$p[$i]." and today's transiting ".$p[$x]." are: ";
			echo $g." (".abs(($a_var[$i]-$b_var[$x]))." degrees).</b><br />" ;
			$a_no = $a_var[$i];
			$b_no = $b_var[$i];
			$p1 = $p[$x];
			$p2 = $p[$i];
			$selection = "transit_".$p[$x]."_aspect_natal";
			echo transit_desc($selection,$p1,$p2,$g)."<br /><br />";	
		}
	}
}

echo "</td></tr></table>";	

?>