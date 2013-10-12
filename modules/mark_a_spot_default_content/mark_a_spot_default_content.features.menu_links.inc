<?php
/**
 * @file
 * mark_a_spot_default_content.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function mark_a_spot_default_content_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: menu-secondary-navigation_about:node/2
  $menu_links['menu-secondary-navigation_about:node/2'] = array(
    'menu_name' => 'menu-secondary-navigation',
    'link_path' => 'node/2',
    'router_path' => 'node/%',
    'link_title' => 'About',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-secondary-navigation_about:node/2',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 0,
  );
  // Exported menu link: menu-secondary-navigation_open311:node/1
  $menu_links['menu-secondary-navigation_open311:node/1'] = array(
    'menu_name' => 'menu-secondary-navigation',
    'link_path' => 'node/1',
    'router_path' => 'node/%',
    'link_title' => 'Open311',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-secondary-navigation_open311:node/1',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 0,
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('About');
  t('Open311');


  return $menu_links;
}
