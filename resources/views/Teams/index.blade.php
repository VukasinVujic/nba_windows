@extends('layouts.master')

@section('content')
    
<h1>ALL TEAMS</h1>

@foreach ($teams as $team)

 <a href="{{ 'http://localhost/VIVIFY/napredni/Laravel/radOdKuce_19_02/nba/public/Teams/' . $team->id }}"> {{ $team->name }}</a> <br>      
@endforeach


@endsection

