<?php
/**
* Plugin Name
*
* @package     WP show postmeta
* @author      Benjamin Heller
* @copyright   2016 Your Name or Company Name
* @license     GPL-2.0+
*
* @wordpress-plugin
* Plugin Name: WP Show Postmeta
* Description: Show postmeta on backend post edit
* Version:     0.1.0
* Author:      Benjamin Heller
* Author URI:  https://benjaminheller.net
* Text Domain: wp-show-postmeta
* License:     GPL-2.0+
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

// TODO add ability to edit postmeta

add_action( 'edit_form_after_title', 'wp_show_postmeta' );

function wp_show_postmeta( $post ) {
	$meta = get_post_meta( $post->ID );

	require_once( __DIR__ . '/postbox.php' );

}




