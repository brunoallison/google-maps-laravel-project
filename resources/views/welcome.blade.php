<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        {!! $map['js'] !!}
    </head>
    <body>
        <div id="mapa">
            {!! $map['html'] !!}
        </div>
        <div id="form">
            <form action="{{route('maps.store')}}" method="post" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div>
                    <label for="address">Endereco:</label>
                    <input type="text" id="address" name="address"/>
                </div>
                <div>
                    <label for="latitude">Latitude:</label>
                    <input type="number" step="0.01" id="latitude" name="latitude"/>
                </div>
                <div>
                    <label for="longitude">Longitude:</label>
                    <input type="number" step="0.01" id="longitude" name="longitude" />
                </div>
                <div class="button">
                    <button type="submit">Salvar Localizacao</button>
                </div>
            </form>
        </div>
    </body>
</html>
