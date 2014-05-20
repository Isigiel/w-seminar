@extends("base.view")
@section("css")
<link href="{{asset("assets/css/bootstrap-editable.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/tags.css")}}" rel="stylesheet">
@stop
@section("script")
<script src="{{asset("assets/js/validator.js")}}"></script>
<script src="{{asset("assets/js/bootstrap-editable.min.js")}}"></script>
<script src="{{asset("assets/js/tags.js")}}"></script>
@stop

@section("body")
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<img style="max-height:80px; max-width:80px;" src="@if(file_exists($mod->icon)) $mod->icon @else {{asset("assets/img/mod.png")}} @endif">
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
			<li><a href="#images" data-toggle="tab">Images</a></li>
			<li><a href="#site" data-toggle="tab">Site</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane fade" id="settings">
			@include("mod.edit.settings")
			</div>
			<div class="tab-pane fade in active" id="mods">
			@include("mod.edit.image")
			</div>
			<div class="tab-pane fade in active" id="mods">
			@include("mod.edit.site")
			</div>
		</div>
	</div>
</div>
@stop