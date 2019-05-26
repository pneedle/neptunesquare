<?php
function rstrstr($haystack,$needle) {
  return substr($haystack, 0,strpos($haystack, $needle));
}

// 1. get the url of the current page (ex: "http://localhost/neptunesquare/country/north-korea")
$raw_url = $_SERVER['HTTP_HOST'] . request_uri();

// 2. remove the prefix to leave the last argument - the country (ex. "north-korea")
$replace = $_SERVER['HTTP_HOST'] . "/neptunesquare/country/";  // (ex: localhost/neptunesquare/country/)
//$replace_species = $_SERVER['HTTP_HOST'] . "/neptunesquare/species/";  // (ex: localhost/neptunesquare/species/)
// echo "replace_country: " . $replace_country . "<br />";

$lc_country_hyphenated = str_replace("$replace","","$raw_url");
//echo "the country argument in the url is: " . $lc_country_hyphenated . "<br />";

// 3. remove the hyphen (ex. "north korea")
$lc_country = str_replace("-"," ","$lc_country_hyphenated");

// 4. Uppercase first letter (ex. "North Korea")
$uc_country = ucwords($lc_country);

$uc_country = str_replace(" And "," and ","$uc_country");
$uc_country = str_replace(" In "," in ","$uc_country");
$uc_country = str_replace(" The "," the ","$uc_country");
$uc_country = str_replace(" Of "," of ","$uc_country");
//echo $uc_country . "<br />";

// 5. search the db table for instances where title starts with $uc_country (ex. "North Korea")
// $query = db_query("SELECT entity_id, field_stamp_image_title FROM {field_data_field_stamp_image}");
$query = db_query("SELECT fid, filename, uri FROM {file_managed}");

$records = $query->fetchAll();
foreach ($records as $record) {

  $string = $record->filename; //$record->field_stamp_image_title;
  $search = $lc_country_hyphenated;
  $found = strpos($string, $search);

  $astro_search_aries = "aries_" . $search . "_";
  $astro_search_taurus = "taurus_" . $search . "_";


  $astro_found_aries = strpos($string, $astro_search_aries); // is "aries" in "aries_poland" ??
  $astro_found_taurus = strpos($string, $astro_search_taurus); // is "aries" in "aries_poland" ??

  //echo "string: " . $string . "<br />";
  //echo "search: " . $search . "<br />";
  //echo "found: " . $found . "<br />";
  //echo "astro_search: " . $astro_search;   ex: aries_canada_

  //if (strlen($found) != 0) {

    if (((strlen($found) != 0) && (strlen($astro_found_aries) == 0)) || 
           ((strlen($found) != 0) && (strlen($astro_found_taurus) == 0)))     {
    //echo "string: " . $string;
    //echo '<br />';

    $imagepath_stamp = "http://localhost/neptunesquare/sites/default/files/Image_Stamp/" . $string;
    //echo $imagepath_stamp; //http://localhost/neptunesquare/sites/default/files/Image_Stamp/acer-rubrum_canada_1994.jpg
    //echo "<br />";


    $imagepath_species = $search;  //$replace_species . $search;
    // echo $imagepath_species;  // ex: "http://localhost/neptunesquare/species/north-korea"
    $imagepath_species = str_replace($lc_country_hyphenated,$string,$imagepath_species);
    // echo $imagepath_species;  // ex: "http://localhost/neptunesquare/species/pleurotus-ostreatus_north-korea.jpg"

    $imagepath_species = rstrstr($imagepath_species, "_");
    $genus_species = $imagepath_species;
    // echo "imagepath_species: " . $imagepath_species . "<br />";

    $imagepath_species = "http://localhost/neptunesquare/genus-species/" . $imagepath_species;
     // want to get to: //http://localhost/neptunesquare/species/acer-rubrum

    echo "<p>";
    echo "<div class=\"country-stamp\">"; // displays "width = 50%"" for image to fit 2 per column
    echo "<a href=" . $imagepath_species . ">";
    echo "<img src=" . $imagepath_stamp . " alt=\"{$string}\" title=\"{$genus_species}\">";
    echo "</a>";
    echo "</div>";
    echo "</p>";
  }

}
