<?php
	namespace AbriCoderCore\Core;

	use Noodlehaus\Config as NDConfig;
	use AbriCoder\ACDefaultConfig;

	class Config {
		public static function get($key) {
			return (new NDConfig(ABSPATH . 'ac-config.json'))->get($key);
		}

		public static function getDefault($key) {
			return (new ACDefaultConfig([]))->get($key);
		}
	}
?>
