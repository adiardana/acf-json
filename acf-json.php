<?php
/*
Plugin Name: ACF Json
Plugin URI: https://github.com/adiardana/acf-json
Description: Enable ACF Json feature
Version: 1.0
Author: Adi Ardana
Author URI: http://adiardana.github.io/
Copyright:
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    $path = dirname(__FILE__) . '/json';
    return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = dirname(__FILE__) . '/json';
    return $paths;
}
