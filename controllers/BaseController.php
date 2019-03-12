<?php

class BaseController
{
    protected static $render = '';
    public function __construct()
    {
        self::$render = new Text_Template(dirname(__FILE__) . '/../views/Index.php');
    }
}
