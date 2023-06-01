<?php

class UserController extends Controller
{
    public function index()
    {
        $n = new UserModel();
        //$data = $n->getAll();
        //  exit;
        $this->loadingTemplate("Login", array(), array([
            "nome" => "ramon",
            "email" => "ramonwj.s@outlook.com"
        ]));
    }
}
