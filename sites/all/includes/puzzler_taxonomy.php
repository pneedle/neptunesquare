<?php

  // get the current path of the taxonomy term
  $url = current_path();

  // strip out everything except the taxonomy term id (tid)
  $tid = substr($url, strrpos($url, '/') + 1);
  //echo "taxonomy term id : " . $tid . "<br />";

  // load the taxonomy term that corresponds to the tid
  $term = taxonomy_term_load($tid);

  // extract the term name
  $name = $term->name;
  //echo "taxonomy name: " . $name . "<br />";$data['node']->title

  // Puzzler shortcode
  $wikipedia_into = "[puzzler:wikipedia-matching-intro:" . $name . "]";
  $wikipedia_imagehtml = "[puzzler:wikipedia-matching-image-html:" . $name . "]";

  echo token_replace($wikipedia_into);
  echo token_replace($wikipedia_imagehtml);
  echo "<hr />";
  echo "Reference: <a href='https://www.wikipedia.org'>wikipedia.org</a>";
?>