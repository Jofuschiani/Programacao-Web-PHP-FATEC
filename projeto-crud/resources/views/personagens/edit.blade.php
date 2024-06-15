<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Personagens</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>Edição de Personagens</h1>
    <form action="{{route('personagens.update', $personagens->id)}}" method="POST">
        @CSRF
        @method('PUT')
        <label for="nome">Modifique o nome: </label>
        <input type="text" name="nome" id="nome" value="{{ $personagens->nome }}"> <br><br>
        <label for="classe">Modifique a classe: </label>
        <input type="text" name="classe" id="classe" value="{{ $personagens->classe }}"> <br><br>
        <label for="raca">Modifique a raça: </label>
        <input type="text" name="raca" id="raca" value="{{ $personagens->raca }}"> <br><br>
        <label for="genero">Modifique o gênero: </label>
        <input type="text" name="genero" id="genero" value="{{ $personagens->genero }}"> <br><br>
        <label for="arma">Modifique a arma inicial: </label>
        <input type="text" name="arma" id="arma" value="{{ $personagens->arma }}"> <br><br>

        <button type="submit">Editar</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>