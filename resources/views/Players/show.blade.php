@extends('layouts.master')

@section('content')
    

<h1>Single player</h1>
        <br>
    
        <h2>{{ $player->first_name }}</h2>
        <h2>{{ $player->last_name }}</h2>
        <h2>{{ $player->email }}</h2>


@endsection



