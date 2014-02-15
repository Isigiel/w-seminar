@extends('concept.base.layout')

@section('head')
<title>{{$mod["name"]}}</title>
@stop

@section('nav')
<li>
    <a href="{{URL::to('concept/layout')}}">Home</a>
</li>
<li>
    <a href="{{URL::to('mod/new')}}">Mod Submission</a>
</li>
<li>
    <a href="{{URL::to('mod/browse')}}">Browse Mods</a>
</li>
<li class="active">
    <a href="#">{{$mod["name"]}}</a>
</li>
@stop

@section('content')

<h1>{{$mod["name"]}}<small> by {{$mod["author"]}}</small></h1>
<div class="panel panel-warning">
    <div class="panel-heading">
        <h2 class="panel-title">No Site Available</h2>
    </div>
    <div class="panel-body">
    <p class="lead">The author hasn't created a site for you to look at yet. We'll meassage him, check back soon!</p>
    <p class="lead">But we can at least give you the desription of the requested mod</p>
    <hr>
    <p>{{$mod["description"]}}</p>
    </div>
    </div>

@stop