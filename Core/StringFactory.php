<?php
	namespace AbriCoderCore\Core;

	class StringFactory {
		public static function getStringBeforeToken($string , $token = "@") {
			return strtok($string , $token);
		}

		public static function getStringAfterToken($string , $token = "@") {
			strtok($string , $token);
			return strtok('');
		}
	}
?>
