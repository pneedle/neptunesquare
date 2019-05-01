<?php

/**
 * @file
 * custom_feature_plantae.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function custom_feature_plantae_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'plantae_list';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Plantae-List';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Plantae-List';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '50';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['pager']['options']['id'] = '0';
  $handler->display->display_options['pager']['options']['quantity'] = '9';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'field_phylum' => 'field_phylum',
    'field_class' => 'field_class',
    'field_order' => 'field_order',
    'field_family' => 'field_family',
    'title' => 'title',
    'field_common_name' => 'field_common_name',
  );
  $handler->display->display_options['style_options']['default'] = 'title';
  $handler->display->display_options['style_options']['info'] = array(
    'field_phylum' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_class' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_order' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_family' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'title' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_common_name' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  /* Field: Content: Species Image */
  $handler->display->display_options['fields']['field_species_image']['id'] = 'field_species_image';
  $handler->display->display_options['fields']['field_species_image']['table'] = 'field_data_field_species_image';
  $handler->display->display_options['fields']['field_species_image']['field'] = 'field_species_image';
  $handler->display->display_options['fields']['field_species_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_species_image']['settings'] = array(
    'image_style' => 'thumbnail',
    'image_link' => 'content',
  );
  $handler->display->display_options['fields']['field_species_image']['delta_limit'] = '1';
  $handler->display->display_options['fields']['field_species_image']['delta_offset'] = '0';
  /* Field: Content: Common Name */
  $handler->display->display_options['fields']['field_common_name']['id'] = 'field_common_name';
  $handler->display->display_options['fields']['field_common_name']['table'] = 'field_data_field_common_name';
  $handler->display->display_options['fields']['field_common_name']['field'] = 'field_common_name';
  $handler->display->display_options['fields']['field_common_name']['delta_limit'] = '1';
  $handler->display->display_options['fields']['field_common_name']['delta_offset'] = '0';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'Genus species';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Family-Plantae */
  $handler->display->display_options['fields']['field_family']['id'] = 'field_family';
  $handler->display->display_options['fields']['field_family']['table'] = 'field_data_field_family';
  $handler->display->display_options['fields']['field_family']['field'] = 'field_family';
  $handler->display->display_options['fields']['field_family']['label'] = 'Family';
  /* Field: Content: Order-Plantae */
  $handler->display->display_options['fields']['field_order']['id'] = 'field_order';
  $handler->display->display_options['fields']['field_order']['table'] = 'field_data_field_order';
  $handler->display->display_options['fields']['field_order']['field'] = 'field_order';
  $handler->display->display_options['fields']['field_order']['label'] = 'Order';
  /* Field: Content: Class-Plantae */
  $handler->display->display_options['fields']['field_class']['id'] = 'field_class';
  $handler->display->display_options['fields']['field_class']['table'] = 'field_data_field_class';
  $handler->display->display_options['fields']['field_class']['field'] = 'field_class';
  $handler->display->display_options['fields']['field_class']['label'] = 'Class';
  /* Field: Content: Division-Plantae */
  $handler->display->display_options['fields']['field_phylum']['id'] = 'field_phylum';
  $handler->display->display_options['fields']['field_phylum']['table'] = 'field_data_field_phylum';
  $handler->display->display_options['fields']['field_phylum']['field'] = 'field_phylum';
  $handler->display->display_options['fields']['field_phylum']['label'] = 'Phylum';
  $handler->display->display_options['fields']['field_phylum']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_phylum']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_phylum']['alter']['text'] = 'Magnoliophyta';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'flora' => 'flora',
  );

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'plantae-list';

  /* Display: Facets block */
  $handler = $view->new_display('search_api_views_facets_block', 'Facets block', 'search_api_views_facets_block_1');
  $handler->display->display_options['pager']['type'] = 'some';

  /* Display: Content pane */
  $handler = $view->new_display('panel_pane', 'Content pane', 'panel_pane_1');
  $export['plantae_list'] = $view;

  return $export;
}
