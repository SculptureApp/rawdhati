<?php
/**
 * Created by PhpStorm.
 * User: Riahi
 * Date: 10/02/2017
 * Time: 09:59
 */

namespace App\Controller;


class ShareController extends RootController{

    public function index(){
        $this->render('share/index');
    }
}