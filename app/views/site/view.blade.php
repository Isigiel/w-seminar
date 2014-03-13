@extends('base.layout')

@section('head')
<title>{{$mod["name"]}}</title>
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
    <a href="#">{{$mod["name"]}}</a>
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