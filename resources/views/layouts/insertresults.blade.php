<!doctype html>
<html lang={{config('app.locale')}}>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name', 'PINGSCHOOL')}}</title>
</head>
<body>
    <h1><b>Pings School</b></h1>
    <div class="well"><a href="/dashboard">Back<a></div>

<h2>Welcome to the Editor</h2>
<h3>Insert student Marks</h3>
    {!! Form::open(['action'=>'homepagescontroller@store','method'=>'POST'])!!}
                               
<div class="form-group">
{{Form::label('student_name','Student name')}}
{{Form::text('student-name','',['class'=>'form-control','placeholder'=>'student name'])}}

<p><b>Enter student Marks</b><p>
    <div class="well">
    {{Form::label('Class','F1')}}
    {{Form::checkbox('chk','F1')}}
    {{Form::label('Class','F2')}}
    {{Form::checkbox('chk','F2')}}
    {{Form::label('Class','F3')}}
    {{Form::checkbox('chk','F3')}} 
    {{Form::label('class','F4')}}
    {{Form::checkbox('chk','F4')}}   
</div>
    {{Form::label('English','English')}}
{{Form::text('english-mk','',['class'=>'form-control','placeholder'=>'english mark'])}}
{{Form::label('history','History')}}
{{Form::text('history-mk','',['class'=>'form-control','placeholder'=>'history mark'])}}
{{Form::label('geography','Geography')}}
{{Form::text('geography-mk','',['class'=>'form-control','placeholder'=>'geography mark'])}}
{{Form::label('math','Mathematics')}}
{{Form::text('math-mk','',['class'=>'form-control','placeholder'=>'Mathematics'])}}
{{Form::label('agric','Agriculture')}}
{{Form::text('agric-mk','',['class'=>'form-control','placeholder'=>'Agriculture'])}}
{{Form::label('physics','Physics')}}
{{Form::text('physics-mk','',['class'=>'form-control','placeholder'=>'Physics'])}}
{{Form::label('chemistry','Chemistry')}}
{{Form::text('chemistry-mk','',['class'=>'form-control','placeholder'=>'Chemistry'])}}
{{Form::label('biology','Biology')}}
{{Form::text('biology-mk','',['class'=>'form-control','placeholder'=>'Biology'])}}
{{Form::label('computer','Computer-Studies')}}
{{Form::text('computer-mk','',['class'=>'form-control','placeholder'=>'Computer-Studies'])}}
{{Form::label('ent','Enterpreneurship Skills')}}
{{Form::text('ent-mk','',['class'=>'form-control','placeholder'=>'Enterpreneurship Skills'])}}
{{Form::label('cre','CRE')}}
{{Form::text('cre-mk','',['class'=>'form-control','placeholder'=>'CRE'])}}
{{Form::label('commerce','Commerce')}}
{{Form::text('commerce-mk','',['class'=>'form-control','placeholder'=>'commerce'])}}
{{Form::label('accounts','Accounts')}}
{{Form::text('accounts-mk','',['class'=>'form-control','placeholder'=>'Accounts'])}}
{{Form::label('td','Technical Drawing')}}
{{Form::text('td-mk','',['class'=>'form-control','placeholder'=>'Technical Drawing'])}}
{{Form::label('french','French')}}
{{Form::text('french-mk','',['class'=>'form-control','placeholder'=>'French'])}}
{{Form::label('luganda','Luganda')}}
{{Form::text('luganda-mk','',['class'=>'form-control','placeholder'=>'Luganda'])}}
{{Form::label('swahili','Swahili')}}
{{Form::text('swahili-mk','',['class'=>'form-control','placeholder'=>'Swahili'])}}
{{Form::label('germany','Germany')}}
{{Form::text('germany-mk','',['class'=>'form-control','placeholder'=>'Germany'])}}


</div>
<div class="form-group">
    {{Form::label('comment','Comment')}}
    {{Form::textarea('comment-mk','',['class'=>'form-control','placeholder'=>'Comment'])}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}    
{!!Form::close()!!}