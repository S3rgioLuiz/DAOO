<?php

namespace App\Http\Controllers;

use App\Models\Alternativa;
use App\Models\Questao;
use Illuminate\Http\Request;

class AlternativaController extends Controller
{

    public function index()
    {
        // Retornar a view com todas as alternativas
        return view('alternativa.index', [
            'alternativas' => Alternativa::all()
        ]);
    }

    public function create()
    {

        // Certifique-se de passar a lista de questões para a view
        $questoes = Questao::all();
        return view('alternativa.create', compact('questoes'));

    }

    public function store(Request $request)
    {
        $dados = $request->all();

        if(Alternativa::create($dados)){
            return redirect('/alternativas');
        }else dd("Erro!!!");

    }

    public function show($id)
    {
        // Mostrar a view com uma alternativa específica
        return view('alternativa.show', [
            'alternativa' => Alternativa::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        // Mostrar a view para editar uma alternativa específica
        return view('alternativa.edit', [
            'alternativa' => Alternativa::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $dados = $request->all();

        // Encontrar a alternativa pelo ID e atualizar
        $alternativa = Alternativa::findOrFail($id);
        $alternativa->update($dados);

        // Redirecionar para a lista de alternativas
        return redirect('/alternativas');
    }

    public function destroy($id)
{
    // Encontrar a alternativa pelo ID
    $alternativa = Alternativa::findOrFail($id);

    // Excluir a alternativa
    $alternativa->delete();

    // Redirecionar para a lista de alternativas
    return redirect('/alternativas');
}

}
