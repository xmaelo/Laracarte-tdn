<?php
if(! function_exists('page_title')){
	function page_title($title) {
		$baseTitle = config('app.name').'-list of artisans';
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

if(!function_exists('flashing')){
	function flashing ($message){
		    session()->flash('notification.message', $message);
       
	}
}