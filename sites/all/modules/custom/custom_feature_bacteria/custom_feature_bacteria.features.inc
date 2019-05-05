<?php

/**
 * @file
 * custom_feature_bacteria.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function custom_feature_bacteria_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "panels_mini" && $api == "panels_default") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function custom_feature_bacteria_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function custom_feature_bacteria_node_info() {
  $items = array(
    'bacteria' => array(
      'name' => t('Bacteria'),
      'base' => 'node_content',
      'description' => t('Content-type for: BACTERIA'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
