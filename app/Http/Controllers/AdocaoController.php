<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adocao;

class AdocaoController extends Controller
{
    //cria um novo registro
    public function store(Request $request)
    {
        $request->validate([
            "email"=>['required','email'],
            "valor"=>['required','numeric','between:10,200'],
            "pet_id"=>['required','int','exists:pets,id']
        ]);
        $dadosAdocao = $request->all();

        return Adocao::create($dadosAdocao);
    }
}

