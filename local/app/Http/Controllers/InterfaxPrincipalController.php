<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


class InterfaxPrincipalController extends Controller
{

    public function actionBienvenidoContactame()
    {

    	//logica negocio


        return View::make('contactame.bienvenido');


    }

}
