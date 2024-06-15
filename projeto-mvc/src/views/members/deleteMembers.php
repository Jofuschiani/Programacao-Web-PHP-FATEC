<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Membro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="mt-2 text-center">
            <h3>Excluir Membro</h3>
        </div>
        <form action="/members/delete" method="post">
            <input type="hidden" name="member_id" value="<?= $member["member_id"] ?>">
            <div class="row mt-4">
                <div class="col">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" name="name" class="form-control" value="<?= $member["name"] ?>" readonly disabled>
                </div>
                <div class="col">
                    <label for="address" class="form-label">Endereço:</label>
                    <input type="text" name="address" class="form-control" value="<?= $member["address"] ?>" readonly disabled>
                </div>
                <div class="col">
                    <label for="phone" class="form-label">Telefone:</label>
                    <input type="text" name="phone" class="form-control" value="<?= $member["phone"] ?>" readonly disabled>
                </div>
                <div class="col">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" name="email" class="form-control" value="<?= $member["email"] ?>" readonly disabled>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-center">
                    <p>Você deseja realmente excluir esse membro?</p>
                    <button type="submit" class="btn btn-danger">
                        Excluir
                    </button>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
