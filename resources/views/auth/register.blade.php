@extends('layouts.master')

@section('title')
Register
@endsection

@section('content')
    
<div class="container ">
        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Name</label>
            <div class="col-8">
                <input id="text" name="name" type="text" class="form-control 
                {{$errors->has('name')? 'is-invalid':''}}"value='{{old('name')}}'>
                @include('partials.invalid-feedback',['field'=>'name'])            
            </div>
            </div>
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
    
                <div class="form-group row">
                        <label for="textarea" class="col-4 col-form-label">Password confirmation</label>
                        <div class="col-8">
                            <textarea id="textarea" name="password_confirmation" cols="40" rows="5" 
                            class="form-control {{$errors->has('password_confirmation') ? 'is-invalid':''}}"
                            >{{old('password_confirmation')}}</textarea>
                            @include('partials.invalid-feedback',['field'=>'password_confirmation'])
                        </div>
                        </div>
                
    
                @if($message=session('message'))
            <div class="form-group row">
                {{ $message }}
                
            </div>
                @endif
    
            <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class=
                "btn btn-primary">Register</button>
            </div>
            </div>
            <div>
    
        </form>
    </div>
    @endsection