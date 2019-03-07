<?php
if(! function_exists('page_title')){
	function page_title($title) {
		$baseTitle = 'Laracarte-list of artisans';
		if ($title === '') {
			return $baseTitle;
		}
		else
			return $title.' | '.$baseTitle;
	}
}
if(! function_exists('activePage')){
	function activePage($route) {
		return Route::is($route)?'active':'';
	}
}