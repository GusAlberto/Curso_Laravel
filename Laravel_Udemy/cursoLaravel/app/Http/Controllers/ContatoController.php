<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
// ACTIONS = Métodos dentro do controlador
// Rota irá rodar o controller e suas funções
    public function contato()
    {
        return view('site.contato');
    }
}
