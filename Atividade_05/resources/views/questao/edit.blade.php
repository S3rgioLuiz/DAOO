<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Questão</title>
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
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Questão</h1>

        <form action="{{ route('questao.update', $questao->id) }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="pergunta">Pergunta</label>
                <input type="text" id="pergunta" name="pergunta" value="{{ old('pergunta', $questao->pergunta) }}" required>
            </div>

            <div class="form-group">
                <label for="explicacao">Explicação</label>
                <textarea id="explicacao" name="explicacao" rows="4">{{ old('explicacao', $questao->explicacao) }}</textarea>
            </div>

            <div class="form-group">
                <label for="referencia">Referência</label>
                <input type="text" id="referencia" name="referencia" value="{{ old('referencia', $questao->referencia) }}" required>
            </div>

            <div class="form-group">
                <label for="nivel">Nível</label>
                <input type="number" id="nivel" name="nivel" value="{{ old('nivel', $questao->nivel) }}" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="number" id="status" name="status" value="{{ old('status', $questao->status) }}" required>
            </div>

            <button type="submit" class="btn-primary">Atualizar Questão</button>
            <a href="{{ route('questoes.index') }}" class="btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
