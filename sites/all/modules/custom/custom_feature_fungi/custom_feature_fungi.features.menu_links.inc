<?php

/**
 * @file
 * custom_feature_fungi.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function custom_feature_fungi_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: main-menu_fungi-list:fungi-list.
  $menu_links['main-menu_fungi-list:fungi-list'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'fungi-list',
    'router_path' => 'fungi-list',
    'link_title' => 'Fungi-List',
    'options' => array(
      'attributes' => array(
        'title' => 'test',
      ),
      'identifier' => 'main-menu_fungi-list:fungi-list',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 1,
    'weight' => -47,
    'customized' => 1,
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Fungi-List');

  return $menu_links;
}
