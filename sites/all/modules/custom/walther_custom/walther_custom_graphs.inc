<?php

/**
 * @file
 * Inc file for walther_custom.
 */

/**
 * Base svg builder function.
 */
function walther_custom_graphs_base($nid) {

  $o_node = node_load($nid);
  $love_val = !empty($o_node->field_love_meter_number['und'][0]['value']) ?
    $o_node->field_love_meter_number['und'][0]['value'] : '';
  $career_val = !empty($o_node->field_career_meter_number['und'][0]['value']) ?
    $o_node->field_career_meter_number['und'][0]['value'] : '';
  if (!empty($love_val) || !empty($career_val)) {
    $svg_path = libraries_get_path('svggraph');
    require_once $svg_path . '/SVGGraph.php';
    $settings = array(
      'auto_fit' => TRUE,
      'back_colour' => 'transparent',
      'stroke_colour' => '#888',
      'back_stroke_colour' => 'transparent',
      'axis_colour' => '#333',
      'axis_font' => 'Georgia',
      'axis_font_size' => 14,
      'grid_colour' => '#333',
      'grid_back_stripe' => TRUE,
      'show_grid' => FALSE,
      'label_colour' => '#000',
      'pad_right' => 20,
      'pad_left' => 20,
      'link_base' => '/',
      'link_target' => '_top',
      'project_angle' => 30,
      'minimum_grid_spacing' => 20,
      'minimum_units_y' => 10,
    );
    $colours = array(
      array('red', 'yellow'), array('blue', 'white'),
    );
    $graph = new SVGGraph(300, 300, $settings);
    $graph->colours = $colours;
    $values = array('Love' => $love_val, 'Career' => $career_val);
    $graph->Values($values);

    return $graph->Fetch('CylinderGraph');
  }
  else {
    return '';
  }
}
