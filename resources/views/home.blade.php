<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID TRENO</th>
                <th scope="col">COMPAGNIA</th>
                <th scope="col">STAZIONE DI PARTENZA</th>
                <th scope="col">STAZIONE DI ARRIVO</th>
                <th scope="col">ORARIO PARTENZA</th>
                <th scope="col">ORARIO ARRIVO</th>
                <th scope="col">CODICE TRENO</th>
                <th scope="col">NUMERO CARROZZA</th>
                <th scope="col">PUNTUALE</th>
                <th scope="col">CANCELLATO</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <th scope="row">{{$train['id']}}</th>
                    <td>{{$train['company']}}</td>
                    <td>{{$train['departure_station']}}</td>
                    <td>{{$train['arrival_station']}}</td>
                    <td>{{$train['departure_time']}}</td>
                    <td>{{$train['arrival_time']}}</td>
                    <td>{{$train['train_code']}}</td>
                    <td>{{$train['carriages_number']}}</td>
                    <td>{{$train['on_time']== 0 ? 'no':'yes'}}</td>
                    <td>{{$train['cancelled']== 0 ? 'no':'yes'}}</td>
                  </tr>
                @endforeach
             
            </tbody>
          </table>

    </body>
</html>
