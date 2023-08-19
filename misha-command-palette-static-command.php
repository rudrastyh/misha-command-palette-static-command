<?php
/**
 * Plugin Name: Command Palette Static Command Example
 * Plugin URI: https://rudrastyh.com/wordpress/site-editor-command-palette.html
 * Description: Example of WordPress Command Palette static command.
 * Author: Misha Rudrastyh
 * Version: 1.0
 * Author URI: https://rudrastyh.com
 */




add_action( 'enqueue_block_editor_assets', 'rudr_static_command_example' );

function rudr_static_command_example() {

	wp_enqueue_script(
		'rudr-static-command',
		plugins_url( 'build/index.js', __FILE__ ),
		array(),
		filemtime( __DIR__ . '/build/index.js' ),
		true
	);

}
