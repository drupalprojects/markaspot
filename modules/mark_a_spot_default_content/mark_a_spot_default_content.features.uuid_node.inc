<?php
/**
 * @file
 * mark_a_spot_default_content.features.uuid_node.inc
 */

/**
 * Implements hook_uuid_features_default_content().
 */
function mark_a_spot_default_content_uuid_features_default_content() {
  $nodes = array();

  $nodes[] = array(
  'uid' => 0,
  'title' => 'Open311',
  'log' => '',
  'status' => 1,
  'comment' => 1,
  'promote' => 0,
  'sticky' => 0,
  'vuuid' => 'e004f20a-b52a-4be3-9fbd-c474cbdce07b',
  'type' => 'page',
  'language' => 'en',
  'created' => 1381564536,
  'tnid' => 0,
  'translate' => 0,
  'uuid' => '9d0c008e-3d48-4f83-bca7-bb8db947d8ff',
  'revision_uid' => 0,
  'body' => array(),
  'cid' => 0,
  'last_comment_name' => NULL,
  'last_comment_uid' => 0,
  'comment_count' => 0,
  'name' => '',
  'picture' => 0,
  'data' => NULL,
  'date' => '2013-10-12 09:55:36 +0200',
);
  $nodes[] = array(
  'uid' => 0,
  'title' => 'About',
  'log' => '',
  'status' => 1,
  'comment' => 1,
  'promote' => 0,
  'sticky' => 0,
  'vuuid' => '3c4854c3-3aa9-49f9-8da4-f7c1f5e3154f',
  'type' => 'page',
  'language' => 'en',
  'created' => 1381564552,
  'tnid' => 0,
  'translate' => 0,
  'uuid' => 'b5e1651f-9aad-457f-83e6-2a761ad2fd76',
  'revision_uid' => 0,
  'body' => array(),
  'cid' => 0,
  'last_comment_name' => NULL,
  'last_comment_uid' => 0,
  'comment_count' => 0,
  'name' => '',
  'picture' => 0,
  'data' => NULL,
  'date' => '2013-10-12 09:55:52 +0200',
);
  return $nodes;
}
