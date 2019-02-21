<?php
/**
 * Created by PhpStorm.
 * User: yuan
 * Date: 2019-02-21
 * Time: 17:31
 */

class Controller
{
    protected $view;
    public $calledAction = null;

    function __construct()
    {

    }

    function view($dataArray) {
        extract($dataArray);
        $class = lcfirst(substr(get_class($this), 0 , -10));
        $method = lcfirst(substr($this->calledAction, 0 , -6));
        require_once ('views/'.$class.'/'.$method.'.php');
    }
}
