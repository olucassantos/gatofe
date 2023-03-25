<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Gato #{{ $gato->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>{{ $gato->nome }} - {{ $gato->raca }}</h1>

            @if($gato->sexo == 'F')
                <h2>Menina</h2>
            @elseif($gato->sexo == 'M')
                <h2>Menino</h2>
            @elseif($gato->sexo == 'E')
                <h2>Menine</h2>
            @endif

            <h3>{{ $gato->idade }} anos</h3>

            <h3>Pelos {{ $gato->cor }}</h3>

            <p>
                {{ $gato->gatografia }}
            </p>

            <a class="btn btn-light" href="{{ route('gatos.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('gatos.edit', $gato->id) }}">Editar</a>

            <form method="POST" action="{{ route('gatos.destroy', $gato->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Gato" class="btn btn-danger">
            </form>
        </div>
    </body>
</html>
