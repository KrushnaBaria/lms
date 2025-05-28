<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://krushnabria07
 * @since             1.0.0
 * @package           Lms_Svca
 *
 * @wordpress-plugin
 * Plugin Name:       LMS-SVCA
 * Plugin URI:        https://krushnabaria/lms
 * Description:       A Learning Management System (LMS) Is A That Manage Sudent Data And School Expense
 * Version:           1.0.0
 * Author:            Krushna Baria
 * Author URI:        https://krushnabria07/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lms-svca
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'LMS_SVCA_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-lms-svca-activator.php
 */
function activate_lms_svca() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lms-svca-activator.php';
	Lms_Svca_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-lms-svca-deactivator.php
 */
function deactivate_lms_svca() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lms-svca-deactivator.php';
	Lms_Svca_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_lms_svca' );
register_deactivation_hook( __FILE__, 'deactivate_lms_svca' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-lms-svca.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_lms_svca() {

	$plugin = new Lms_Svca();
	$plugin->run();

}
run_lms_svca();
