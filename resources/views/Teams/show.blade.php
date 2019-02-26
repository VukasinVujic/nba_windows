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


<div class="container"> 

    <form method="POST" action="{{ route('creat-comment' , [ 'id' => $team->id]) }}">
        @csrf
        <div class="form-group row">
            <textarea name="content" cols="40" rows="5"
            class="form-control{{ $errors->has('content') ? 'is_invalid' : '' }}">
            </textarea>
            @include("partials.invalid-feedback", ['field' => 'content'])
        </div>
    </div>

        <div class="form-group row">
            <div class="offset-4 col-8">
                <button type="submit" class="btn btn-primary">Add comment</button>
            </div>
        </div>
    
    
    </form>


</div>
    

@endsection


