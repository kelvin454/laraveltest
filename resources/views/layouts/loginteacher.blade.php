<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

{{Form::open(array('action'=>'login'))}}
{{Form::label('email','Email')}}
{{Form::text('email-nv','',['class'=>'form-control','placeholder'=>'Email Address'])}}
{{Form::label('password','Password')}}


{{Form::text('password-nv','',['class'=>'form-control','placeholder'=>'enter your password '])}}
<div class="form-group">
    {{Form::label('login','Login in')}}
  
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
</div>
    {!!Form::close()!!}
</html>