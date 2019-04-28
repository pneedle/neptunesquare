<?php

/**
 * @file
 * custom_feature_animalia.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function custom_feature_animalia_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: main-menu_animalia-list:animalia-list.
  $menu_links['main-menu_animalia-list:animalia-list'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'animalia-list',
    'router_path' => 'animalia-list',
    'link_title' => 'Animalia-List',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'main-menu_animalia-list:animalia-list',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 1,
    'weight' => -49,
    'customized' => 1,
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Animalia-List');

  return $menu_links;
}
