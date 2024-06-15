<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Empréstimos:</h1>
        <a href="/loans/insert" class="btn btn-primary">Novo Empréstimo</a>
        <p><?= $mensagem ?></p>
        <table id="table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Livro</th>
                    <th>Membro</th>
                    <th>Data do Empréstimo</th>
                    <th>Data de Devolução</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($loan = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?= $loan['book_id'] ?></td>
                        <td><?= $loan['member_id'] ?></td>
                        <td><?= $loan['loan_date'] ?></td>
                        <td><?= $loan['return_date'] ?></td>
                        <td>
                            <a href="/loans/update/id/<?= $loan['loan_id'] ?>" class="btn btn-warning">Atualizar</a>
                            <a href="/loans/delete/id/<?= $loan['loan_id'] ?>" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        var table = new DataTable('#table', {
            language: {
                url: '//cdn.datatables.net/plug-ins/2.0.6/i18n/pt-BR.json',
            },
        });
    </script>
</body>

</html>
