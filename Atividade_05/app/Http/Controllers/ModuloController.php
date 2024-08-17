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
        $dados = $request->all();

        if(Modulo::create($dados)){
            return redirect('/modulos');
        }else dd("Erro!!!");

    }

    public function show($id)
    {
        // Mostrar a view com um módulo específico
        return view('modulo.show', [
            'modulo' => Modulo::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        // Mostrar a view para editar um módulo específico
        return view('modulo.edit', [
            'modulo' => Modulo::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $dados = $request->all();

        // Encontrar o módulo pelo ID e atualizar
        $modulo = Modulo::findOrFail($id);
        $modulo->update($dados);

        // Redirecionar para a lista de módulos
        return redirect('/modulos');
    }

    public function destroy($id)
{
    // Encontrar o módulo pelo ID
    $modulo = Modulo::findOrFail($id);
    
    // Excluir o módulo
    $modulo->delete();
    
    // Redirecionar para a lista de módulos
    return redirect('/modulos');
}

}
