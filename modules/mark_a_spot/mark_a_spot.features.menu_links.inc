<?php
/**
 * @file
 * mark_a_spot.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function mark_a_spot_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: main-menu_map:map
  $menu_links['main-menu_map:map'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'map',
    'router_path' => 'map',
    'link_title' => 'Map',
    'options' => array(
      'identifier' => 'main-menu_map:map',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 0,
  );
  // Exported menu link: main-menu_report-issue:node/add/report
  $menu_links['main-menu_report-issue:node/add/report'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'node/add/report',
    'router_path' => 'node/add',
    'link_title' => 'Report Issue',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'main-menu_report-issue:node/add/report',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -49,
    'customized' => 0,
  );
  // Exported menu link: main-menu_track-reports:list
  $menu_links['main-menu_track-reports:list'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'list',
    'router_path' => 'list',
    'link_title' => 'Track Reports',
    'options' => array(
      'identifier' => 'main-menu_track-reports:list',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 0,
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Home');
  t('Map');
  t('Report Issue');
  t('Track Reports');


  return $menu_links;
}
