<?php
include_once 'sites/default/files/includes/functions.php';

$full_name = array();
$query = "SELECT nid, title FROM node WHERE type = 'natal'";
$result = db_query($query);
if ($result) {
  while ($row = $result->fetchAssoc()) {
	array_push($full_name, $row['title']);
  }
}

echo "<form id=\"daily_input_form\" method=\"post\" action=\"\">";
echo "<select id=\"element_1\" name=\"full_name\">";
echo "<option label=\"-select a name-\" value=\"\" selected=\"selected\"></option>";
// full_name
for($i=0;$i<count($full_name);$i++){
	$array[$i] = array($full_name[$i]);
	echo "<option value=".$array[$i][0].">" . $array[$i][0] . "</option>";
}

echo "</select>";

// This is where the value for the orb is selected.
echo "<select id=\"element_2\" name=\"orb\">";
echo "<option label=\"-select an orb -\" value=\"\" selected=\"selected\"></option>";
echo "<option value=\"1\" >1 degree</option>";
echo "<option value=\"2\" >2 degree</option>";
echo "<option value=\"3\" >3 degree</option>";
echo "</select>";

echo "<input id=\"saveForm\" class=\"button_text\" type=\"submit\" name=\"submit\" value=\"Submit\" />";
echo "</form>";

// Echos the Orb: n degrees
if(isset($_POST['submit']) && ($_POST['full_name'] != NULL) && ($_POST['orb'] != NULL)) {
	
	
	$full_name = $_POST['full_name'];
//	echo "node id: ".$nid;
	$orb = $_POST['orb'];
	echo "Full Name: " . $full_name . "<br />";
	echo "Orb: " . $orb . " degrees<br />";
	get_nid($full_name);
	echo "<hr />";
}

// retrieve the values for 'daily' from the database
$p = array("sun","moon","mercury","venus","mars","jupiter","saturn","uranus","neptune","pluto","nnode");
for ($j=0; $j<11; $j++) {

	$sdm = array('sign','degree','minute');
	for ($i=0; $i<3; $i++) {
		$table = 'field_data_natal_' . $p[$j] . '_' . $sdm[$i];
		$field = 'natal_' . $p[$j] . '_' . $sdm[$i] . '_value';
		$query = db_select($table, $field)
		    ->fields($field)
			->condition('entity_id', 977,'=')
		    ->execute()
		    ->fetchAssoc();
		$result = $query[$field];

		$test = $i;
		switch ($test) {
			case 0:
				$sign = $result;
				break;
			case 1:
				$degree = $result;
				break;
			case 2:
				$minute = $result;
				break;
			default: 
		}
	}
 echo 'The ' . $p[$j] . ' for daily is: ' . $degree . $sign . $minute . '<br />';
}

function get_nid($full_name) {
	$table2 = 'node';
	$field2 = 'nid';
	$query = db_select($table2, $field2)
	    ->fields($field2)
		->condition('type', 'natal','=')
		->condition('title', $full_name,'=')
	    ->execute()
	    ->fetchAssoc();
	$result = $query[$field2];
	echo $result;
}

?>