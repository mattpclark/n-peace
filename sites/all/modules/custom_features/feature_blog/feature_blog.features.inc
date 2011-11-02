<?php
/**
 * @file
 * feature_blog.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function feature_blog_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
  list($module, $api) = func_get_args();
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function feature_blog_views_api() {
  list($module, $api) = func_get_args();
  if ($module == "views" && $api == "views_default") {
    return array("version" => "3.0");
  }
}

/**
 * Implements hook_node_info().
 */
function feature_blog_node_info() {
  $items = array(
    'blog' => array(
      'name' => t('Story'),
      'base' => 'node_content',
      'description' => t('Write your own online journal and share it with the community.'),
      'has_title' => '1',
      'title_label' => t('Story Title'),
      'help' => t('Please write a short title (five words or less) for your story.'),
    ),
  );
  return $items;
}
