@extends("base.view")
@section("css")
<link href="{{asset("assets/css/bootstrap-editable.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/tags.css")}}" rel="stylesheet">
<link rel="stylesheet" href="http://cdn.awesonium.com/codemirror/lib/codemirror.css">
<link href="{{asset("assets/css/bootstrap-slider.css")}}" rel="stylesheet">

@stop
@section("script")
<script src="{{asset("assets/js/validator.js")}}"></script>
<script src="{{asset("assets/js/bootstrap-editable.min.js")}}"></script>
<script src="{{asset("assets/js/tags.js")}}"></script>
<script src="{{asset("assets/js/bootstrap-slider.js")}}"></script>
<!-- Codemirror and marked dependencies for the Markdownarea -->
<script src="http://cdn.awesonium.com/codemirror/lib/codemirror.js"></script>
<script src="http://cdn.awesonium.com/codemirror/mode/markdown/markdown.js"></script>
<script src="http://cdn.awesonium.com/codemirror/addon/mode/overlay.js"></script>
<script src="http://cdn.awesonium.com/codemirror/mode/xml/xml.js"></script>
<script src="http://cdn.awesonium.com/codemirror/mode/gfm/gfm.js"></script>
<script src="http://cdn.awesonium.com/marked/marked.js"></script>
@stop
@section("body")
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<img style="max-height:80px; max-width:80px;" src="@if(@GetImageSize($mod->icon)) {{$mod->icon}} @else {{asset("assets/img/mod.png")}} @endif">
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<h1 align="center">{{$mod->name}}</h1>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<h1 class="pull-right"><small>by&nbsp;{{$user->username}}</small></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#settings" data-toggle="tab">General Settings</a></li>
			<li><a href="#versions" data-toggle="tab">Version-Management</a></li>
			<li><a href="#addition" data-toggle="tab">Additional Data</a></li>
			<li><a href="#character" data-toggle="tab">Mod-Character</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane fade in active" id="settings">
				@include("mod.edit.settings")
			</div>
			<div class="tab-pane fade" id="addition">
				@include("mod.edit.addition")
			</div>
			<div class="tab-pane fade" id="versions">
				@include("mod.edit.versions")
			</div>
			<div class="tab-pane fade" id="character">
				@include("mod.edit.character")
			</div>
		</div>
	</div>
</div>
@stop