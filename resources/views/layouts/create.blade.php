@extends('layouts.home')
@section('content')

<h1>create item</h1>

{!! Form::open(['action'=>'homepagescontroller@store','method'=>'POST'])!!}
<div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    {{Form::label('title2','Title2')}}
    {{Form::text('title2','',['class'=>'form-control','placeholder'=>'Title2'])}}
</div>
<div class="form-group">
    {{Form::label('body','Body')}}
    {{Form::textarea('p','',['class'=>'form-control','placeholder'=>'Title'])}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}    
{!!Form::close()!!}
@endsection