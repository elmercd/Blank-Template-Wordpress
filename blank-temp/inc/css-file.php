<?php 
 $absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
 $wp_load = $absolute_path[0] . 'wp-load.php';
 $wp_config = $absolute_path[0] . 'wp-config.php';
 $wp_config = $absolute_path[0] . 'wp-config.php';
 require_once($wp_load);
 require_once($wp_config);

  /**
    Do stuff like connect to WP database and grab user set values
  */

  header('Content-type: text/css');
  header('Cache-control: must-revalidate');


global $redux_demo;
 
 echo  $redux_demo['css_editor'];
?>