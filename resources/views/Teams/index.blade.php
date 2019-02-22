<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALL TEAMS</title>
</head>
<body>

    <h1>ALL TEAMS</h1>

    @foreach ($teams as $team)

     <a href="{{ 'http://localhost/VIVIFY/napredni/Laravel/radOdKuce_19_02/nba/public/Teams/' . $team->id }}"> {{ $team->name }}</a> <br>      
    @endforeach
    
</body>
</html>