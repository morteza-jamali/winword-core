<?php 
    namespace WinWordCore\App;

    class View {
        public static function display($path , $parameters = [] , $extension = '.pug') {
            \Phug::displayFile(Config::getDefault('path.views') . $path . $extension , $parameters);
        }

	    public static function render($path , $parameters = [] , $extension = '.pug') {
		    return \Phug::renderFile(Config::getDefault('path.views') . $path . $extension , $parameters);
        }

        public static function getScripts($names) {
        	$src = [];

        	foreach ($names as $name) {
	            array_push($src , "<script src='" .
	                              Config::getDefault("scripts.$name") . "'></script>");
	        }

        	return $src;
        }

	    public static function getStyles($names) {
		    $href = [];

		    foreach ($names as $name) {
			    array_push($href , "<link href='" .
			                      Config::getDefault("styles.$name") . "' rel='stylesheet' type='text/css'>");
		    }

		    return $href;
	    }

	    public static function getImage($name) {
        	return Config::getDefault('url.img') . $name;
	    }
    }
?>