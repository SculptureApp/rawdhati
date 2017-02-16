<?php
/**
 * Created by PhpStorm.
 * User: Riahi
 * Date: 10/02/2017
 * Time: 09:58
 */

namespace App\Controller;


class KidController extends RootController{

    public function index(){

        $this->render('kid/index');
    }
}