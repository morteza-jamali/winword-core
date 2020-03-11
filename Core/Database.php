<?php
	namespace AbriCoderCore\Core;

	use Illuminate\Database\Capsule\Manager as Capsule;
	use Illuminate\Events\Dispatcher;
	use Illuminate\Container\Container;

	class Database {
		public function init() {
			$capsule = new Capsule();
			$capsule->addConnection([
				'driver'    => Config::get('database.driver'),
				'host'      => Config::get('database.host'),
				'database'  => Config::get('database.name'),
				'username'  => Config::get('database.username'),
				'password'  => Config::get('database.password'),
				'charset'   => Config::get('database.charset'),
				'collation' => Config::get('database.collation'),
				'prefix'    => Config::get('database.prefix'),
			]);
			$capsule->setEventDispatcher(new Dispatcher(new Container));
			$capsule->setAsGlobal();
			$capsule->bootEloquent();

			return $capsule;
		}
	}
?>
