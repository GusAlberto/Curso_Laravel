<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
// ACTIONS = Métodos dentro do controlador
// Rota irá rodar o controller e suas funções
    public function sobreNos()
    {
        return view('site.sobre-nos');
    }
}
