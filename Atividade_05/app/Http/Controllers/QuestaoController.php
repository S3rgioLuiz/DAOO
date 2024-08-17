<?php

namespace App\Http\Controllers;

use App\Models\Questao;
use Illuminate\Http\Request;

class QuestaoController extends Controller
{
    public function index()
    {
        // Retornar a view com todas as questões
        return view('questao.index', [
            'questoes' => Questao::all()
        ]);
    }

    public function create()
    {
        // Retornar a view para criar uma nova questão
        return view('questao.create');
    }

    public function store(Request $request)
    {
        // Criar uma nova questão
        $dados = $request->all();

        if(Questao::create($dados)){
            return redirect('/questoes');
        }else dd("Erro!!!");
    }

    public function show($id)
    {
        // Mostrar a view com uma questão específica
        return view('questao.show', [
            'questao' => Questao::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        // Mostrar a view para editar uma questão específica
        return view('questao.edit', [
            'questao' => Questao::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        // Atualizar uma questão existente
       $dados = $request->all();

        $questao = Questao::findOrFail($id);
        $questao->update($dados);

        return redirect('/questoes');
    }

    public function destroy($id)
    {
        // Encontrar e excluir a questão pelo ID
        $questao = Questao::findOrFail($id);
        $questao->delete();

        return redirect('/questoes');
    }
}
