<?php

class HomeController extends BaseController
{
    public function home()
    {
        $res = Article::first();
        self::$render->setFile(dirname(__FILE__) . '/../views/Home.php');
        self::$render->setVar(["content"=>$res['content']]);
        echo self::$render->render();
    }
}
