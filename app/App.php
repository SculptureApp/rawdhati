<?php

class App{

    private static $_instance;
    protected static $title;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public static function autoload(){

        require ROOT . 'app/Autoloader.php';
        \App\Autoloader::register();

        require ROOT . 'core/Autoloader.php';
        \Core\Autoloader::register();

        $asset = \Core\Asset\Asset::getInstance();
    }

    /**
     * @return mixed
     */
    public static function getTitle()
    {
        return self::$title;
    }

    /**
     * @param mixed $title
     */
    public static function setTitle($title)
    {
        self::$title = $title;
    }
}