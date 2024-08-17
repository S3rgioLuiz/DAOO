<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Questões</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Questões</h1>

        <a href="{{ route('questao.create') }}" class="btn btn-primary">Criar Nova Questão</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pergunta</th>
                    <th>Explicação</th>
                    <th>Referência</th>
                    <th>Nível</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questoes as $questao)
                    <tr>
                        <td>{{ $questao->id }}</td>
                        <td>{{ $questao->pergunta }}</td>
                        <td>{{ $questao->explicacao }}</td>
                        <td>{{ $questao->referencia }}</td>
                        <td>{{ $questao->nivel }}</td>
                        <td>{{ $questao->status }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('questao.show', $questao->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('questao.edit', $questao->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('questao.destroy', $questao->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
