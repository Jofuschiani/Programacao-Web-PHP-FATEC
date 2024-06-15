<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Empréstimo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="mt-2 text-center">
            <h3>Inserir Empréstimo</h3>
        </div>
        <form action="/loans/new" method="post">
            <div class="row mt-4">

                <div class="col-4">
                    <label for="book_id" class="form-label">Livro:</label>
                    <select name="book_id" id="book_id" class="form-select" required>
                        <option value="">Selecione o Livro:</option>
                        <?php foreach ($books as $book): ?>
                            <option value="<?php echo $book['book_id']; ?>"><?php echo $book['title']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-4">
                    <label for="member_id" class="form-label">Membro:</label>
                    <select name="member_id" id="member_id" class="form-select" required>
                        <option value="">Selecione o Membro:</option>
                        <?php foreach ($members as $member): ?>
                            <option value="<?php echo $member['member_id']; ?>"><?php echo $member['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-4">
                    <label for="loan_date" class="form-label">Data de Empréstimo:</label>
                    <input type="date" name="loan_date" id="loan_date" class="form-control" required>
                </div>

                <div class="col-4 mt-3">
                    <label for="return_date" class="form-label">Data de Devolução:</label>
                    <input type="date" name="return_date" id="return_date" class="form-control" required>
                </div>

                <div class="row mt-3 text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Inserir</button>
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
