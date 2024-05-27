<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = 
        [
            0 => 
        [
            'nome' => 'Fornecedor 1', 
            'status'=> 'N', 
            'cnpj' => '00.000.000/000-00',
            'ddd' => '41', // Curitiba (PR)
            'telefone' => '9999-9999'
        ],
        1 => 
        [
            'nome' => 'Fornecedor 2', 
            'status'=> 'S',
            'cnpj' => null,
            'ddd' => '21', // Rio de Janeiro (RJ)
            'telefone' => '1111-1111'
        ],
        2 => 
        [
            'nome' => 'Fornecedor 3', 
            'status'=> 'S',
            'cnpj' => null,
            'ddd' => '42', // Ponta grossa (PR)
            'telefone' => '5555-5555'
        ],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
