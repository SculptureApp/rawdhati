<?php
/**
 * Created by PhpStorm.
 * User: Riahi
 * Date: 09/02/2017
 * Time: 12:07
 */

namespace App\Controller;

class ClasseController extends RootController{

    public function index(){
        $this->render('classe/index');
    }
}