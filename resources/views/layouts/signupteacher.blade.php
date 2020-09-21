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

{!!Form::open(['action'=>'teachercontroller@store','method'=>'POST'])!!}
{{Form::label('teacher','NAME')}}
{{Form::text('teacher-n','',['class'=>'form-control','placeholder'=>'teacher name'])}}
{{Form::label('email','Email')}}
{{Form::text('email-n','',['class'=>'form-control','placeholder'=>'Email Address'])}}
{{Form::label('password','Password')}}
{{Form::text('password-n','',['class'=>'form-control','placeholder'=>'enter password'])}}
{{Form::label('password2','Retype Password')}}
{{Form::text('password-n2','',['class'=>'form-control','placeholder'=>'enter password again'])}}
<div class="form-group">
    {{Form::label('Sign Up','Sign Up')}}
  
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
</div>
    {!!Form::close()!!}
</html>