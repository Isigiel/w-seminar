@extends('concept.base.layout')

@section('head')
<title>Blog Concept</title>
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
    <a href="{{URL::to('concept/blog')}}">Blog</a>
</li>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Forestry
                    <small>Blog</small>
                    </h3>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <span class="panel-title">New stable Version v8 dropped!
                                </span>
                            </div>
                            <div class="panel-body">
                                <p>We got some neat new stuff for you!</p>
                                Changelog:
                                <ul>
                                    <li>Fixed Bugs</li>
                                    <li>Made new Bugs</li>
                                    <li>Also loads of new features</li>
                                </ul>
                                <span class="label label-default pull-right">28.01.2014</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h1 class="panel-title">SirSengir seems to become a Bee!
                                </h1>
                            </div>
                            <div class="panel-body">
                                <p>Attention!</p>
                                He has:
                                <ul>
                                    <li>Stripes</li>
                                    <li>A sting</li>
                                </ul>
                                <span class="label label-default pull-right">20.01.2014</span>
                            </div>
                        </div>

                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h1 class="panel-title">New Version v5 dropped!
                                </h1>
                            </div>
                            <div class="panel-body">
                                <p>We got some neat new stuff for you!</p>
                                Changelog:
                                <ul>
                                    <li>Fixed Bugs</li>
                                    <li>Made new Bugs</li>
                                </ul>
                                <span class="label label-default pull-right">11.01.2014</span>
                            </div>
                        </div>

                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h1 class="panel-title">New dev-version d8
                                </h1>
                            </div>
                            <div class="panel-body">
                                <p>Unstable but also great!</p>
                                Changelog:
                                <ul>
                                    <li>New Features</li>
                                    <li>Fixed Bugs</li>
                                    <li>Made new Bugs</li>
                                </ul>
                                <span class="label label-default pull-right">08.01.2014</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop