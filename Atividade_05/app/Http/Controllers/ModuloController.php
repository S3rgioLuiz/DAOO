<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{

    public function index()
    {
        // Retornar a view com todos os módulos
        return view('modulo.index', [
            'modulos' => Modulo::all()
        ]);
    }

    public function create()
    {
        // Retornar a view para criar um novo módulo
        return view('modulo.create');
    }

    public function store(Request $request)
    {
        // Validar os dados da requisição

        $dados = $request->all();

        if(Modulo::create($dados)){
            return redirect('/modulos');
        }else dd("Erro!!!");

    }

}
