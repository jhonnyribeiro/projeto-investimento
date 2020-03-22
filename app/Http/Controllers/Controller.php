<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $var = "Home controle de grupos de investimento";
        return view('welcome', [
            'title' => $var,
        ]);
    }

    public function cadastro()
    {
        echo "Tela de Cadastro";
    }

    public function login()
    {
        echo "Tela de Login";
    }
}
