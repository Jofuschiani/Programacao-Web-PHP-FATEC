<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="mt-2 text-center">
            <h3>Excluir Livro</h3>
        </div>
        <form action="/books/delete" method="post">
            <input type="hidden" name="book_id" value="<?= $books["book_id"] ?>">
            <div class="row mt-4">
                <div class="col-6">
                    <label for="title" class="form-label">Título:</label>
                    <input type="text" name="title" class="form-control" value="<?= $books["title"] ?>" readonly disabled>
                </div>
                <div class="col-6">
                    <label for="author_id" class="form-label">ID do Autor:</label>
                    <input type="text" name="author_id" class="form-control" value="<?= $books["author_id"] ?>" readonly disabled>
                </div>
                <div class="col-6 mt-3">
                    <label for="published_year" class="form-label">Data de Publicação:</label>
                    <input type="text" name="published_year" class="form-control" value="<?= $books["published_year"] ?>" readonly disabled>
                </div>
                <div class="col-6 mt-3">
                    <label for="genre" class="form-label">Gênero:</label>
                    <input type="text" name="genre" class="form-control" value="<?= $books["genre"] ?>" readonly disabled>
                </div>
                <div class="row mt-3">
                    <div class="col text-center">
                        <p>Você deseja realmente excluir esse livro?</p>
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
