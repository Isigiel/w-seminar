@extends('base.layout')

@section('head')
<title>Site Concept</title>
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
    <a href="#">Control Panel</a>
</li>
@stop

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Sites you're authoring</h3>
            </div>
            <div class="panel-body">
            @if ($sites)
            @foreach ($sites as $site)
                <div class="row">
                    <div class="col-md-8">
                        <h4>{{$site["title"]}}</h4>
                    </div>
                    <div class="col-md-2">
                        <a href="{{URL::to('site/modify')."/".$site['id']}}" class="btn btn-warning btn-sm">modify site</a>
                    </div>
                </div>
            @endforeach
            @else
            <h4>You don't author any sites yet.</h4>
            @endif
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Mods you're authoring</h3>
            </div>
            <div class="panel-body">
            
                @if ($mods)
                @foreach ($mods as $mod)
                <div class="row">
                    <div class="col-md-6">
                        <h4>{{$mod["name"]}}</h4>
                    </div>
                    <div class="col-md-3">
                        <a href="{{URL::to('mod/modify')."/".$mod['id']}}" class="btn btn-warning btn-sm">modify mod</a>
                    </div>
                    @if (!$mod["site"])
                    <div class="col-md-3">
                        <a href="{{URL::to('site/new')."/".$mod['id']}}" class="btn btn-success btn-sm">create site</a>
                    </div>
                    @endif
                </div>
                @endforeach
                @else
                <h4>You don't author any mods yet.</h4>
                @endif
            </div>
        </div>
    </div>
</div>
@stop