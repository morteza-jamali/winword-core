<?php
	namespace WinWordCore\App;

	use Noodlehaus\Config as NDConfig;
	use WinWord\Config as WinConfig;

	class Config {
		public static function get($key) {
			return (new NDConfig(ABSPATH . 'config.json'))->get($key);
		}

		public static function getDefault($key) {
			return (new WinConfig([]))->get($key);
		}
	}
?>
