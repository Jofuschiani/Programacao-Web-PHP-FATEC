<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="mt-2 text-center">
            <h3>Excluir Autor</h3>
        </div>
        <form action="/authors/delete" method="post">
            <input type="hidden" name="author_id" value="<?= $authors["author_id"] ?>">
            <div class="row mt-4">
                <div class="col-6">
                    <label for="" class="form-label">Nome:</label>
                    <input type="text" name="name" class="form-control" value="<?= $authors["name"] ?>" readonly disabled>
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Data de Nascimento:</label>
                    <input type="text" name="birthdate" class="form-control" value="<?= $authors["birthdate"] ?>" readonly disabled>
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Nacionalidade:</label>
                    <input type="text" name="nationality" class="form-control" value="<?= $authors["nationality"] ?>" readonly disabled>
                </div>
                <div class="row mt-3">
                    <div class="col text-center">
                        <p>Você deseja realmente excluir esse autor?</p>
                        <button type="submit" class="btn btn-danger">
                            Excluir
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
