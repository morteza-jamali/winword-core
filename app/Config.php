<?php
	namespace WinWordCore\App;

	use Noodlehaus\Config as NDConfig;
	use WinWord\Bootstrap\Bootstrap;

	class Config {
		public static function get($key) {
			return (new NDConfig(ABSPATH . 'wp-content/plugins/winword/config.json'))->get($key);
		}

		public static function getDefault($key) {
			return (new Bootstrap([]))->get($key);
		}
	}
?>
