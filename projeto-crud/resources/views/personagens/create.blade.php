<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar personagem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
    <h1>Criação de personagens.</h1>
    <form action="{{route('personagens.store')}}" method="POST">  
        @CSRF
        <label for="nome">Selecione o nome: </label>
        <input type="text" name="nome" id="nome"> <br> <br>
        <label for="classe">Selecione a classe: </label>
        <input type="text" name="classe" id="classe"> <br><br>
        <label for="raca">Selecione a raça: </label>
        <input type="text" name="raca" id="raca"> <br><br>
        <label for="genero">Selecione o gênero: </label>
        <input type="text" name="genero" id="genero"> <br><br>
        <label for="arma">Selecione a arma inicial: </label>
        <input type="text" name="arma" id="arma"> <br><br>
        <button type="submit">Salvar</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>