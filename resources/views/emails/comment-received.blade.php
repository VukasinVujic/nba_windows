@extends('layouts.master')

@section('title')
    
@endsection

@section('content')
    
<h1>Comment has been added to the team :  {{ $team->name }}</h1>
<p>Comment: {{ $comment->content }}</p>


@endsection


