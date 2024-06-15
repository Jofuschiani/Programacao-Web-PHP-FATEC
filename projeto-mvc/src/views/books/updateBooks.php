<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="mt-2 text-center">
            <h3>Atualizar Livro</h3>
        </div>
        <form action="/books/edit" method="post">
            <input type="hidden" name="book_id" value="<?= $books["book_id"] ?>">
            <div class="row mt-4">
                <div class="col">
                    <label for="title" class="form-label">Título:</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?= $books["title"] ?>" required>
                </div>
                <div class="col">
                    <label for="author_id" class="form-label">Autor:</label>
                    <select name="author_id" id="author_id" class="form-select">
                        <option value="">Nome do Autor:</option>
                        <?php foreach ($authors as $author): ?>
                            <?php if ($author['author_id'] == $book['author_id']): ?>
                                <option value="<?php echo $author['author_id']; ?>" selected><?php echo $author['name']; ?></option>
                            <?php else: ?>
                                <option value="<?php echo $author['author_id']; ?>"><?php echo $author['name']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>             
                </div>       
                <div class="col">
                    <label for="published_year" class="form-label">Data de Publicação:</label>
                    <input type="date" name="published_year" id="published_year" class="form-control" value="<?= $books["published_year"] ?>" required>
                </div>
                <div class="col">
                    <label for="genre" class="form-label">Gênero:</label>
                    <input type="text" name="genre" id="genre" class="form-control" value="<?= $books["genre"] ?>" required>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-center">
                    <button type="submit" class="btn btn-success">Atualizar</button>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
