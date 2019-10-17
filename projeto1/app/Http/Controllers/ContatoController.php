<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContatoController extends Controller
{
    public function index()
    {
        $data['titulo'] = "Minha página de contato";
        return view('contato', $data);
    }
    public function enviar(){

    }

}
