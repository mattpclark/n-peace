<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column with narrow left-hand column'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol_33_67.png',
  'theme' => 'twocol_33_67',
  'css' => 'twocol_33_67.css',
  'regions' => array(
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
