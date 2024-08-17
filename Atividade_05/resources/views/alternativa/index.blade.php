{{-- resources/views/alternativa/index.blade.php --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alternativas</title>
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
        <h1>Lista de Alternativas</h1>

        <a href="{{ route('alternativa.create') }}" class="btn btn-primary">Criar Nova Alternativa</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Opção</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alternativas as $alternativa)
                    <tr>
                        <td>{{ $alternativa->id }}</td>
                        <td>{{ $alternativa->opcao }}</td>
                        <td>{{ $alternativa->status ? 'Certo' : 'Errado' }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('alternativa.show', $alternativa->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('alternativa.edit', $alternativa->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('alternativa.destroy', $alternativa->id) }}" method="POST" style="display:inline;">
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
