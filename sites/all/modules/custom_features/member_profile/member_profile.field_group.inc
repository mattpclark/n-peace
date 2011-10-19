<?php
/**
 * @file
 * member_profile.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function member_profile_field_group_info() {
  $export = array();

  $field_group = new stdClass;
  $field_group->api_version = 1;
  $field_group->identifier = 'group_biographical|profile2|profile|form';
  $field_group->group_name = 'group_biographical';
  $field_group->entity_type = 'profile2';
  $field_group->bundle = 'profile';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Biographical Information',
    'weight' => '5',
    'children' => array(
      0 => 'field_profile_work',
      1 => 'field_profile_inspiration',
      2 => 'field_profile_network',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_biographical|profile2|profile|form'] = $field_group;

  $field_group = new stdClass;
  $field_group->api_version = 1;
  $field_group->identifier = 'group_contact|node|organizations|form';
  $field_group->group_name = 'group_contact';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'organizations';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Contact',
    'weight' => '39',
    'children' => array(
      0 => 'field_organization_address_line1',
      1 => 'field_country',
      2 => 'field_organziation_telephone',
      3 => 'field_organization_email',
      4 => 'field_organization_web',
      5 => 'field_organization_focalpoint',
      6 => 'field_organization_position',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_contact|node|organizations|form'] = $field_group;

  $field_group = new stdClass;
  $field_group->api_version = 1;
  $field_group->identifier = 'group_profile_contact|profile2|profile|form';
  $field_group->group_name = 'group_profile_contact';
  $field_group->entity_type = 'profile2';
  $field_group->bundle = 'profile';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Contact Details',
    'weight' => '3',
    'children' => array(
      0 => 'field_country',
      1 => 'field_profile_address',
      2 => 'field_profile_telephone',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_profile_contact|profile2|profile|form'] = $field_group;

  $field_group = new stdClass;
  $field_group->api_version = 1;
  $field_group->identifier = 'group_profile_professional|profile2|profile|form';
  $field_group->group_name = 'group_profile_professional';
  $field_group->entity_type = 'profile2';
  $field_group->bundle = 'profile';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Professional Details',
    'weight' => '4',
    'children' => array(
      0 => 'field_profile_cv',
      1 => 'field_profile_expertise',
      2 => 'field_profile_jobtitle',
      3 => 'field_profile_organization',
      4 => 'field_profile_role',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_profile_professional|profile2|profile|form'] = $field_group;

  return $export;
}
