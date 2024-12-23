<?php

require_once('scandir.class.php');

class AutoLoader
{
    private static $instance;

    private function __construct()
    {
        // Private constructor to prevent direct instantiation
    }

    public static function init()
    {
        if (self::$instance === null) {
            self::$instance = new self();
            spl_autoload_register([self::$instance, 'load']);
        }
        return self::$instance;
    }

    /* throw error if the class cannot be found */

    public static function load() {
        $_src = array(ROOT.'/system/core/', ROOT.'/system/helpers/', ROOT.'/system/library/', __APP_PATH . '/models', __APP_PATH . '/libraries');
        $_ext = array('php', 'class.php', 'model.php', 'driver.php', 'helper.php', 'controller.php');

        $files = scanDir::scan($_src, $_ext, true);
        
        foreach ($files as $file) {
            if (file_exists($file)) {
                require_once($file);
            }
        }
    }


    public function loadClass($className)
    {
        $directories = [
            ROOT . '/system/core/',
            ROOT . '/system/helpers/',
            ROOT . '/system/library/',
            __APP_PATH . '/models',
            __APP_PATH . '/libraries',
            __APP_PATH . '/helpers'
        ];

        $extensions = [
            'php',
            'class.php',
            'model.php',
            'driver.php',
            'helper.php',
            'controller.php'
        ];

        $files = scanDir::scan($directories, $extensions, true);

        foreach ($files as $file) {
            if (file_exists($file) && $this->matchesClassName($file, $className)) {
                require_once($file);
                break;
            }
        }
    }

    private function matchesClassName($file, $className)
    {
        $fileName = pathinfo($file, PATHINFO_FILENAME);
        return stripos($fileName, $className) !== false;
    }

}

?>