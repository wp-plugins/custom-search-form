<?php
/**
* Search Widget
*
* Helper functions that assist the AdvancedSearchWidget class
*/

class SearchWidget {

/*	*
	* parse
	*
	* A simple parsing function for basic templating.
	*
	* @param $tpl string A formatting string containing [+placeholders+]
	* @param $hash array An associative array containing keys and values e.g. array('key' => 'value');
	* @return string Placeholders corresponding to the keys	of the hash will be replaced with the values the resulting string will be returned.
	*/
	static function parse($tpl, $hash) {
		foreach ($hash as $key => $value) {
			$tpl = str_replace('[+'.$key.'+]', $value, $tpl);
		}
		return $tpl;
	}
	
	static function searchform($tpl, $hash){
		$output = '<form id="searchform" action="../../wp-search/includes/'.home_url( '/' ).'" method="get" role="search"><div>
				<label class="screen-reader-text" for="s">Search for:</label>
				<input id="s" type="text" name="s" value="">
				<input id="searchsubmit" type="submit" value="'.$hash["searchButtonText"].'">
			</div>
		</form>';
		return $output;
	}
}
/*EOF*/