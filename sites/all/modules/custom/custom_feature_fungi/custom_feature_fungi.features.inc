<?php

/**
 * @file
 * custom_feature_fungi.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function custom_feature_fungi_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "panels_mini" && $api == "panels_default") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function custom_feature_fungi_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function custom_feature_fungi_node_info() {
  $items = array(
    'fungi' => array(
      'name' => t('Fungi'),
      'base' => 'node_content',
      'description' => t('Content-type for: FUNGI'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
