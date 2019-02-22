<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Single team</h1>
    <br>

    <h2>{{ $team->name }}</h2>
    <h2>{{ $team->email }}</h2>
    <h2>{{ $team->address }}</h2>
    <h2>{{ $team->city }}</h2>

    @foreach ($team->players as $player)

    <a href="{{ 'http://localhost/VIVIFY/napredni/Laravel/radOdKuce_19_02/nba/public/Players/'.$player->id}}"> {{ $player->first_name }}
    </a> <br>
    @endforeach
    
</body>
</html>