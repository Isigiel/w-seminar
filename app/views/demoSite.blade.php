@extends('concept.base.layout')

@section('head')
<title>Site Concept</title>
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
<li class="active">
    <a href="{{URL::to('concept/site')}}">Site</a>
</li>
@stop

@section('content')

<div class="row">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
            <div class="row">
            <div class="col-md-10">
                <h2 class="panel-title">Main Site Body</h2>
            </div>
            <div class="col-md-2">
                <a href="{{URL::to('concept/siteedit')}}" type="button" class="btn btn-warning btn-xs pull-right">Edit Site</a>
            </div>
            </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Whoo!</strong>&nbsp;Check out Version 7!
                            <a href="#">here</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4>Mods Name</h4>
                        <p>Candy canes candy canes tart candy canes soufflé halvah lollipop. Croissant oat cake carrot cake brownie. Sugar plum sweet I love pudding lollipop halvah cake pastry. Dessert carrot cake caramels dragée jelly pastry. Gingerbread sweet roll dragée pudding applicake cake carrot cake gingerbread bonbon. Icing liquorice marzipan chocolate jujubes. Tart cotton candy caramels.</p>
                        <p>Cotton candy toffee gummies candy canes. Marzipan bear claw danish chupa chups I love sweet marzipan donut liquorice. Pastry lollipop jelly beans candy canes tootsie roll. Cake gummi bears icing. Sweet powder danish jelly-o bonbon gingerbread soufflé brownie carrot cake. Pastry lemon drops biscuit dragée gummi bears candy canes tart. I love marshmallow wafer tootsie roll I love.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/300x200">
                            <div class="caption">
                                <h3>Cool Screenshot</h3>
                                <p>Cheesecake lemon drops lollipop cookie topping oat cake lollipop croissant chocolate. I love dessert jelly-o. Bonbon I love jelly candy carrot cake I love tiramisu brownie.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/300x200">
                            <div class="caption">
                                <h3>Funny Screenshot</h3>
                                <p>Cheesecake lemon drops lollipop cookie topping oat cake lollipop croissant chocolate. I love dessert jelly-o. Bonbon I love jelly candy carrot cake I love tiramisu brownie.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/300x200">
                            <div class="caption">
                                <h3>Nice Screenshot</h3>
                                <p>Cheesecake lemon drops lollipop cookie topping oat cake lollipop croissant chocolate. I love dessert jelly-o. Bonbon I love jelly candy carrot cake I love tiramisu brownie.</p>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Links and Versions</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        Latest Versions</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="success">
                                    <td>1.6.4.3</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-xs">Download</button>
                                    </td>
                                </tr>
                                <tr class="warning">
                                    <td>1.6.4.4</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-xs">Download</button>
                                    </td>
                                </tr>
                                <tr class="warning">
                                    <td>1.6.4.5</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-xs">Download</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <small class="text-success">Stable Versions</small>
                        <br>
                        <small class="text-warning">Dev Versions</small>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h4>Recommended Links</h4>
                        <ul class="fa-ul">
                            <li>
                                <i class="fa-li fa fa-book"></i>
                                <a href="#">Documentation</a>
                            </li>
                            <li>
                                <i class="fa-li fa fa-comments-o"></i>
                                <a href="{{URL::to('concept/blog')}}">Check out the official Blog</a>
                            </li>
                            <li>
                                <i class="fa-li fa fa-arrow-right"></i>
                                <a href="#">Check out this Random Thing</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop