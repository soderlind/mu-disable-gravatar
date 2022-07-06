<?php
/**
 * MU Disable Gravatar
 *
 * @package     Soderlind\Plugin\MU\Disable_Gravatar
 * @author      Per Soderlind
 * @copyright   2021 Per Soderlind
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: MU Disable Gravatar
 * Plugin URI: https://github.com/soderlind/mu-disable-gravatar
 * GitHub Plugin URI: https://github.com/soderlind/mu-disable-gravatar
 * Description: Disable Gravatar.
 * Version:     1.0.0
 * Author:      Per Soderlind
 * Author URI:  https://soderlind.no
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

declare( strict_types = 1 );
namespace Soderlind\Plugin\MU\Disable_Gravatar;

if ( ! defined( 'ABSPATH' ) ) {
	wp_die();
}

add_filter( 'pre_get_avatar', '__return_empty_string' );
add_filter( 'get_avatar', '__return_empty_string' );
