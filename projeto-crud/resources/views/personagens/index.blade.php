<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Personagens</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1>Personagens do RPG</h1>
    @if ($message = Session::get('Sucesso!'))
        <div class="alert alert-sucess">
            {{ $message }}
        </div>
    @endif
    <a href="{{ route('personagens.create') }}" class="btn btn-primary mb-3">Inserir Personagem</a>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Classe</th>
                <th>Raça</th>
                <th>Gênero</th>
                <th>Arma</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personagens as $c)
            <tr>
                <td>{{ $c->nome }}</td>
                <td>{{ $c->classe }}</td>
                <td>{{ $c->raca }}</td>
                <td>{{ $c->genero }}</td>
                <td>{{ $c->arma }}</td>
                <td>
                    <a href="{{ route('personagens.show', $c->id) }}" class="btn btn-warning btn-sm">Visualizar</a>
                    <a href="{{ route('personagens.edit', $c->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <a href="{{ route('personagens.delete', $c->id) }}" class="btn btn-danger btn-sm">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>
