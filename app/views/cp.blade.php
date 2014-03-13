@extends('base.layout') 
@section('head')
<title>Site Concept</title>
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
<?php $user=Sentry::getUser(); ?>
<h1>Hello {{$user["username"]}}</h1>
<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="active">
        <a href="#home" data-toggle="tab">Manage Mods/Sites</a>
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
                        <div class="col-md-6">
                            <h3>Sites you're authoring</h3>
                            <hr>@if ($sites) 
                            @foreach ($sites as $site)
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>{{$site->title}}</h4>
                                </div>
                                <div class="col-md-3 pull-right">
                                    <a href="{{URL::to("site/modify/$site->id")}}" class="btn btn-warning btn-sm">modify site</a>
                                </div>
                            </div>
                            @endforeach 
                            @else
                            <h4>You don't author any sites yet.</h4>
                            @endif
                        </div>

                        <div class="col-md-6">

                            <h3>Mods you're authoring</h3>
                            <hr>@if ($mods) @foreach ($mods as $mod)
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>{{$mod->name}}</h4>
                                </div>
                                <div class="col-md-3 pull-right">
                                    <a href="{{URL::to("mod/modify/$mod->id")}}" class="btn btn-warning btn-sm">modify mod</a>
                                </div>
                                @if (!$mod->site)
                                <div class="col-md-3 pull-right">
                                    <a href="{{URL::to("site/new/$mod->id")}}" class="btn btn-success btn-sm">create site</a>
                                </div>
                                @endif
                            </div>
                            @endforeach 
                            @else
                            <h4>You don't author any mods yet.</h4>
                            @endif
                            <a class="btn btn-success btn-block btn-sm" href="{{URL::to('mod/new')}}">Submid a new mod</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop