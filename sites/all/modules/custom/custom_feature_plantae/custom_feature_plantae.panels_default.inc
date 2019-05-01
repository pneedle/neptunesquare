<?php

/**
 * @file
 * custom_feature_plantae.panels_default.inc
 */

/**
 * Implements hook_default_panels_mini().
 */
function custom_feature_plantae_default_panels_mini() {
  $export = array();

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'taxonomy';
  $mini->category = '';
  $mini->admin_title = 'Plantae Taxonomy';
  $mini->admin_description = 'Plantae Taxonomy mini-panel';
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
  $display->title = 'Classification';
  $display->uuid = '56944f72-be07-430d-9e9d-463dfdd41b89';
  $display->storage_type = 'panels_mini';
  $display->storage_id = 'taxonomy';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-a2163bf1-7f05-45da-8d05-cefeed4a8682';
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
    'override_title' => 0,
    'override_title_text' => '',
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
  $pane->uuid = 'a2163bf1-7f05-45da-8d05-cefeed4a8682';
  $display->content['new-a2163bf1-7f05-45da-8d05-cefeed4a8682'] = $pane;
  $display->panels['center'][0] = 'new-a2163bf1-7f05-45da-8d05-cefeed4a8682';
  $pane = new stdClass();
  $pane->pid = 'new-e1ce342f-aaca-43d5-b68c-5cf583b2bd40';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_subkingdom';
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
    'override_title_text' => 'Subkingdom',
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
  $pane->uuid = 'e1ce342f-aaca-43d5-b68c-5cf583b2bd40';
  $display->content['new-e1ce342f-aaca-43d5-b68c-5cf583b2bd40'] = $pane;
  $display->panels['center'][1] = 'new-e1ce342f-aaca-43d5-b68c-5cf583b2bd40';
  $pane = new stdClass();
  $pane->pid = 'new-0a6540c6-eac5-4d41-a939-6b95c1ef2793';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_superdivision';
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
    'override_title_text' => 'Superphylum',
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
  $pane->uuid = '0a6540c6-eac5-4d41-a939-6b95c1ef2793';
  $display->content['new-0a6540c6-eac5-4d41-a939-6b95c1ef2793'] = $pane;
  $display->panels['center'][2] = 'new-0a6540c6-eac5-4d41-a939-6b95c1ef2793';
  $pane = new stdClass();
  $pane->pid = 'new-d2586fd6-0d2e-46e3-bf1c-8b3a970cb9e8';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_phylum';
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
  $pane->position = 3;
  $pane->locks = array();
  $pane->uuid = 'd2586fd6-0d2e-46e3-bf1c-8b3a970cb9e8';
  $display->content['new-d2586fd6-0d2e-46e3-bf1c-8b3a970cb9e8'] = $pane;
  $display->panels['center'][3] = 'new-d2586fd6-0d2e-46e3-bf1c-8b3a970cb9e8';
  $pane = new stdClass();
  $pane->pid = 'new-26c5161e-ba8a-49e2-b49a-289c8f3cecda';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_class';
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
  $pane->position = 4;
  $pane->locks = array();
  $pane->uuid = '26c5161e-ba8a-49e2-b49a-289c8f3cecda';
  $display->content['new-26c5161e-ba8a-49e2-b49a-289c8f3cecda'] = $pane;
  $display->panels['center'][4] = 'new-26c5161e-ba8a-49e2-b49a-289c8f3cecda';
  $pane = new stdClass();
  $pane->pid = 'new-ef83a0b6-ffde-4347-a19f-0f2ec614f2b3';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_subclass';
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
    'override_title_text' => 'Subclass',
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
  $pane->uuid = 'ef83a0b6-ffde-4347-a19f-0f2ec614f2b3';
  $display->content['new-ef83a0b6-ffde-4347-a19f-0f2ec614f2b3'] = $pane;
  $display->panels['center'][5] = 'new-ef83a0b6-ffde-4347-a19f-0f2ec614f2b3';
  $pane = new stdClass();
  $pane->pid = 'new-5cb8404f-fdce-4e8e-b67f-a2a586124c58';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_order';
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
  $pane->position = 6;
  $pane->locks = array();
  $pane->uuid = '5cb8404f-fdce-4e8e-b67f-a2a586124c58';
  $display->content['new-5cb8404f-fdce-4e8e-b67f-a2a586124c58'] = $pane;
  $display->panels['center'][6] = 'new-5cb8404f-fdce-4e8e-b67f-a2a586124c58';
  $pane = new stdClass();
  $pane->pid = 'new-f5dbf82f-d92b-4670-b0ed-f2eab77b981a';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_family';
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
    'override_title_text' => 'Family',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 7;
  $pane->locks = array();
  $pane->uuid = 'f5dbf82f-d92b-4670-b0ed-f2eab77b981a';
  $display->content['new-f5dbf82f-d92b-4670-b0ed-f2eab77b981a'] = $pane;
  $display->panels['center'][7] = 'new-f5dbf82f-d92b-4670-b0ed-f2eab77b981a';
  $pane = new stdClass();
  $pane->pid = 'new-f5039462-c3a8-4340-9300-0efa44a7a297';
  $pane->panel = 'center';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_genus';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'inline',
    'formatter' => 'taxonomy_term_reference_plain',
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
  $pane->position = 8;
  $pane->locks = array();
  $pane->uuid = 'f5039462-c3a8-4340-9300-0efa44a7a297';
  $display->content['new-f5039462-c3a8-4340-9300-0efa44a7a297'] = $pane;
  $display->panels['center'][8] = 'new-f5039462-c3a8-4340-9300-0efa44a7a297';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-a2163bf1-7f05-45da-8d05-cefeed4a8682';
  $mini->display = $display;
  $export['taxonomy'] = $mini;

  return $export;
}
