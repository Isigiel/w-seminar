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
<li>
    <a href="{{URL::to('concept/site')}}">Site</a>
</li>
<li class="active">
    <a href="{{URL::to('concept/siteedit')}}">Site edit</a>
</li>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Main Site Body edit</h2>
            </div>
            <div class="panel-body">
                <textarea data-uk-markdownarea="{mode:'split'}">##Style your site using markdown! 
For more information check out:
 * [Markdown guide](http://daringfireball.net/projects/markdown/syntax)
 * [Github flavored markdown](https://help.github.com/articles/github-flavored-markdown)</textarea>
                <br>
                <button type="submit" class="btn btn-success btn-lg btn-block">Save Changes</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#info" data-toggle="tab">Mod Info</a>
                    </li>
                    <li>
                        <a href="#versions" data-toggle="tab">Versions</a>
                    </li>
                    <li>
                        <a href="#sidebar" data-toggle="tab">Sidebar</a>
                    </li>
                    <li>
                        <a href="#screenshots" data-toggle="tab">Screenshots</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="info">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <form role="form">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="Modname">Name of the Mod</label>
                                                <input type="text" class="form-control" id="Modname" placeholder="Enter your Mods name">
                                                <p class="help-block">
                                                    <strong>Beware!</strong>&nbsp;Changing your mod's name will be reported to the admins and maybe result in your likes being set to 0!</p>
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
                                            <button type="submit" class="btn btn-success btn-lg btn-block">Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="versions">
                        <br>
                        <p>Currrently listed Versions of your mod</p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Version Number</th>
                                    <th>Link to the modfile</th>
                                    <th>Stability</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="success">
                                    <td>1.6.4.3</td>
                                    <td>http://awesonium.com/megamod/mod-v1.6.4.3.jar</td>
                                    <td>
                                        stable
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-xs">Delete</button>
                                    </td>
                                </tr>
                                <tr class="warning">
                                    <td>1.6.4.4</td>
                                    <td>http://awesonium.com/megamod/mod-v1.6.4.4.jar</td>
                                    <td>
                                        dev
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-xs">Delete</button>
                                    </td>
                                </tr>
                                <tr class="warning">
                                    <td>1.6.4.5</td>
                                    <td>http://awesonium.com/megamod/mod-v1.6.4.5.jar</td>
                                    <td>
                                        dev
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-xs">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <form>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Version-number">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Link to your mod">
                                        </td>
                                        <td>
                                            <select id="Category" class="form-control">
                                                <option>stable</option>
                                                <option>dev</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-success btn-xs">Add Version</button>
                                        </td>
                                    </form>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="sidebar">
                    <form>
                    <div class="row">
                    <div class="col-md-6">
                    <div class="checkbox">
                                <label>
                                    <input type="checkbox">Links my othe mods
                                </label>
                            </div>
                    <p>More to come soon...</p>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Save Changes</button>
                    
                    </div>
                    <div class="tab-pane fade" id="screenshots">
                        <form>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Activate Screenshots?
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="screen1url">Picture URL for Scrrenshot #1</label>
                                        <input type="text" class="form-control" id="screen1url" placeholder="Enter URL">
                                    </div>

                                    <div class="form-group">
                                        <label for="screen1desc">Description for Screenshot #1</label>
                                        <textarea id="screen1desc" placeholder="Please write a short Description about the Screenshot you're adding." class="form-control" rows="3"></textarea>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="screen2url">Picture URL for Scrrenshot #2</label>
                                        <input type="text" class="form-control" id="screen2url" placeholder="Enter URL">
                                    </div>
                                    <div class="form-group">
                                        <label for="screen2desc">Description for Screenshot #2</label>
                                        <textarea id="screen2desc" placeholder="Please write a short Description about the Screenshot you're adding." class="form-control" rows="3"></textarea>
                                    </div>

                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="screen3url">Picture URL for Scrrenshot #3</label>
                                        <input type="text" class="form-control" id="screen3url" placeholder="Enter URL">
                                    </div>

                                    <div class="form-group">
                                        <label for="screen3desc">Description for Screenshot #3</label>
                                        <textarea id="screen3desc" placeholder="Please write a short Description about the Screenshot you're adding." class="form-control" rows="3"></textarea>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                <button type="submit" class="btn btn-success btn-lg btn-block">Save Changes</button>
                                </div>
                            </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop