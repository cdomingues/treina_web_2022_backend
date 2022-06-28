<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function index()
    {
        return Pet::get();
    }

    //insere um registro novo no BD
    //só executa esse trecho se passar pela validação do Pet Request

    public function store(PetRequest $request)
    {
       
        
        $dadosDoPet = $request->all();
        //dd($dadosDoPet);
        //echo "testando novo controller";
        return Pet::create($dadosDoPet);
    }
}
 
