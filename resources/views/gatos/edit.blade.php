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
            <h1>Edição do gato {{ $gato->id }}</h1>

            <form method="POST" action="{{ route('gatos.update', $gato->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ $gato->nome }}">
                </div>

                <div class="mb-3">
                    <label>Raça</label>
                    <input type="text" name="raca" class="form-control" value="{{ $gato->raca }}">
                </div>

                <div class="mb-3">
                    <label>Idade</label>
                    <input type="number" name="idade" class="form-control" value="{{ $gato->idade }}">
                </div>

                <div class="mb-3">
                    <label>Sexo</label>
                    <select name="sexo" class="form-control">
                        <option value="M" {{ $gato->sexo == 'M' ? 'selected' : '' }}>Menino</option>
                        <option value="F" {{ $gato->sexo == 'F' ? 'selected' : '' }}>Menina</option>
                        <option value="E" {{ $gato->sexo == 'E' ? 'selected' : '' }}>Menine</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Cor</label>
                    <input type="text" name="cor" class="form-control" value="{{ $gato->cor }}">
                </div>

                <div class="mb-3">
                    <label>Gatografia</label>
                    <textarea name="gatografia" id="" rows="5" class="form-control">{{ $gato->gatografia }}</textarea>
                </div>

                <div>
                    <input type="submit" value="Atualizar Gato" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
