<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function index()
    {
        $data['titulo'] = "Minha página de contato";
        return view('contato', $data);
    }

    public function enviar(Request $request)
    {
        $dadosEmail = array(
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'assunto' => $request->input('assunto'),
            'msg' => $request->input('msg'),
        );

        Mail::send('email.contato',$dadosEmail, function ($message){
            $message->from('formulario@josemalcher.net','Formulario teste de envio');
            $message->subject('Mensagem enviado pelo form de contato - test');
            $message->to('malcher.malch@gmail.com');
            //$message->to()->cc();

        });//template de email
        return redirect('contato')->with('success','Mensagem enviada, em breve vamos conversar!');
    }

}
