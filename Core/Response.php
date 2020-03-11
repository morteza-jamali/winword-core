<?php
	namespace AbriCoderCore\Core;

	class Response {
		private $response = null;

		public function __construct($response = null) {
			$this->response = $response;
		}

		public function success($values) {
			return new Response([
				'type' => 'success' ,
				'message' => $values
			]);
		}

		public function error($values) {
			return new Response([
				'type' => 'error' ,
				'message' => $values
			]);
		}

		public function returnMsg() {
			return $this->response;
		}
	}
?>
