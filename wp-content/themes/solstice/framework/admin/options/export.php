<?php
$this->sections[] = array(
  'title' => esc_html__('Import/Export', 'solstice'),
  'desc' => esc_html__('Import/Export Options', 'solstice'),
  'icon' => 'el-icon-arrow-down',
  'fields' => array(

    array(
      'id'            => 'opt-import-export',
      'type'          => 'import_export',
      'title'         => esc_html__('Import Export', 'solstice'),
      'subtitle'      => esc_html__('Save and restore your Redux options', 'solstice'),
      'full_width'    => false,
    ),
  ),
);
