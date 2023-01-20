<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Gare</title>
</head>
<body>
    <ol>
        @foreach ($matches as $match)
            <li>Gara: {{$match->squadra_casa}} - {{$match->squadra_ospite}} : {{$match->risultato}}<br>
            Rimborso: {{$match->rimborso}} € <br>
            Luogo e data: {{$match->citta}} <br> {{$match->data}} {{$match->orario}}</li>
        @endforeach
    </ol>
</body>
</html>