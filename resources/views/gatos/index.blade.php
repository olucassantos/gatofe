<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lista de Gatos</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Gatos</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('gatos.create') }}">Novo Gato</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Nome</th>
                    <th>Cor</th>
                    <th>Sexo</th>
                    <th></th>
                </tr>

                @foreach ($gatos as $gato)
                    <tr>
                        <td>{{ $gato->nome }}</td>
                        <td>{{ $gato->cor }}</td>
                        <td>{{ $gato->sexo }}</td>
                        <td>
                            <a class="link" href="{{ route('gatos.show', $gato->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


    </body>
</html>
