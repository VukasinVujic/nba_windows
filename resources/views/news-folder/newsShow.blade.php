@extends('layouts.master')


@section('title', 'NEW SHOW BLADE')
    
@section('content')

<h1>NEWS:</h1>
<h2>{{ $new->title }}</h2>
<br>
<h2>{{ $new->content }}</h2>

<h1>Author</h1>

<h2>{{ $new->user->name }}</h2>
<h2>{{ $new->user->email }}</h2>

@endsection


