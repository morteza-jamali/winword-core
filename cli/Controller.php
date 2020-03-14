<?php
    namespace WinWordCore\cli;

    use Composer\Script\Event;
    use WinWordCore\App\File;
    use WinWordCore\App\StringFactory;

    class Controller {
        public static function create(Event $event)
        {
            $file = StringFactory::getStringAfterToken($event->getArguments()[0] , '=');
            $type = StringFactory::getStringBeforeToken($event->getArguments()[0] , '=');

            if(empty($file)) {
                throw new \Exception('Please enter file name');
            }

            switch ($type) {
                case '--js':
                    File::createFile(
                        dirname(dirname(dirname(dirname(__DIR__)))) . "/resources/js/{$file}.js",
                        "import WinWord from './plugin';
WinWord.app.controller('{$file}Ctrl' , function (" . '$scope' . " , View) {
    // Place your code here
});");
                    echo '________ Controller created successfully ________';
                    break;
                case '--php':
                    File::createFile(
                        dirname(dirname(dirname(dirname(__DIR__)))) . "/app/controller/{$file}.php",
                        "<?php 
namespace WinWord\App\Controller;

class $file {
    // Your code is here
}
?>");
                    echo '________ Controller created successfully ________';
                    break;
                default :
                    throw new \Exception("Type $type is unknown");
                    break;
            }
        }
    }
?>