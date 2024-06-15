<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Empréstimo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="mt-2 text-center">
            <h3>Excluir Empréstimo</h3>
        </div>
        <form action="/loans/delete" method="post">
            <input type="hidden" name="loan_id" value="<?= $loan['loan_id'] ?>">
            <div class="row mt-4">
                <div class="col-6">
                    <label for="book_id" class="form-label">ID do Livro:</label>
                    <input type="text" name="book_id" class="form-control" value="<?= $loan['book_id'] ?>" readonly disabled>
                </div>
                <div class="col-6">
                    <label for="member_id" class="form-label">ID do Membro:</label>
                    <input type="text" name="member_id" class="form-control" value="<?= $loan['member_id'] ?>" readonly disabled>
                </div>
                <div class="col-6 mt-3">
                    <label for="loan_date" class="form-label">Data de Empréstimo:</label>
                    <input type="text" name="loan_date" class="form-control" value="<?= $loan['loan_date'] ?>" readonly disabled>
                </div>
                <div class="col-6 mt-3">
                    <label for="return_date" class="form-label">Data de Devolução:</label>
                    <input type="text" name="return_date" class="form-control" value="<?= $loan['return_date'] ?>" readonly disabled>
                </div>
                <div class="row mt-3">
                    <div class="col text-center">
                        <p>Você deseja realmente excluir esse empréstimo?</p>
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
