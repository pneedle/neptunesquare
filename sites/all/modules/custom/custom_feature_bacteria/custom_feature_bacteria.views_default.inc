<?php

/**
 * @file
 * custom_feature_bacteria.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function custom_feature_bacteria_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'Taxonomy_List';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Taxonomy List';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['row_class'] = 'taxonomy';
  $handler->display->display_options['style_options']['columns'] = array(
    'title' => 'title',
    'field_species_image_animalia_1' => 'field_species_image_animalia_1',
    'field_image_species_fungal' => 'field_image_species_fungal',
    'field_species_image_bacteria' => 'field_species_image_bacteria',
    'field_species_image' => 'field_species_image',
    'body' => 'body',
    'nothing' => 'nothing',
    'field_image' => 'field_image',
  );
  $handler->display->display_options['style_options']['default'] = 'title';
  $handler->display->display_options['style_options']['info'] = array(
    'title' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 1,
    ),
    'field_species_image_animalia_1' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 1,
    ),
    'field_image_species_fungal' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 1,
    ),
    'field_species_image_bacteria' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 1,
    ),
    'field_species_image' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 1,
    ),
    'body' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'nothing' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_image' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'Genus species';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Species Image Animalia */
  $handler->display->display_options['fields']['field_species_image_animalia_1']['id'] = 'field_species_image_animalia_1';
  $handler->display->display_options['fields']['field_species_image_animalia_1']['table'] = 'field_data_field_species_image_animalia';
  $handler->display->display_options['fields']['field_species_image_animalia_1']['field'] = 'field_species_image_animalia';
  $handler->display->display_options['fields']['field_species_image_animalia_1']['label'] = '';
  $handler->display->display_options['fields']['field_species_image_animalia_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_species_image_animalia_1']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_species_image_animalia_1']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_species_image_animalia_1']['settings'] = array(
    'image_style' => 'medium',
    'image_link' => 'file',
  );
  $handler->display->display_options['fields']['field_species_image_animalia_1']['delta_limit'] = '1';
  $handler->display->display_options['fields']['field_species_image_animalia_1']['delta_offset'] = '0';
  /* Field: Content: Image-Species-Fungal */
  $handler->display->display_options['fields']['field_image_species_fungal']['id'] = 'field_image_species_fungal';
  $handler->display->display_options['fields']['field_image_species_fungal']['table'] = 'field_data_field_image_species_fungal';
  $handler->display->display_options['fields']['field_image_species_fungal']['field'] = 'field_image_species_fungal';
  $handler->display->display_options['fields']['field_image_species_fungal']['label'] = '';
  $handler->display->display_options['fields']['field_image_species_fungal']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_image_species_fungal']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_image_species_fungal']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_image_species_fungal']['settings'] = array(
    'image_style' => 'medium',
    'image_link' => 'file',
  );
  $handler->display->display_options['fields']['field_image_species_fungal']['delta_limit'] = '1';
  $handler->display->display_options['fields']['field_image_species_fungal']['delta_offset'] = '0';
  /* Field: Content: Species Image Bacteria */
  $handler->display->display_options['fields']['field_species_image_bacteria']['id'] = 'field_species_image_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['table'] = 'field_data_field_species_image_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['field'] = 'field_species_image_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['label'] = '';
  $handler->display->display_options['fields']['field_species_image_bacteria']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_species_image_bacteria']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_species_image_bacteria']['settings'] = array(
    'image_style' => 'medium',
    'image_link' => 'file',
  );
  $handler->display->display_options['fields']['field_species_image_bacteria']['delta_limit'] = '1';
  $handler->display->display_options['fields']['field_species_image_bacteria']['delta_offset'] = '0';
  /* Field: Content: Species Image */
  $handler->display->display_options['fields']['field_species_image']['id'] = 'field_species_image';
  $handler->display->display_options['fields']['field_species_image']['table'] = 'field_data_field_species_image';
  $handler->display->display_options['fields']['field_species_image']['field'] = 'field_species_image';
  $handler->display->display_options['fields']['field_species_image']['label'] = '';
  $handler->display->display_options['fields']['field_species_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_species_image']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_species_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_species_image']['settings'] = array(
    'image_style' => 'medium',
    'image_link' => 'file',
  );
  $handler->display->display_options['fields']['field_species_image']['delta_limit'] = '1';
  $handler->display->display_options['fields']['field_species_image']['delta_offset'] = '0';
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['exclude'] = TRUE;
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
  $handler->display->display_options['fields']['body']['settings'] = array(
    'trim_length' => '250',
  );
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = '';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = 'Genus species: [title]<br />
[body]';
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
  /* Field: Field: Image */
  $handler->display->display_options['fields']['field_image']['id'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
  $handler->display->display_options['fields']['field_image']['field'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_image']['settings'] = array(
    'image_style' => 'medium',
    'image_link' => '',
  );
  $handler->display->display_options['fields']['field_image']['delta_limit'] = '1';
  $handler->display->display_options['fields']['field_image']['delta_offset'] = '0';
  /* Contextual filter: Content: Has taxonomy term ID */
  $handler->display->display_options['arguments']['tid']['id'] = 'tid';
  $handler->display->display_options['arguments']['tid']['table'] = 'taxonomy_index';
  $handler->display->display_options['arguments']['tid']['field'] = 'tid';
  $handler->display->display_options['arguments']['tid']['default_action'] = 'default';
  $handler->display->display_options['arguments']['tid']['default_argument_type'] = 'taxonomy_tid';
  $handler->display->display_options['arguments']['tid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['tid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['tid']['summary_options']['items_per_page'] = '25';
  /* Contextual filter: Content: Nid */
  $handler->display->display_options['arguments']['nid']['id'] = 'nid';
  $handler->display->display_options['arguments']['nid']['table'] = 'node';
  $handler->display->display_options['arguments']['nid']['field'] = 'nid';
  $handler->display->display_options['arguments']['nid']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';
  /* Contextual filter: File Usage: Entity ID */
  $handler->display->display_options['arguments']['id']['id'] = 'id';
  $handler->display->display_options['arguments']['id']['table'] = 'file_usage';
  $handler->display->display_options['arguments']['id']['field'] = 'id';
  $handler->display->display_options['arguments']['id']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['id']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['id']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['id']['summary_options']['items_per_page'] = '25';
  /* Contextual filter: Content: Class-Animalia (field_class_animalia) */
  $handler->display->display_options['arguments']['field_class_animalia_tid']['id'] = 'field_class_animalia_tid';
  $handler->display->display_options['arguments']['field_class_animalia_tid']['table'] = 'field_data_field_class_animalia';
  $handler->display->display_options['arguments']['field_class_animalia_tid']['field'] = 'field_class_animalia_tid';
  $handler->display->display_options['arguments']['field_class_animalia_tid']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['field_class_animalia_tid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_class_animalia_tid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_class_animalia_tid']['summary_options']['items_per_page'] = '25';
  /* Contextual filter: Content: Class-Bacteria (field_class_bacteria) */
  $handler->display->display_options['arguments']['field_class_bacteria_tid']['id'] = 'field_class_bacteria_tid';
  $handler->display->display_options['arguments']['field_class_bacteria_tid']['table'] = 'field_data_field_class_bacteria';
  $handler->display->display_options['arguments']['field_class_bacteria_tid']['field'] = 'field_class_bacteria_tid';
  $handler->display->display_options['arguments']['field_class_bacteria_tid']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['field_class_bacteria_tid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_class_bacteria_tid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_class_bacteria_tid']['summary_options']['items_per_page'] = '25';
  /* Contextual filter: Content: Class-Fungi (field_class_fungi) */
  $handler->display->display_options['arguments']['field_class_fungi_tid']['id'] = 'field_class_fungi_tid';
  $handler->display->display_options['arguments']['field_class_fungi_tid']['table'] = 'field_data_field_class_fungi';
  $handler->display->display_options['arguments']['field_class_fungi_tid']['field'] = 'field_class_fungi_tid';
  $handler->display->display_options['arguments']['field_class_fungi_tid']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['field_class_fungi_tid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_class_fungi_tid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_class_fungi_tid']['summary_options']['items_per_page'] = '25';
  /* Contextual filter: Content: Class-Plantae (field_class) */
  $handler->display->display_options['arguments']['field_class_tid']['id'] = 'field_class_tid';
  $handler->display->display_options['arguments']['field_class_tid']['table'] = 'field_data_field_class';
  $handler->display->display_options['arguments']['field_class_tid']['field'] = 'field_class_tid';
  $handler->display->display_options['arguments']['field_class_tid']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['field_class_tid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_class_tid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_class_tid']['summary_options']['items_per_page'] = '25';
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
    'animalia' => 'animalia',
    'bacteria' => 'bacteria',
    'fungi' => 'fungi',
    'flora' => 'flora',
  );

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'taxonomy-list';

  /* Display: Content pane */
  $handler = $view->new_display('panel_pane', 'Content pane', 'panel_pane_1');
  $export['Taxonomy_List'] = $view;

  $view = new view();
  $view->name = 'bacteria_list';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'search_api_index_bacteria';
  $view->human_name = 'Bacteria-List';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'KINGDOM: BACTERIA';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'field_species_image_bacteria' => 'field_species_image_bacteria',
    'title' => 'title',
    'field_common_name' => 'field_common_name',
    'field_genus_bacteria' => 'field_genus_bacteria',
    'field_family_bacteria' => 'field_family_bacteria',
    'field_order_bacteria' => 'field_order_bacteria',
    'field_class_bacteria' => 'field_class_bacteria',
    'field_phylum_bacteria' => 'field_phylum_bacteria',
    'nothing' => 'nothing',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'field_species_image_bacteria' => array(
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
    'field_genus_bacteria' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_family_bacteria' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_order_bacteria' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_class_bacteria' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_phylum_bacteria' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'nothing' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  /* Field: Indexed Node: Species Image Bacteria */
  $handler->display->display_options['fields']['field_species_image_bacteria']['id'] = 'field_species_image_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['field'] = 'field_species_image_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['label'] = 'Image';
  $handler->display->display_options['fields']['field_species_image_bacteria']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_species_image_bacteria']['settings'] = array(
    'image_style' => 'thumbnail',
    'image_link' => 'file',
  );
  $handler->display->display_options['fields']['field_species_image_bacteria']['delta_limit'] = '1';
  $handler->display->display_options['fields']['field_species_image_bacteria']['delta_offset'] = '0';
  /* Field: Indexed Node: Genus-Bacteria */
  $handler->display->display_options['fields']['field_genus_bacteria']['id'] = 'field_genus_bacteria';
  $handler->display->display_options['fields']['field_genus_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_genus_bacteria']['field'] = 'field_genus_bacteria';
  $handler->display->display_options['fields']['field_genus_bacteria']['label'] = 'Genus';
  $handler->display->display_options['fields']['field_genus_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_genus_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_genus_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Family-Bacteria */
  $handler->display->display_options['fields']['field_family_bacteria']['id'] = 'field_family_bacteria';
  $handler->display->display_options['fields']['field_family_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_family_bacteria']['field'] = 'field_family_bacteria';
  $handler->display->display_options['fields']['field_family_bacteria']['label'] = 'Family';
  $handler->display->display_options['fields']['field_family_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_family_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_family_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Order-Bacteria */
  $handler->display->display_options['fields']['field_order_bacteria']['id'] = 'field_order_bacteria';
  $handler->display->display_options['fields']['field_order_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_order_bacteria']['field'] = 'field_order_bacteria';
  $handler->display->display_options['fields']['field_order_bacteria']['label'] = 'Order';
  $handler->display->display_options['fields']['field_order_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_order_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_order_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Class-Bacteria */
  $handler->display->display_options['fields']['field_class_bacteria']['id'] = 'field_class_bacteria';
  $handler->display->display_options['fields']['field_class_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_class_bacteria']['field'] = 'field_class_bacteria';
  $handler->display->display_options['fields']['field_class_bacteria']['label'] = 'Class';
  $handler->display->display_options['fields']['field_class_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_class_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_class_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Phylum-Bacteria */
  $handler->display->display_options['fields']['field_phylum_bacteria']['id'] = 'field_phylum_bacteria';
  $handler->display->display_options['fields']['field_phylum_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_phylum_bacteria']['field'] = 'field_phylum_bacteria';
  $handler->display->display_options['fields']['field_phylum_bacteria']['label'] = 'Phylum';
  $handler->display->display_options['fields']['field_phylum_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_phylum_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_phylum_bacteria']['bypass_access'] = 0;
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['exclude'] = TRUE;
  $handler->display->display_options['fields']['nothing']['alter']['text'] = 'Common name: [field_common_name]<br />
Genus species: [title]<br />
Family: [field_family_bacteria]';
  /* Field: Indexed Node: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['link_to_entity'] = 0;
  /* Filter criterion: Indexed Node: Status */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = array(
    1 => '1',
  );

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'bacteria-list';

  /* Display: bacteria-list-desktop */
  $handler = $view->new_display('panel_pane', 'bacteria-list-desktop', 'panel_pane_1');
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Indexed Node: Species Image Bacteria */
  $handler->display->display_options['fields']['field_species_image_bacteria']['id'] = 'field_species_image_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['field'] = 'field_species_image_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['label'] = 'Image';
  $handler->display->display_options['fields']['field_species_image_bacteria']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_species_image_bacteria']['settings'] = array(
    'image_style' => 'thumbnail',
    'image_link' => 'file',
  );
  $handler->display->display_options['fields']['field_species_image_bacteria']['delta_limit'] = '1';
  $handler->display->display_options['fields']['field_species_image_bacteria']['delta_offset'] = '0';
  /* Field: Indexed Node: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'Genus/species';
  $handler->display->display_options['fields']['title']['link_to_entity'] = 1;
  /* Field: Indexed Node: Common Name */
  $handler->display->display_options['fields']['field_common_name']['id'] = 'field_common_name';
  $handler->display->display_options['fields']['field_common_name']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_common_name']['field'] = 'field_common_name';
  $handler->display->display_options['fields']['field_common_name']['label'] = 'Common';
  $handler->display->display_options['fields']['field_common_name']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_common_name']['delta_offset'] = '0';
  /* Field: Indexed Node: Genus-Bacteria */
  $handler->display->display_options['fields']['field_genus_bacteria']['id'] = 'field_genus_bacteria';
  $handler->display->display_options['fields']['field_genus_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_genus_bacteria']['field'] = 'field_genus_bacteria';
  $handler->display->display_options['fields']['field_genus_bacteria']['label'] = 'Genus';
  $handler->display->display_options['fields']['field_genus_bacteria']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_genus_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_genus_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_genus_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Family-Bacteria */
  $handler->display->display_options['fields']['field_family_bacteria']['id'] = 'field_family_bacteria';
  $handler->display->display_options['fields']['field_family_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_family_bacteria']['field'] = 'field_family_bacteria';
  $handler->display->display_options['fields']['field_family_bacteria']['label'] = 'Family';
  $handler->display->display_options['fields']['field_family_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_family_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_family_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Order-Bacteria */
  $handler->display->display_options['fields']['field_order_bacteria']['id'] = 'field_order_bacteria';
  $handler->display->display_options['fields']['field_order_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_order_bacteria']['field'] = 'field_order_bacteria';
  $handler->display->display_options['fields']['field_order_bacteria']['label'] = 'Order';
  $handler->display->display_options['fields']['field_order_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_order_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_order_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Class-Bacteria */
  $handler->display->display_options['fields']['field_class_bacteria']['id'] = 'field_class_bacteria';
  $handler->display->display_options['fields']['field_class_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_class_bacteria']['field'] = 'field_class_bacteria';
  $handler->display->display_options['fields']['field_class_bacteria']['label'] = 'Class';
  $handler->display->display_options['fields']['field_class_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_class_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_class_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Phylum-Bacteria */
  $handler->display->display_options['fields']['field_phylum_bacteria']['id'] = 'field_phylum_bacteria';
  $handler->display->display_options['fields']['field_phylum_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_phylum_bacteria']['field'] = 'field_phylum_bacteria';
  $handler->display->display_options['fields']['field_phylum_bacteria']['label'] = 'Phylum';
  $handler->display->display_options['fields']['field_phylum_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_phylum_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_phylum_bacteria']['bypass_access'] = 0;
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['exclude'] = TRUE;
  $handler->display->display_options['fields']['nothing']['alter']['text'] = 'Common name: [field_common_name]<br />
Genus species: [title]<br />
Family: [field_family_bacteria]';

  /* Display: bacteria-list-tablet */
  $handler = $view->new_display('panel_pane', 'bacteria-list-tablet', 'panel_pane_2');
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Indexed Node: Species Image Bacteria */
  $handler->display->display_options['fields']['field_species_image_bacteria']['id'] = 'field_species_image_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['field'] = 'field_species_image_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['label'] = 'Image';
  $handler->display->display_options['fields']['field_species_image_bacteria']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_species_image_bacteria']['settings'] = array(
    'image_style' => 'thumbnail',
    'image_link' => 'file',
  );
  $handler->display->display_options['fields']['field_species_image_bacteria']['delta_limit'] = '1';
  $handler->display->display_options['fields']['field_species_image_bacteria']['delta_offset'] = '0';
  /* Field: Indexed Node: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'Genus/species';
  $handler->display->display_options['fields']['title']['link_to_entity'] = 1;
  /* Field: Indexed Node: Common Name */
  $handler->display->display_options['fields']['field_common_name']['id'] = 'field_common_name';
  $handler->display->display_options['fields']['field_common_name']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_common_name']['field'] = 'field_common_name';
  $handler->display->display_options['fields']['field_common_name']['label'] = 'Common';
  $handler->display->display_options['fields']['field_common_name']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_common_name']['delta_offset'] = '0';
  /* Field: Indexed Node: Genus-Bacteria */
  $handler->display->display_options['fields']['field_genus_bacteria']['id'] = 'field_genus_bacteria';
  $handler->display->display_options['fields']['field_genus_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_genus_bacteria']['field'] = 'field_genus_bacteria';
  $handler->display->display_options['fields']['field_genus_bacteria']['label'] = 'Genus';
  $handler->display->display_options['fields']['field_genus_bacteria']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_genus_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_genus_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_genus_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Family-Bacteria */
  $handler->display->display_options['fields']['field_family_bacteria']['id'] = 'field_family_bacteria';
  $handler->display->display_options['fields']['field_family_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_family_bacteria']['field'] = 'field_family_bacteria';
  $handler->display->display_options['fields']['field_family_bacteria']['label'] = 'Family';
  $handler->display->display_options['fields']['field_family_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_family_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_family_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Order-Bacteria */
  $handler->display->display_options['fields']['field_order_bacteria']['id'] = 'field_order_bacteria';
  $handler->display->display_options['fields']['field_order_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_order_bacteria']['field'] = 'field_order_bacteria';
  $handler->display->display_options['fields']['field_order_bacteria']['label'] = 'Order';
  $handler->display->display_options['fields']['field_order_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_order_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_order_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Class-Bacteria */
  $handler->display->display_options['fields']['field_class_bacteria']['id'] = 'field_class_bacteria';
  $handler->display->display_options['fields']['field_class_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_class_bacteria']['field'] = 'field_class_bacteria';
  $handler->display->display_options['fields']['field_class_bacteria']['label'] = 'Class';
  $handler->display->display_options['fields']['field_class_bacteria']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_class_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_class_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_class_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Phylum-Bacteria */
  $handler->display->display_options['fields']['field_phylum_bacteria']['id'] = 'field_phylum_bacteria';
  $handler->display->display_options['fields']['field_phylum_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_phylum_bacteria']['field'] = 'field_phylum_bacteria';
  $handler->display->display_options['fields']['field_phylum_bacteria']['label'] = 'Phylum';
  $handler->display->display_options['fields']['field_phylum_bacteria']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_phylum_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_phylum_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_phylum_bacteria']['bypass_access'] = 0;
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['exclude'] = TRUE;
  $handler->display->display_options['fields']['nothing']['alter']['text'] = 'Common name: [field_common_name]<br />
Genus species: [title]<br />
Family: [field_family_bacteria]';

  /* Display: bacteria-list-moblie */
  $handler = $view->new_display('panel_pane', 'bacteria-list-moblie', 'panel_pane_3');
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Indexed Node: Species Image Bacteria */
  $handler->display->display_options['fields']['field_species_image_bacteria']['id'] = 'field_species_image_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['field'] = 'field_species_image_bacteria';
  $handler->display->display_options['fields']['field_species_image_bacteria']['label'] = '';
  $handler->display->display_options['fields']['field_species_image_bacteria']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_species_image_bacteria']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_species_image_bacteria']['settings'] = array(
    'image_style' => 'thumbnail',
    'image_link' => 'file',
  );
  $handler->display->display_options['fields']['field_species_image_bacteria']['delta_limit'] = '1';
  $handler->display->display_options['fields']['field_species_image_bacteria']['delta_offset'] = '0';
  /* Field: Indexed Node: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'Genus/species';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['link_to_entity'] = 1;
  /* Field: Indexed Node: Genus-Bacteria */
  $handler->display->display_options['fields']['field_genus_bacteria']['id'] = 'field_genus_bacteria';
  $handler->display->display_options['fields']['field_genus_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_genus_bacteria']['field'] = 'field_genus_bacteria';
  $handler->display->display_options['fields']['field_genus_bacteria']['label'] = 'Genus';
  $handler->display->display_options['fields']['field_genus_bacteria']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_genus_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_genus_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_genus_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Family-Bacteria */
  $handler->display->display_options['fields']['field_family_bacteria']['id'] = 'field_family_bacteria';
  $handler->display->display_options['fields']['field_family_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_family_bacteria']['field'] = 'field_family_bacteria';
  $handler->display->display_options['fields']['field_family_bacteria']['label'] = 'Family';
  $handler->display->display_options['fields']['field_family_bacteria']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_family_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_family_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_family_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Order-Bacteria */
  $handler->display->display_options['fields']['field_order_bacteria']['id'] = 'field_order_bacteria';
  $handler->display->display_options['fields']['field_order_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_order_bacteria']['field'] = 'field_order_bacteria';
  $handler->display->display_options['fields']['field_order_bacteria']['label'] = 'Order';
  $handler->display->display_options['fields']['field_order_bacteria']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_order_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_order_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_order_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Class-Bacteria */
  $handler->display->display_options['fields']['field_class_bacteria']['id'] = 'field_class_bacteria';
  $handler->display->display_options['fields']['field_class_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_class_bacteria']['field'] = 'field_class_bacteria';
  $handler->display->display_options['fields']['field_class_bacteria']['label'] = 'Class';
  $handler->display->display_options['fields']['field_class_bacteria']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_class_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_class_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_class_bacteria']['bypass_access'] = 0;
  /* Field: Indexed Node: Phylum-Bacteria */
  $handler->display->display_options['fields']['field_phylum_bacteria']['id'] = 'field_phylum_bacteria';
  $handler->display->display_options['fields']['field_phylum_bacteria']['table'] = 'search_api_index_bacteria';
  $handler->display->display_options['fields']['field_phylum_bacteria']['field'] = 'field_phylum_bacteria';
  $handler->display->display_options['fields']['field_phylum_bacteria']['label'] = 'Phylum';
  $handler->display->display_options['fields']['field_phylum_bacteria']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_phylum_bacteria']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['field_phylum_bacteria']['view_mode'] = 'full';
  $handler->display->display_options['fields']['field_phylum_bacteria']['bypass_access'] = 0;
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = '';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<!-- Common name: [field_common_name]<br /> -->
Genus species: [title]<br />
Family: [field_family_bacteria]<br />
Order: [field_order_bacteria]';
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
  $export['bacteria_list'] = $view;

  return $export;
}
