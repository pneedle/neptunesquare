<?php

/**
 * @file
 * custom_feature_animalia.features.inc
 */

/**
 * Implements hook_node_info().
 */
function custom_feature_animalia_node_info() {
  $items = array(
    'animalia' => array(
      'name' => t('Animalia'),
      'base' => 'node_content',
      'description' => t('Content-type for: ANIMALIA'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
