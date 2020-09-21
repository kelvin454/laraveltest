<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pings School') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'PingsSchool') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{route('layouts.app')}}"></a>Home</li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    
    
      

    <!-- Scripts -->
   
<h1>
   Form One Class
</h1>
@if(count($f1)>0)
<div class="panel panel-primary">
    <div class="panel-heading"><h1>Form one Marks<h1></div>
    <table class="table">
<th>Student name</th>
<th>English</th>
<th>History</th>
<th>Mathematics</th>
<th>Geography</th>
<th>Agriculture</th>
<th>Physics</th>
<th>Chemisrty</th>
<th>Biology</th>
<th>Computer-studies</th>
<th>Germany</th>
<th>Swahili</th>
<th>Luganda</th>
<th>French</th>
<th>Enterpreneurship</th>
<th>CRE</th>
<th>Technical Drawing</th>
<th>Commerce</th>
<th>Accounts</th>



@foreach($f1 as $f1)
<tr>
    <td>{{$f1->student_name}}</td><td>{{$f1->english}}</td><td>{{$f1->history}}</td><td>{{$f1->math}}</td><td>{{$f1->geography}}</td><td>{{$f1->agriculture}}</td><td>{{$f1->physics}}</td><td>{{$f1->chemstry}}</td><td>{{$f1->biology}}</td><td></td><td>{{$f1->germany}}</td><td>{{$f1->swahili}}</td><td>{{$f1->luganda}}</td><td>{{$f1->french}}</td><td>{{$f1->ent}}</td><td>{{$f1->cre}}</td><td>{{$f1->td}}</td><td>{{$f1->commerce}}</td><td>{{$f1->accounts}}</td>
</tr>



@endforeach
</table>
</div>
@else
<p>no data</p>
@endif
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
