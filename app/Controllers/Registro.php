<?php
namespace App\Controllers;

class Registro extends BaseController{

    public function vistaRegistro(){
        echo view('frontend/header');
        echo view('frontend/navbar');
        echo view('frontend/registrarse');
        echo view('frontend/footer');
    }
}
