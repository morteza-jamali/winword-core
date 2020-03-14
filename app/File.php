<?php
    namespace WinWordCore\App;

    class File {
        public static function createFile($path , $content)
        {
            $file = fopen($path, "w");
            fwrite($file, $content);
            fclose($file);
        }
    }
?>