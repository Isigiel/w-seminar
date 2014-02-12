@extends('concept.base.layout')

@section('head')
<title>Mod Browser Concept</title>
@stop

@section('nav')
<li>
    <a href="{{URL::to('concept/layout')}}">Home</a>
</li>
<li>
    <a href="{{URL::to('concept/modsub')}}">Mod Submission</a>
</li>
<li class="active">
    <a href="{{URL::to('concept/browse')}}">Browse Mods</a>
</li>
<li>
    <a href="{{URL::to('concept/site')}}">Site</a>
</li>
@stop

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Navigation Sidebar</h3>
            </div>
            <div class="panel-body">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button">Go!</button>
                    </span>
                </div>
                <!-- /input-group -->
                <hr>
                <h4>Sort by</h4>
                Most Likes
                <br>Most Followers
                <br>Most recent
                <br>Most Downloaded
                <br>Category
                <br>Newest
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Mod Browser</h3>

            </div>
            <div class="panel-body">
                <ul class="media-list">
                    <li class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/100x100">
                        </a>
                        <div class="media-body">
                            <a href="{{URL::to('concept/site')}}"><h4 class="media-heading">Random Mod</h4></a>
                            <p>Some Descriptional stuff maybe a little bit more then this, I hope the useres won't be as lazy as I am :)</p>
                            <small class="pull-right">King Lemming</small>
                        </div>
                    </li>
                    <li class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/100x100">
                        </a>
                        <div class="media-body">
                        <div class="pull-right">
                        
                        <span class="label label-primary">&nbsp;<i class="fa fa-tags"></i>&nbsp;</span>
                        <span class="label label-success">&nbsp;<i class="fa fa-unlock"></i>&nbsp;</span>
                        <span class="label label-danger">&nbsp;<i class="fa fa-flask"></i>&nbsp;</span>
                        
                        </div>
                            <h4 class="media-heading">Random Mod #2</h4>
                            Some Descriptional stuff maybe a little bit more then this, I hope the useres won't be as lazy as I am :)
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@stop