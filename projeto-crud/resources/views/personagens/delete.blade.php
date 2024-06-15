<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Personagens</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>Excluir Personagem</h1>
    <div class="alert alert-warning" role="alert">
        Tem certeza que deseja excluir esse personagem?
    </div> <br>
    <form action="{{route('personagens.destroy', $personagens->id)}}" method="POST">
        @CSRF
        @method('DELETE')
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" disabled="" value="{{ $personagens->nome }}"> <br><br>
        <label for="classe">Classe: </label>
        <input type="text" name="classe" id="classe" disabled="" value="{{ $personagens->classe }}"> <br><br>
        <label for="raca">Raça: </label>
        <input type="text" name="raca" id="raca" disabled="" value="{{ $personagens->raca }}"> <br><br>
        <label for="genero">Gênero: </label>
        <input type="text" name="genero" id="genero" disabled="" value="{{ $personagens->genero }}"> <br><br>
        <label for="arma">Arma: </label>
        <input type="text" name="arma" id="arma" disabled="" value="{{ $personagens->arma }}"> <br><br>

        <button type="submit">Excluir</button> <br>
        <a href="{{ route('personagens.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>