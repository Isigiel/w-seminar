@extends('concept.base.view')

@section('head')
    @section('head')
    <title>Base Layout Concept</title>
    @show
@stop

@section('body')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::to('concept/layout')}}">Synopsis
                        <span class="label label-danger">Conceptual Design Prewiev</span>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        @section('nav')
                        <li class="active">
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
                        @show
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                            <a data-toggle="dropdown" href="#">Login&nbsp;</a>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                            <br>
                            <br>
                            <form role="form">
                                <div class="row">
                                <div class="col-md-11">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter email">
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-11">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-11">
                                    <button type="submit" class="btn btn-block btn-sm btn-success">Login</button>
                                    <br>
                                </div>
                                </div>
                            </form>
                            </div>
                            <div class="col-md-1"></div>
                            </div>
                            </div>
                    </li>
                    </ul>
                </div>
            </nav>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Warning!</strong>&nbsp;All sites for design testing purposes only! No functionality just now!!
            </div>

        </div>
    </div>
    
    @yield('content')
    
</div>
@stop

