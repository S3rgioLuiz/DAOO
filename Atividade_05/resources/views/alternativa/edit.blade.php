{{-- resources/views/alternativa/edit.blade.php --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alternativa</title>
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
        .form-group input, .form-group select {
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
        .error {
            color: red;
            font-size: 0.875em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Alternativa</h1>

        <form action="{{ route('alternativa.update', $alternativa->id) }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="opcao">Opção</label>
                <input type="text" id="opcao" name="opcao" value="{{ old('opcao', $alternativa->opcao) }}" required>
                @error('opcao')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="1" {{ old('status', $alternativa->status) == '1' ? 'selected' : '' }}>Certo</option>
                    <option value="0" {{ old('status', $alternativa->status) == '0' ? 'selected' : '' }}>Errado</option>
                </select>
                @error('status')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn-primary">Atualizar Alternativa</button>
                <a href="{{ route('alternativas.index') }}" class="btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
