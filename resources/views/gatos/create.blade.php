<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro de Gato</title>
    </head>
    <body>
        <div class="container mb-3">
            <h1>Novo Gato</h1>

            <form method="POST" action="{{ route('gatos.store') }}">
                @csrf

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Raça</label>
                    <input type="text" name="raca" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Idade</label>
                    <input type="number" name="idade" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Sexo</label>
                    <select name="sexo" class="form-control">
                        <option value="M">Menino</option>
                        <option value="F">Menina</option>
                        <option value="E">Menine</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Cor</label>
                    <input type="text" name="cor" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Gatografia</label>
                    <textarea name="gatografia" id="" rows="5" class="form-control"></textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar Gato" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
