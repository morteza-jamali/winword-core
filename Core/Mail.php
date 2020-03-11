<?php
	namespace AbriCoderCore\Core;

	class Mail {
		private $mailer = null;

		public function __construct() {
			$transport = (new \Swift_SmtpTransport(Config::get('mail.smtp_server'),
				Config::get('mail.port') , Config::get('mail.encryption')))
				->setUsername(Config::get('mail.username'))
				->setPassword(Config::get('mail.password'));

			$this->mailer = new \Swift_Mailer($transport);
		}

		public function send($parameters) {
			$message = (new \Swift_Message($parameters['subject']))
				->setFrom([Config::get('mail.username') => $parameters['from_name']])
				->setTo([$parameters['to_email'] => $parameters['to_name']])
				->setBody($parameters['body'] , 'text/html');
			return $this->mailer->send($message);
		}
	}
?>
