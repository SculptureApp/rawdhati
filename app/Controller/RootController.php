<?php
/**
 * Created by PhpStorm.
 * User: Riahi
 * Date: 10/02/2017
 * Time: 08:52
 */

namespace App\Controller;

use Core\Controller\Controller;

class RootController extends Controller{

    protected $layout = 'default';

    public function __construct(){
        $this->viewpath = ROOT . 'page/Resource/View/';
    }

}