<?php

/*
  Plugin Name: Post Selection UI
  Version:     1.2.4
  Plugin URI:  http://voceplatforms.com
  Description: A WordPress plugin drop-in to abstract ui to select multiple posts and put ids into an input field
  Author:      Voce Platforms
  Author URI:  http://voceplatforms.com/
 */

require_once __DIR__ . '/src/Post_Selection_Box.php';
require_once __DIR__ . '/src/Post_Selection_UI.php';
require_once __DIR__ . '/src/functions.php';

if ( defined( 'ABSPATH' ) && function_exists( 'add_action' ) ) {
	if ( !has_action( 'init', array( 'Post_Selection_UI', 'init' ) ) ) {
		add_action( 'init', array( 'Post_Selection_UI', 'init' ) );
	}
}
