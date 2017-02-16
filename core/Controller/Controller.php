<?php
/**
 * Created by PhpStorm.
 * User: Riahi
 * Date: 09/02/2017
 * Time: 12:10
 */

namespace Core\Controller;


class Controller {

    protected $viewpath;
    protected $layout;

    protected function render($view){
        $asset = \Core\Asset\Asset::getInstance();
        ob_start();

        require($this->viewpath . $view . '.php');
        $contenu = ob_get_clean();

        require($this->viewpath . 'Default/' .$this->layout . '.php');
    }

}