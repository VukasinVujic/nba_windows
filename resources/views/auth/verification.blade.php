@extends('layouts.master')


@section('title')

verification

@endsection

@section('content')

<h3>Welcome user: {{ $user->name }} . Click <a href="{{ route('login') }}"> here </a> to login</h3>
    
@endsection



