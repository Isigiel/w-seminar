@extends("base.view")
@section("css")
<link href="{{asset("assets/css/bootstrap-editable.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/tags.css")}}" rel="stylesheet">
<link rel="stylesheet" href="http://cdn.awesonium.com/codemirror/lib/codemirror.css">
@stop
@section("script")
<script src="{{asset("assets/js/validator.js")}}"></script>
<script src="{{asset("assets/js/bootstrap-editable.min.js")}}"></script>
<script src="{{asset("assets/js/tags.js")}}"></script>
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
						<img src="{{Get::avatar($user["email"])}}" class="img-responsive" alt="Image">
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<h1 align="center">Account</h1>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<h1 class="pull-right">{{$user["username"]}}</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" id="myTab">
			<li><a href="#mods" data-toggle="tab">Mods</a></li>
			<li class="active"><a href="#blog" data-toggle="tab">Status Updates</a></li>
			@if(count($user->entries)!=0)
			<li><a href="#index" data-toggle="tab">Manage Blogentries</a></li>
			@endif
			<li><a href="#settings" data-toggle="tab">Settings</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane fade" id="settings">
				@include("account.settings")
			</div>
			<div class="tab-pane fade in active" id="blog">
				@include("account.blog")
			</div>
			<div class="tab-pane fade" id="mods">
				@include("account.mods")
			</div>
			@if(count($user->entries)!=0)
			<div class="tab-pane fade" id="index">
				@include("account.index")
			</div>
			@endif
		</div>
	</div>
</div>

<script>
    $(document).ready(function(){
        $('#myTab a:first').tab('show')
    });
</script>

@stop
