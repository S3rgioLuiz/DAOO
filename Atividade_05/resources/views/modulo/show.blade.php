<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Módulo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .module-details {
            margin-bottom: 20px;
        }
        .module-details h2 {
            margin-top: 0;
        }
        .module-details p {
            margin: 5px 0;
        }
        .action-buttons a, .action-buttons form {
            margin-right: 10px;
        }
        .action-buttons form {
            display: inline;
        }
        .action-buttons button {
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            color: white;
            cursor: pointer;
        }
        .btn-edit {
            background-color: #007bff;
        }
        .btn-edit:hover {
            background-color: #0056b3;
        }
        .btn.btn-danger {
            background-color: #dc3545;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
        .questions-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .questions-table th, .questions-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .questions-table th {
            background-color: #f2f2f2;
        }
        .questions-table td a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalhes do Módulo</h1>

        <div class="module-details">
            <h2>{{ $modulo->nome }}</h2>
            <p><strong>Descrição:</strong> {{ $modulo->descricao }}</p>
            <p><strong>Status:</strong> {{ $modulo->status }}</p>
            <p><strong>Criado em:</strong> {{ $modulo->created_at->format('d/m/Y H:i') }}</p>
            <p><strong>Atualizado em:</strong> {{ $modulo->updated_at->format('d/m/Y H:i') }}</p>
        </div>

        <div class="action-buttons">
            <a href="{{ route('modulos.index') }}" class="btn btn-secondary">Voltar para a Lista</a>
        </div>

        <h2>Questões Associadas</h2>
        @if ($modulo->questoes->isEmpty())
            <p>Não há questões associadas a este módulo.</p>
        @else
            <table class="questions-table">
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
                    @foreach ($modulo->questoes as $questao)
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
        @endif
    </div>
</body>
</html>
