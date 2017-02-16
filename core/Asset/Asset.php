<?php
/**
 * Created by PhpStorm.
 * User: Riahi
 * Date: 07/02/2017
 * Time: 10:42
 */

namespace Core\Asset;


class Asset {

    private static $_instance;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new Asset();
        }
        return self::$_instance;
    }

    public function asset($web){
        return 'http://'. $_SERVER['SERVER_NAME'] .'/rawdhati/public/' . $web;
    }

    public function path($path){
        return 'index.php?p=' . $path;
    }
}