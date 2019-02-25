@extends('layouts.master')

@section('title')

{{ $team->name }}
    
@endsection

@section('content')

<h1>Single team</h1>
    <br>

    <h2>Team name:   {{ $team->name }}</h2>
    <h2>Team email: {{ $team->email }}</h2>
    <h2>Team address:   {{ $team->address }}</h2>
    <h2>Team city:  {{ $team->city }}</h2>

    @foreach ($team->players as $player)

    <p>Player: <a href="{{ 'http://localhost/VIVIFY/napredni/Laravel/radOdKuce_19_02/nba/public/Players/'.$player->id}}"> {{ $player->first_name }} {{ $player->last_name }}
    </a> </p>  <br>
    @endforeach

@foreach ($team->comments as $comment)

<div class="p-4 alert-success">   
    <div class="text-muted"> {{ $comment->created_at }}</div>
    <strong>{{ 'Author: '. $comment->user->name }}</strong>
    <br>
    {{ 'Comment: '. $comment->content }}

</div>
<hr>
    
@endforeach
    

@endsection


