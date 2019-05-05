<?php

/**
 * @file
 * custom_feature_bacteria.panels_default.inc
 */

/**
 * Implements hook_default_panels_mini().
 */
function custom_feature_bacteria_default_panels_mini() {
  $export = array();

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'bacteria_list_kpcofgs';
  $mini->category = '';
  $mini->admin_title = 'Bacteria-List KPCOFGS';
  $mini->admin_description = 'Bacteria-List KPCOFGS';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'onecol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'middle' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = 'Bacteria Classification';
  $display->uuid = '2a894953-bbdd-468d-bc46-1580280275ae';
  $display->storage_type = 'panels_mini';
  $display->storage_id = 'bacteria_list_kpcofgs';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-16a97806-cee8-4b23-8ff0-3d8ae281d2ec';
  $pane->panel = 'middle';
  $pane->type = 'block';
  $pane->subtype = 'facetapi-rNNxvel0LbxJhHSaSGMfOmJjUWj3qoYJ';
  $pane->shown = FALSE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 1,
    'override_title_text' => 'Kingdom',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '16a97806-cee8-4b23-8ff0-3d8ae281d2ec';
  $display->content['new-16a97806-cee8-4b23-8ff0-3d8ae281d2ec'] = $pane;
  $display->panels['middle'][0] = 'new-16a97806-cee8-4b23-8ff0-3d8ae281d2ec';
  $pane = new stdClass();
  $pane->pid = 'new-6b03bf18-74a5-44dd-970d-9a38331ab498';
  $pane->panel = 'middle';
  $pane->type = 'block';
  $pane->subtype = 'facetapi-QrDbCRD02hJWoXphS8l2j6D3NoLz4tJo';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 1,
    'override_title_text' => 'Phylum',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = '6b03bf18-74a5-44dd-970d-9a38331ab498';
  $display->content['new-6b03bf18-74a5-44dd-970d-9a38331ab498'] = $pane;
  $display->panels['middle'][1] = 'new-6b03bf18-74a5-44dd-970d-9a38331ab498';
  $pane = new stdClass();
  $pane->pid = 'new-725208a2-3d18-4a46-a6a4-fcc2fe569c41';
  $pane->panel = 'middle';
  $pane->type = 'block';
  $pane->subtype = 'facetapi-uQ3ts93bhaL0rlWrqxnm1k0ZYKwobuED';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 1,
    'override_title_text' => 'Class',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 2;
  $pane->locks = array();
  $pane->uuid = '725208a2-3d18-4a46-a6a4-fcc2fe569c41';
  $display->content['new-725208a2-3d18-4a46-a6a4-fcc2fe569c41'] = $pane;
  $display->panels['middle'][2] = 'new-725208a2-3d18-4a46-a6a4-fcc2fe569c41';
  $pane = new stdClass();
  $pane->pid = 'new-222aa421-2829-4133-911d-6fa52811f33b';
  $pane->panel = 'middle';
  $pane->type = 'block';
  $pane->subtype = 'facetapi-FqcphxrKym6IbsUThGVguhgL1T0A0hCr';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 1,
    'override_title_text' => 'Order',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 3;
  $pane->locks = array();
  $pane->uuid = '222aa421-2829-4133-911d-6fa52811f33b';
  $display->content['new-222aa421-2829-4133-911d-6fa52811f33b'] = $pane;
  $display->panels['middle'][3] = 'new-222aa421-2829-4133-911d-6fa52811f33b';
  $pane = new stdClass();
  $pane->pid = 'new-72710dca-362b-4467-b3aa-75d5bed777f1';
  $pane->panel = 'middle';
  $pane->type = 'block';
  $pane->subtype = 'facetapi-tIZ1JRmbYInLL1yf9D0Px08TGrKIZoYZ';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 1,
    'override_title_text' => 'Family',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 4;
  $pane->locks = array();
  $pane->uuid = '72710dca-362b-4467-b3aa-75d5bed777f1';
  $display->content['new-72710dca-362b-4467-b3aa-75d5bed777f1'] = $pane;
  $display->panels['middle'][4] = 'new-72710dca-362b-4467-b3aa-75d5bed777f1';
  $pane = new stdClass();
  $pane->pid = 'new-6ec41584-b39e-4c0f-aed3-56cadd1d8934';
  $pane->panel = 'middle';
  $pane->type = 'block';
  $pane->subtype = 'facetapi-YzqAoW11OmUy0X9b01VFiXcmyx9ma0p6';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 1,
    'override_title_text' => 'Genus',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 5;
  $pane->locks = array();
  $pane->uuid = '6ec41584-b39e-4c0f-aed3-56cadd1d8934';
  $display->content['new-6ec41584-b39e-4c0f-aed3-56cadd1d8934'] = $pane;
  $display->panels['middle'][5] = 'new-6ec41584-b39e-4c0f-aed3-56cadd1d8934';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $mini->display = $display;
  $export['bacteria_list_kpcofgs'] = $mini;

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'bacteria_taxonomy';
  $mini->category = '';
  $mini->admin_title = 'Bacteria Taxonomy';
  $mini->admin_description = 'Bacteria Taxonomy mini-panel';
  $mini->requiredcontexts = array(
    0 => array(
      'identifier' => 'Node',
      'keyword' => 'node',
      'name' => 'entity:node',
      'entity_id' => '',
      'optional' => 0,
      'id' => 1,
    ),
  );
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'flexible';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = 'Bacteria Classification';
  $display->uuid = '65321105-732c-4a77-8a19-2be2903bac8e';
  $display->storage_type = 'panels_mini';
  $display->storage_id = 'bacteria_taxonomy';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-d3a65a9b-5027-4d5b-bd7e-bd980ff13eef';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_kingdom';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'inline',
    'formatter' => 'taxonomy_term_reference_link',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(),
    'context' => 'requiredcontext_entity:node_1',
    'override_title' => 1,
    'override_title_text' => 'Kingdom',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'd3a65a9b-5027-4d5b-bd7e-bd980ff13eef';
  $display->content['new-d3a65a9b-5027-4d5b-bd7e-bd980ff13eef'] = $pane;
  $display->panels['center'][0] = 'new-d3a65a9b-5027-4d5b-bd7e-bd980ff13eef';
  $pane = new stdClass();
  $pane->pid = 'new-44c831d8-1a51-46db-84f7-fe421905b48a';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_phylum_bacteria';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'inline',
    'formatter' => 'taxonomy_term_reference_link',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(),
    'context' => 'requiredcontext_entity:node_1',
    'override_title' => 1,
    'override_title_text' => 'Phylum',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = '44c831d8-1a51-46db-84f7-fe421905b48a';
  $display->content['new-44c831d8-1a51-46db-84f7-fe421905b48a'] = $pane;
  $display->panels['center'][1] = 'new-44c831d8-1a51-46db-84f7-fe421905b48a';
  $pane = new stdClass();
  $pane->pid = 'new-c3f02253-8475-4a0c-bf01-982fab17e8dc';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_class_bacteria';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'inline',
    'formatter' => 'taxonomy_term_reference_link',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(),
    'context' => 'requiredcontext_entity:node_1',
    'override_title' => 1,
    'override_title_text' => 'Class',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 2;
  $pane->locks = array();
  $pane->uuid = 'c3f02253-8475-4a0c-bf01-982fab17e8dc';
  $display->content['new-c3f02253-8475-4a0c-bf01-982fab17e8dc'] = $pane;
  $display->panels['center'][2] = 'new-c3f02253-8475-4a0c-bf01-982fab17e8dc';
  $pane = new stdClass();
  $pane->pid = 'new-838965ef-bcd6-4a11-8b2a-f6e5ae2e11a9';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_order_bacteria';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'inline',
    'formatter' => 'taxonomy_term_reference_link',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(),
    'context' => 'requiredcontext_entity:node_1',
    'override_title' => 1,
    'override_title_text' => 'Order',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 3;
  $pane->locks = array();
  $pane->uuid = '838965ef-bcd6-4a11-8b2a-f6e5ae2e11a9';
  $display->content['new-838965ef-bcd6-4a11-8b2a-f6e5ae2e11a9'] = $pane;
  $display->panels['center'][3] = 'new-838965ef-bcd6-4a11-8b2a-f6e5ae2e11a9';
  $pane = new stdClass();
  $pane->pid = 'new-1f887a49-ca6a-4ed3-bfc4-ccb6d4b98b86';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_family_bacteria';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'inline',
    'formatter' => 'taxonomy_term_reference_link',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(),
    'context' => 'requiredcontext_entity:node_1',
    'override_title' => 1,
    'override_title_text' => 'Fmaily',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 4;
  $pane->locks = array();
  $pane->uuid = '1f887a49-ca6a-4ed3-bfc4-ccb6d4b98b86';
  $display->content['new-1f887a49-ca6a-4ed3-bfc4-ccb6d4b98b86'] = $pane;
  $display->panels['center'][4] = 'new-1f887a49-ca6a-4ed3-bfc4-ccb6d4b98b86';
  $pane = new stdClass();
  $pane->pid = 'new-26fe3d5c-edc4-4e43-ab67-97650a89a181';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_genus_bacteria';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'inline',
    'formatter' => 'taxonomy_term_reference_link',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(),
    'context' => 'requiredcontext_entity:node_1',
    'override_title' => 1,
    'override_title_text' => 'Genus',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 5;
  $pane->locks = array();
  $pane->uuid = '26fe3d5c-edc4-4e43-ab67-97650a89a181';
  $display->content['new-26fe3d5c-edc4-4e43-ab67-97650a89a181'] = $pane;
  $display->panels['center'][5] = 'new-26fe3d5c-edc4-4e43-ab67-97650a89a181';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-d3a65a9b-5027-4d5b-bd7e-bd980ff13eef';
  $mini->display = $display;
  $export['bacteria_taxonomy'] = $mini;

  return $export;
}
