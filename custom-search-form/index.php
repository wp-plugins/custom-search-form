<?php
/* ------------------------------------------------------------------------------
Plugin Name: custom-search-form
Plugin URI: http://127.0.0.1:8080
Description: Custom Search widget with customizable search button text and title
Author: Bhaskar Bhattachariya
Version: 1.0
Author URI: http://www.bhaskarbhattachariya.com/
------------------------------------------------------------------------------ */

include_once('includes/SearchWidget.php');
include_once('includes/CustomSearchWidget.php');

// Tie into WordPress Hooks and any functions that should run on load.
add_action('widgets_init', 'CustomSearchWidget::register_this_widget');
/* EOF */
