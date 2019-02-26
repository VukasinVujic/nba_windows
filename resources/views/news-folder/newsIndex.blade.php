@extends('layouts.master')

@section('title' ,'INDEX NEWS')
    

@section('content')

@foreach ($news as $new)


       <h3><a href="{{ route('show-news' , ['id' => $new->id])}}"> {{ $new->title }} </a> </h3> 
    
@endforeach
    
@endsection






