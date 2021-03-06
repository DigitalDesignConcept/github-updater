<?php
/**
 * GitHub Updater
 *
 * @package   GitHub_Updater
 * @author    Andy Fragen forked by Frédéric DESCHAMPS
 * @license   GPL-2.0+
 * @link      https://github.com/UnPoilTefal/github-updater
 */

/*
Plugin Name:       GitHub Updater
Plugin URI:        https://github.com/UnPoilTefal/github-updater
Description:       A plugin to automatically update GitHub or Bitbucket hosted plugins and themes into WordPress. Plugin class based upon <a href="https://github.com/codepress/github-plugin-updater">codepress/github-plugin-updater</a>. Theme class based upon <a href="https://github.com/WordPress-Phoenix/whitelabel-framework">Whitelabel Framework</a> modifications.
Version:           2.8.2
Requires at least: 3.8.2
Tested up to:      4.0
Author:            Andy Fragen forked by Frédéric DESCHAMPS
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
Domain Path:       /languages
Text Domain:       github-updater
GitHub Plugin URI: https://github.com/UnPoilTefal/github-updater
GitHub Branch:     develop
GitHub Fork:       true
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Load all classes
if ( ! class_exists( 'GitHub_Updater' ) ) {
	require_once 'includes/class-github-updater.php';
	require_once 'includes/class-github-api.php';
	require_once 'includes/class-bitbucket-api.php';
}
if ( ! class_exists( 'GitHub_Plugin_Updater' ) ) {
	require_once 'includes/class-plugin-updater.php';
}
if ( ! class_exists( 'GitHub_Theme_Updater' ) ) {
	require_once 'includes/class-theme-updater.php';
}

// Instantiate main class GitHub_Updater
new GitHub_Updater;

/**
 * Calls GitHub_Updater::init() in init hook so other remote upgrader apps like
 * InfiniteWP, ManageWP, MainWP, and iThemes Sync will load and use all
 * of GitHub_Updater's methods, especially renaming.
 */
add_action( 'init', array( 'GitHub_Updater', 'init' ) );
