<?php
/**
* @author Nerd Intelligence Agency
* @copyright 2019
**/

if (!defined('ABSPATH')) die();

//enque divi theme
function ideakit_ct_enqueue_parent() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'appointmentkit_ct_enqueue_parent' );

//Check for theme updates
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'https://github.com/Nerd-Intelligence-Agency/AppointmentKit-Theme',
  __FILE__,
  'appointmentkit-theme'
);
