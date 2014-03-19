@extends('base.layout') 
@section('head')
<title>Control Panel</title>
@stop 
@section('nav')
<li>
    <a href="{{URL::to('concept/layout')}}">Home</a>
</li>
<li>
    <a href="{{URL::to('mod/browse')}}">Browse Mods</a>
</li>
<li class="active">
    <a>Control Panel</a>
</li>
@stop 
@section('content')
<h1>Hello {{$user["username"]}}</h1>
<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="active">
        <a href="#home" data-toggle="tab">Manage Mods</a>
    </li>
    <li>
        <a href="#profile" data-toggle="tab">Profile</a>
    </li>
    <li>
        <a href="#messages" data-toggle="tab">Messages</a>
    </li>
    <li>
        <a href="#settings" data-toggle="tab">Settings</a>
    </li>
</ul>


<div class="tab-content">
    <div class="tab-pane fade in active" id="home">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('cp.modlist')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop