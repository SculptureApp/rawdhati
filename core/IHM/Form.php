<?php
/**
 * Created by PhpStorm.
 * User: Riahi
 * Date: 09/02/2017
 * Time: 11:43
 */

namespace Core\IHM;

class Form {

    protected function convertIHM($html){
        return "<div>{$html}</div>";
    }

    protected function input($name, $option = []){
        $type = isset($option['type']) ? $option['type'] : 'text';
        return $this->convertIHM('<input type="'. $type .'" name="'. $name .'" placeholder ='. ucfirst($name) .'>');
    }

    protected function submit($value){
        $this->convertIHM('<button type="submit">'. $value .'</button>');
    }

}