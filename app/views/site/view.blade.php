@extends('base.layout')

@section('head')
<title>{{$mod["name"]}}</title>
@stop

@section('nav')
<li>
    <a href="{{URL::to('concept/layout')}}">Home</a>
</li>
<li>
    <a href="{{URL::to('mod/browse')}}">Browse Mods</a>
</li>
<li class="active">
    <a>{{$mod["name"]}}</a>
</li>
@stop

@section('content')

<h1>{{$mod["name"]}}<small> by {{$mod["author"]}}</small></h1>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">{{$site["title"]}}</h2>
            </div>
            <div class="panel-body">
                <div class="site-render">
                </div>
            </div>
        </div>
        @if($versions)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Modversions</h2>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
    <thead>
        <tr>
            <th>Version</th>
            <th>Minecraft-Version</th>
            <th>Stability</th>
            <th>Downloads</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($versions as $version)
        <tr class="{{Get::sclass($version["stability"])}}">
            <td>{{$version["version"]}}</td>
            <td>{{$version["mc_version"]}}</td>
            <td>{{Get::stability($version["stability"])}}</td>
            <td>{{$version["downloads"]}}</td>
            <td>
                <a class="btn btn-success btn-xs" href="{{$version["link"]}}">Download</a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
            </div>
        </div>
        @endif
    </div>
</div>

<script>
    $(document).ready(function(){
        var value = {{json_encode($site['content'])}};
        $( "div.site-render" )
            .html(marked(value))
    });
</script>


@stop