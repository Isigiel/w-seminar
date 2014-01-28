@extends('concept.base.layout')

@section('head')
<title>Register Concept</title>
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
    <a href="{{URL::to('concept/register')}}">Register</a>
</li>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Register
                </h1>
            </div>
            <div class="panel-body">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" class="form-control" id="Username" placeholder="Enter your username">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter your password">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="passwordr">Repeat Password</label>
                                <input type="password" class="form-control" id="passwordr" placeholder="Please Repeat your Password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your Email-address">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Enter your first name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your last name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
