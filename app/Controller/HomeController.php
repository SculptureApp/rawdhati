<?php
/**
 * Created by PhpStorm.
 * User: Riahi
 * Date: 10/02/2017
 * Time: 09:33
 */

namespace App\Controller;


class HomeController extends RootController{

    public function index(){
        $this->render('home');
    }
}