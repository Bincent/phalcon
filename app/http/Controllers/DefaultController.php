<?php


namespace App\Http\Controllers;


use Phalcon\Mvc\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        $this->view->pick("default/index");
    }


    public function notFoundAction()
    {
        $this->view->pick("default/notFound");
    }

}
