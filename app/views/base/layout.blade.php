@extends('base.view')

@section('head')
    @section('head')
    <title>Base Layout Concept</title>
    @show
@stop

@section('body')

<div class="container" >
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
                        <span class="label label-danger">Alpha Prewiev</span>
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
                            <a href="{{URL::to('mod/browse')}}">Browse Mods</a>
                        </li>
                        @show
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    
                    @if(Sentry::check())
                    <?php
                        $user = Sentry::getUser();
                    ?>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="#">{{$user["username"]}}&nbsp;</a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li>
                                <a href="{{URL::to('logout')}}">Logout</a>
                            </li>
                            <li>
                                <a href="{{URL::to('cp')}}">Overwiev</a>
                            </li>
                        </ul>
                    </li>
                    
                    @else
                        
                    <li class="dropdown">
                            <a data-toggle="dropdown" href="#">Login&nbsp;</a>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                            <br>
                            <br>
                            <form role="form" method="post" action="{{URL::to('login')}}" >
                                <div class="row">
                                <div class="col-md-11">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-11">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-11">
                                    <button type="submit" class="btn btn-block btn-sm btn-success">Login</button>
                                    <br>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-11">
                                    <a href="{{URL::to('register')}}" type="submit" class="btn btn-block btn-sm btn-primary">Register</a>
                                    <br>
                                </div>
                                </div>
                            </form>
                            </div>
                            <div class="col-md-1"></div>
                            </div>
                            </div>
                    </li>
                    @endif
                    <li>t</li>
                    <li>t</li>
                    </ul>
                </div>
            </nav>
            <div class="row">
            <div class="col-md-12">
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Warning!</strong>&nbsp;Website is in early alpha, expect bugs everywhere :-O
            </div>
            </div>
            {{Alert::render()}}
            </div>

        </div>
    </div>
    
    @yield('content')
    
</div>
@stop

