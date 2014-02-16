@extends('base.layout')

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
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Create a Site representing your mod!</h2>
            </div>
            <div class="panel-body">
            <form method="post" action="{{URL::to('site/modify')."/".$site['id']}}">
            <input type="text" name="title" class="form-control" value="{{$site["title"]}}" placeholder="Enter your Sites title">
            <br>
                <textarea name="content" data-uk-markdownarea="{mode:'split'}">{{$site["content"]}}</textarea>
                <br>
                <button type="submit" class="btn btn-success btn-lg btn-block">Save Changes</button>
            </div>
        </div>
    </div>
</div>

@stop