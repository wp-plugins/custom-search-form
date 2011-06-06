<?php
/* ------------------------------------------------------------------------------
Plugin Name: custom-search-form
Plugin URI: http://wordpress.org/extend/plugins/custom-search-form/
Description: Custom Search widget with customizable search button text and title
Author: Bhaskar Bhattachariya
Version: 1.0
Author URI: http://bhattachariya.wordpress.com/
------------------------------------------------------------------------------ */

include_once('includes/SearchWidget.php');
include_once('includes/CustomSearchWidget.php');

// Tie into WordPress Hooks and any functions that should run on load.
add_action('widgets_init', 'CustomSearchWidget::register_this_widget');
/* EOF */
