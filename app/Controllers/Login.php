<?php

namespace App\Controllers;

class Login extends BaseController{

    public function vistaLogin(){
        echo view('frontend/header');
        echo view('frontend/navbar');
        echo view('frontend/login');
        echo view('frontend/footer');
    }
}
