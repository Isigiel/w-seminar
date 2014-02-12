@extends('concept.base.layout')

@section('head')
<title>Mod Submission Concept</title>
@stop

@section('nav')
<li>
    <a href="{{URL::to('concept/layout')}}">Home</a>
</li>
<li class="active">
    <a href="{{URL::to('concept/modsub')}}">Mod Submission</a>
</li>
<li>
    <a href="{{URL::to('concept/browse')}}">Browse Mods</a>
</li>
<li>
    <a href="{{URL::to('concept/site')}}">Site</a>
</li>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Submit your Mod</h3>
            </div>
            <div class="panel-body">
                <form role="form">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="Modname">Name of the Mod</label>
                                <input type="text" class="form-control" id="Modname" placeholder="Enter your Mods name">
                            </div>
                        </div>
                        <div class="col-md-7">

                            <div class="form-group">
                                <label for="Author">Name of the Author(s)</label>
                                <input type="text" class="form-control" id="Author" placeholder="Enter the Author(s)">
                                <p class="help-block">Divide multiple Authors by comma.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Description">Mod Description</label>
                                <textarea id="Description" placeholder="Please write a short Description about the Mod you're submitting." class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Category">Category</label>
                                <select id="Category" class="form-control">
                                    <option>Administration</option>
                                    <option>Magic</option>
                                    <option>Technic</option>
                                    <option>Automation</option>
                                    <option>None</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="Tags">Tags</label>
                                <input type="text" class="form-control" id="Tags" placeholder="Enter the Tags that match your mod">
                                <p class="help-block">Tags are divided by comma.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Submit your Mod</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop