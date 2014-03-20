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
<div class="row">
    <div class="col-md-8">
        <h1>{{$mod["name"]}}<small> by {{$mod["author"]}}</small></h1>
    </div>
    <div class="col-md-4">
    <h1>
        @if (!$follows)
            <a class="btn btn-success btn-sm pull-right" href="{{URL::to("mod/follow/$mod[id]")}}"><i class="fa fa-thumbs-up"></i>&nbsp;Follow</a>
        @elseif($follows==="nl")
            
        @else
            <a class="btn btn-warning btn-sm pull-right" href="{{URL::to("mod/unfollow/$mod[id]")}}"><i class="fa fa-thumbs-down"></i>&nbsp;Unfollow</a>
        @endif
        <button class="btn-sm pull-right btn btn-success">{{$mod["followers"]}}&nbsp;<i class="fa fa-thumbs-up"></i></button>
    </h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            
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