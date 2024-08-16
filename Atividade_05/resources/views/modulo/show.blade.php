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
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalhes do Módulo</h1>

        <div class="module-details">
            <h2>{{ $modulo->nome }}</h2>
            <p><strong>Descrição:</strong> {{ $modulo->descricao }}</p>
            <p><strong>Status:</strong> {{ $modulo->status }}</p>
        </div>

        <div class="action-buttons">
            <a href="{{ route('modulos.index') }}" class="btn btn-secondary">Voltar para a Lista</a>
        </div>
    </div>
</body>
</html>
