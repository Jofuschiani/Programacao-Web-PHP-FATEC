<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Autores:</h1>
        <a href="/authors/insert" class="btn btn-primary">Novo Autor</a>
        <p><?= $mensagem ?></p>
        <table id="table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Nacionalidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($authors = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?= $authors['name'] ?></td>
                        <td><?= $authors['birthdate'] ?></td>
                        <td><?= $authors['nationality'] ?></td>
                        <td>
                            <a href="/authors/update/id/<?= $authors['author_id'] ?>" class="btn btn-warning">Atualizar</a>
                            <a href="/authors/delete/id/<?= $authors['author_id'] ?>" class="btn btn-danger">Excluir</a>
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
