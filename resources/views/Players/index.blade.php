@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>All players </h1>

    @foreach ($players as $player)

    <li>{{ $player->first_name }}   {{ $player->last_name }}</li>
        
    @endforeach
    
</body>
</html>