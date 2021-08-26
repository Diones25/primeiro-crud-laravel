<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request) {

        $lista = [
            'farinha',
            'ovo',
            'açucar',
            'leite'
        ];

        $nome = 'Diones';
        $idade = 13;
        
        $data = [
            'nome' => $nome,
            'idade' => $idade,
            'lista' => $lista
        ];

        return view('config', $data);
    }

    public function info() {
        echo "Configurações INFO";
    }

    public function permissoes() {
        echo "Configurações PERMISSÕES";
    }
}
