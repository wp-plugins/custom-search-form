<?php
/* *
* CustomSearchWidget extends WP_Widget
*
* This implements a WordPress widget that lets the manager customize the search form
*/

class CustomSearchWidget extends WP_Widget
{
	public $name = 'Custom Search Widget';
	public $description = 'Modifies the way the search form looks like.';

	/* List all controllable options here along with a default value.
	The values can be distinct for each instance of the widget. */
	public $control_options = array('title' => 'Search', 'searchButtonText' => 'Submit');
	
	//!!! Magic Functions
	// The constructor.
	function __construct()
	{
		$widget_options = array('classname' => __CLASS__, 'description' => $this->widget_desc);
		parent::__construct( __CLASS__, $this->name,$widget_options, $this->control_options);
	}

	//!!! Static Functions
	static function register_this_widget()
	{
		register_widget(__CLASS__);
	}
	
	
	/**
	* Displays content to the front-end.
	*
	* @param array $args Display arguments
	* @param array $instance The settings for the particular instance of the widget
	* @return none No direct output. This should instead print output directly.
	*/
	
	function widget($args, $instance)
	{
		$placeholders = array_merge($args, $instance);
		$placeholders['content'] = SearchWidget::searchform($tpl, $placeholders);
		$tpl = file_get_contents( dirname(dirname(__FILE__)) .'/tpls/customSearchWidget.tpl');
		print SearchWidget::parse($tpl, $placeholders);
	}
	
	/**
	* Displays the widget form in the manager, used for editing its settings
	*
	* @param array $instance The settings for the particular instance of the widget
	* @return none No value is returned directly, but form elements	are printed.
	*/
	
	function form( $instance )
	{
		$placeholders = array();
		foreach ( $this->control_options as $key => $val )
		{
			$placeholders[ $key .'.id' ] = $this->get_field_id( $key );
			$placeholders[ $key .'.name' ] = $this->get_field_name( $key );
			
			// This helps us avoid "Undefined index" notices.
			if ( isset($instance[ $key ] ) )
			{
				$placeholders[ $key .'.value' ] = esc_attr( $instance[ $key ] );
			}
			
			// Use the default (for new instances)
			else
			{
				$placeholders[ $key .'.value' ] = $this->control_options[ $key ];
			}
		}
		
		$tpl = file_get_contents( dirname(dirname(__FILE__)) .'/tpls/customSearchWidget_controls.tpl');
		print SearchWidget::parse($tpl, $placeholders);
		
	}	
}
/* EOF */