<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Módulo</title>
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
        <h1>Editar Módulo</h1>

        <div class="form-container">
            <form action="{{ route('modulos.update', $modulo->id) }}" method="POST">
                @csrf
                @method('POST') <!-- Adiciona um campo oculto para simular o método PUT -->

                <input type="hidden" name="_method" value="PUT"> <!-- Campo oculto para simular o método PUT -->

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" value="{{ old('nome', $modulo->nome) }}" required>
                    @error('nome')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea id="descricao" name="descricao" rows="4" required>{{ old('descricao', $modulo->descricao) }}</textarea>
                    @error('descricao')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="number" id="status" name="status" value="{{ old('status', $modulo->status) }}" required>
                    @error('status')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit">Atualizar Módulo</button>
                </div>
            </form>
        </div>

        <a href="{{ route('modulos.index') }}" class="btn btn-secondary">Voltar para a Lista</a>
    </div>
</body>
</html>
