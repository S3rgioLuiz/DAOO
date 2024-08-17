<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Nova Questão</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Criar Nova Questão</h1>

        <div class="form-container">
            <form action="{{ route('questao.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="pergunta">Pergunta</label>
                    <input type="text" id="pergunta" name="pergunta" value="{{ old('pergunta') }}" required>
                </div>

                <div class="form-group">
                    <label for="explicacao">Explicação</label>
                    <textarea id="explicacao" name="explicacao" rows="4" required>{{ old('explicacao') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="referencia">Referência</label>
                    <input type="text" id="referencia" name="referencia" value="{{ old('referencia') }}" required>
                </div>

                <div class="form-group">
                    <label for="nivel">Nível</label>
                    <input type="number" id="nivel" name="nivel" value="{{ old('nivel') }}" required>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="number" id="status" name="status" value="{{ old('status') }}" required>
                </div>

                <div class="form-group">
                    <button type="submit">Criar Questão</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
