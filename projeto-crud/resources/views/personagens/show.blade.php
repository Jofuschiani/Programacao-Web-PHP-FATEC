<! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Detalhes do Personagem</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="container mt-5">
            <h1>Detalhes do Personagem</h1>
            <div class="mb-3"><label class="form-label"><strong>ID:</strong></label>
                <p>{{ $personagens->id }}</p>
            </div>
            <div class="mb-3"><label class="form-label"><strong>Nome:</strong></label>
                <p>{{ $personagens->nome }}</p>
            </div>
            <div class="mb-3"><label class="form-label"><strong>Classe:</strong></label>
                <p>{{ $personagens->classe }}</p>
            </div>
            <div class="mb-3"><label class="form-label"><strong>Raça:</strong></label>
                <p>{{ $personagens->raca }}</p>
            </div>
            <div class="mb-3"><label class="form-label"><strong>Gênero:</strong></label>
                <p>{{ $personagens->genero }}</p>
            </div>
            <div class="mb-3"><label class="form-label"><strong>Arma:</strong></label>
                <p>{{ $personagens->arma }}</p>
            </div>
            
            <a href="{{ route('personagens.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    </body>

    </html>