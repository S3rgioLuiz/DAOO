{{-- resources/views/questao/show.blade.php --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Questão</title>
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
        .btn-delete {
            background-color: #dc3545;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalhes da Questão</h1>

        <div class="module-details">
            <h2>{{ $questao->pergunta }}</h2>
            <p><strong>Explicação:</strong> {{ $questao->explicacao }}</p>
            <p><strong>Referência:</strong> {{ $questao->referencia }}</p>
            <p><strong>Nível:</strong> {{ $questao->nivel }}</p>
            <p><strong>Status:</strong> {{ $questao->status }}</p>
            <p><strong>Criado em:</strong> {{ $questao->created_at->format('d/m/Y H:i') }}</p>
            <p><strong>Atualizado em:</strong> {{ $questao->updated_at->format('d/m/Y H:i') }}</p>
        </div>

        <div>
            <h2>Alternativas</h2>
            @if($questao->alternativas->isEmpty())
                <p>Não há alternativas para esta questão.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Opção</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($questao->alternativas as $alternativa)
                            <tr>
                                <td>{{ $alternativa->id }}</td>
                                <td>{{ $alternativa->opcao }}</td>
                                <td>{{ $alternativa->status ? 'Certo' : 'Errado' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <div class="action-buttons">
            <a href="{{ route('questoes.index') }}" class="btn btn-secondary">Voltar para a Lista</a>
        </div>
    </div>
</body>
</html>
