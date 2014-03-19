@extends('base.layout') 

@section('head')
<title>Modify-Mod</title>
@stop 
@section('nav')
<li>
    <a href="{{URL::to('concept/layout')}}">Home</a>
</li>
<li>
    <a href="{{URL::to('mod/browse')}}">Browse Mods</a>
</li>
<li>
    <a href="{{URL::to('cp')}}">Control Panel</a>
</li>
<li class="active">
    <a>Modify Mod</a>
</li>
@stop 
@section('content')
@if(!$error)
<h1>{{$mod["name"]}}
    <small>by {{$mod["author"]}}</small>
</h1>
@endif
<!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab">
    <li>
        <a href="#home" data-toggle="tab">Home</a>
    </li>
    <li class="active">
        <a href="#site" data-toggle="tab">Edit Site</a>
    </li>
    <li>
        <a href="#versions" data-toggle="tab">Versions</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade" id="home">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="panel-title">Modify your Mod</h3>
                        <hr>
                        @if ($error)
                        @include('mod.formError')
                        @else
                        @include('mod.formModify')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="versions">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="panel-title">Manage Versions</h3>
                        <hr>
                        @include('mod.versions')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade in active" id="site">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="panel-title">Manage your mod's site</h3>
                        <br>
                        @include('mod.site')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
$('#myTab a:first').tab('show')
});
</script>
    

@stop