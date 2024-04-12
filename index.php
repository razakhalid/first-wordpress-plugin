<?php
/*
 * Plugin Name:       Udemy Plus
 * Plugin URI:        https://udemy.com
 * Description:       A plugin for adding blocks to a theme.
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.2
 * Author:            Raza Khalid
 * Author URI:        https://udemy.com
 * Text Domain:       udemy-plus
 * Domain Path:       /languages
 */

if (!function_exists('add_action')) {
    echo 'Seems like you are here on accident';
    exit;
}

// setup
define('UP_PLUGIN_DIR', plugin_dir_path(__FILE__));

// includes
include(UP_PLUGIN_DIR . 'includes/register-blocks.php');

// hooks
add_action('init', 'up_register_blocks');