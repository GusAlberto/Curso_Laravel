<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
// ACTIONS = Métodos dentro do controlador
// Rota irá rodar o controller e suas funções
    public function principal()
    {
        echo 'Seja bem vindo ao aprendizado!';
    }
}
