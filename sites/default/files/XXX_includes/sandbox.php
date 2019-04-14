<?php
  include_once 'sites/default/files/includes/functions.php';

$result = db_query("SELECT * FROM {natal_data} WHERE {natal_name_last} LIKE 'daily'") ;

if ($result) {
	while ($row = $result->fetchAssoc()) {
		$sunA =     sunAngle($row['natal_sun_sign'],$row['natal_sun_degree']);
		$moonA =    moonAngle($row['natal_moon_sign'],$row['natal_moon_degree']);
		$mercuryA = mercuryAngle($row['natal_mercury_sign'],$row['natal_mercury_degree']);
		$venusA =   venusAngle($row['natal_venus_sign'],$row['natal_venus_degree']);
		$marsA =    marsAngle($row['natal_mars_sign'],$row['natal_mars_degree']);
		$jupiterA = jupiterAngle($row['natal_jupiter_sign'],$row['natal_jupiter_degree']);
		$saturnA =  saturnAngle($row['natal_saturn_sign'],$row['natal_saturn_degree']);
		$uranusA =  uranusAngle($row['natal_uranus_sign'],$row['natal_uranus_degree']);
		$neptuneA = neptuneAngle($row['natal_neptune_sign'],$row['natal_neptune_degree']);
		$plutoA =   plutoAngle($row['natal_pluto_sign'],$row['natal_pluto_degree']);
		$nnodeA =   nnodeAngle($row['natal_nnode_sign'],$row['natal_nnode_degree']);
		$ascA =     ascAngle($row['natal_asc_sign'],$row['natal_asc_degree']);
		$mcA =      mcAngle($row['natal_mc_sign'],$row['natal_mc_degree']);

/*		echo $row['nid'].": ".$row['natal_name_last'].", ".$row['natal_name_first']."<br />" ;
		echo "Sun:".$sunA."<br />" ;		
		echo "Moon:".$moonA."<br />" ;		
		echo "Mercury:".$mercuryA."<br />" ;		
		echo "Venus:".$venusA."<br />" ;		
		echo "Mars:".$marsA."<br />" ;		
		echo "Jupiter:".$jupiterA."<br />" ;		
		echo "Saturn:".$saturnA."<br />" ;		
		echo "Uranus:".$uranusA."<br />" ;		
		echo "Neptune:".$neptuneA."<br />" ;		
		echo "Pluto:".$plutoA."<br />" ;		
		echo "North Node:".$nnodeA."<br />" ;		
		echo "ASC:".$ascA."<br />" ;		
		echo "MC:".$mcA."<br />" ;	*/	
	}
}

$result = db_query("SELECT * FROM {natal_data} WHERE {nid} = '$nid'") ;
if ($result) {
	while ($row = $result->fetchAssoc()) {
		$sunB     = sunAngle($row['natal_sun_sign'],$row['natal_sun_degree']);
		$moonB    = moonAngle($row['natal_moon_sign'],$row['natal_moon_degree']);
		$mercuryB = mercuryAngle($row['natal_mercury_sign'],$row['natal_mercury_degree']);
		$venusB   = venusAngle($row['natal_venus_sign'],$row['natal_venus_degree']);
		$marsB    = marsAngle($row['natal_mars_sign'],$row['natal_mars_degree']);
		$jupiterB = jupiterAngle($row['natal_jupiter_sign'],$row['natal_jupiter_degree']);
		$saturnB  = saturnAngle($row['natal_saturn_sign'],$row['natal_saturn_degree']);
		$uranusB  = uranusAngle($row['natal_uranus_sign'],$row['natal_uranus_degree']);
		$neptuneB = neptuneAngle($row['natal_neptune_sign'],$row['natal_neptune_degree']);
		$plutoB   = plutoAngle($row['natal_pluto_sign'],$row['natal_pluto_degree']);
		$nnodeB   = nnodeAngle($row['natal_nnode_sign'],$row['natal_nnode_degree']);
		$ascB     = ascAngle($row['natal_asc_sign'],$row['natal_asc_degree']);
		$mcB      = mcAngle($row['natal_mc_sign'],$row['natal_mc_degree']);

/*		echo $row['nid'].": ".$row['natal_name_last'].", ".$row['natal_name_first']."<br />" ;
		echo "Sun:".$sunB."<br />" ;		
		echo "Moon:".$moonB."<br />" ;		
		echo "Mercury:".$mercuryB."<br />" ;		
		echo "Venus:".$venusB."<br />" ;		
		echo "Mars:".$marsB."<br />" ;		
		echo "Jupiter:".$jupiterB."<br />" ;		
		echo "Saturn:".$saturnB."<br />" ;		
		echo "Uranus:".$uranusB."<br />" ;		
		echo "Neptune:".$neptuneB."<br />" ;		
		echo "Pluto:".$plutoB."<br />" ;		
		echo "North Node:".$nnodeB."<br />" ;		
		echo "ASC:".$ascB."<br />" ;		
		echo "MC:".$mcB."<br />" ;		*/
	}
}
echo "<hr />";
echo "Sun A-B:"       .abs($sunA-$sunB)        ."<br />" ;
echo "Moon A-B:"      .abs($moonA-$moonB)      ."<br />" ;
echo "Mercury A-B:"   .abs($mercuryA-$mercuryB)."<br />" ;
echo "Venus A-B:"     .abs($venusA-$venusB)    ."<br />" ;
echo "Mars A-B:"      .abs($marsA-$marsB)      ."<br />" ;
echo "Jupiter A-B:"   .abs($jupiterA-$jupiterB)."<br />" ;
echo "Saturn A-B:"    .abs($saturnA-$saturnB)  ."<br />" ;
echo "Uranus A-B:"    .abs($uranusA-$uranusB)  ."<br />" ;
echo "Neptune A-B:"   .abs($neptuneA-$neptuneB)."<br />" ;
echo "Pluto A-B:"     .abs($plutoA-$plutoB)    ."<br />" ;
echo "North Node A-B:".abs($nnodeA-$nnodeB)    ."<br />" ;
echo "ASC A-B:"       .abs($ascA-$ascB)        ."<br />" ;
echo "MC A-B:"        .abs($mcA-$mcB)          ."<br />" ;


?>