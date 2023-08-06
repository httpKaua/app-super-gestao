<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(request $request)
    {

        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // echo $request->input('name');
        // echo '<br>';
        // echo $request->input('email');

        // $contato = new SiteContato();

        // $contato->name = $request->input('name');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo = $request->input('motivo');
        // $contato->msg = $request->input('msg');

        // $contato->create($request->all());

        // print_r($contato->getAttributes());
        // $contato->save();

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(request $request)
    {

        $regras =  [
            'name' => 'required|min:3|max:40|unique:site_contatos', //Min: 3 Max: 40
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contato_id' => 'required',
            'msg' => 'required|max:2000'
        ];
        
        $feedback = [
            'name.min' => 'O campo name precisa ter no mínimo 3 caracteres',
            'name.max' => 'O campo name precisa ter no máximo 40 caracteres',
            'name.unique' => 'O name informado já está em uso',

            'email.email' => 'O e-mail informado não é válido',
            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres',

            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $feedback);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
