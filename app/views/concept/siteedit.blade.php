@extends('concept.base.layout')

@section('head')
<title>Site Concept</title>
@stop

@section('nav')
<li>
    <a href="{{URL::to('concept/layout')}}">Home</a>
</li>
<li>
    <a href="{{URL::to('concept/modsub')}}">Mod Submission</a>
</li>
<li>
    <a href="{{URL::to('concept/browse')}}">Browse Mods</a>
</li>
<li>
    <a href="{{URL::to('concept/site')}}">Site</a>
</li>
<li class="active">
    <a href="{{URL::to('concept/siteedit')}}">Site edit</a>
</li>
@stop

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Edit the Site</h2>
            </div>
            <div class="panel-body">
            Test
            <textarea data-uk-markdownarea>...</textarea>
            </div>
        </div>
    </div>
</div>
@stop