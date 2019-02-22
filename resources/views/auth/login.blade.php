@extends('layouts.master')

@section('title')
Login
@endsection

@section('content')
<div class="container ">
        <form method="POST" action="{{route('login')}}">
            @csrf
    
            <div class="form-group row">
            <label for="textarea" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <textarea id="textarea" name="email" cols="40" rows="5" 
                class="form-control {{$errors->has('email') ? 'is-invalid':''}}"
                >{{old('email')}}</textarea>
                @include('partials.invalid-feedback',['field'=>'email'])
                
            </div>
            </div>
    
            <div class="form-group row">
                <label for="textarea" class="col-4 col-form-label">Password</label>
                <div class="col-8">
                    <textarea id="textarea" name="password" cols="40" rows="5" 
                    class="form-control {{$errors->has('password') ? 'is-invalid':''}}"
                    >{{old('password')}}</textarea>
                    @include('partials.invalid-feedback',['field'=>'password'])
                    
                    
                    
                </div>
                </div>
                {{-- ovo ispod je forma za password! --}}
                {{-- <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password"/>
                    @include('partials.invalid-feedback', ['field' => 'password'])
                </div> --}}
    
                <div class="form-group">
                        <input 
                        class="form-control {{ $errors->has("message") ? "is-invalid" : "" }}" 
                        type="hidden" 
                        />
        
                        @include("partials.invalid-feedback", ['field' => 'message'])
        
                    </div>
    
            <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class=
                "btn btn-primary">Login</button>
            </div>
            </div>
            <div>
    
        </form>
    </div>
    @endsection