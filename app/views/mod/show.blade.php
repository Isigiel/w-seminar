@extends("base.view")
@section("css")
<link rel="stylesheet" href="http://cdn.awesonium.com/codemirror/lib/codemirror.css">
@stop
@section("script")
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
			<div class="panel-heading" style="padding:0px;">
				@if(@GetImageSize($mod->head))   
				<img class="center-block img-responsive"  src="{{$mod->head}}">
				@else

				<div class="hidden-xs" style='background-image:url("{{asset("assets/img/head.png")}}"); height:auto; width:100%; padding-top:40px; padding-bottom:50px;'>
					<h1 style="font-size: 70px;" align="center"><strong>{{$mod->name}}</strong></h1>
				</div>
				<img class="center-block img-responsive visible-xs"  src="{{asset("assets/img/head.png")}}">
				<h3 style="margin:10px;" class="panel-title visible-xs">{{$mod->name}}</h3>
				@endif

			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>{{$mod->name}}&nbsp;<small>by&nbsp;@foreach($mod->authors as $author){{$author["username"]}}@endforeach</small></h1>
						<hr>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="site-render">
                		</div>
					</div>

				</div>
			</div>
		</div>
		@if(count($mod->versions)!=0)
		<div class="panel panel-default">
			<div class="panel-body">
			   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Version</th>
									<th>MC-Version</th>
									<th>Stability</th>
									<th>Downloads</th>
									<th>Download</th>
								</tr>
							</thead>
							<tbody>
								@foreach($mod->versions as $version)
								<tr>
									<td>{{$version["version"]}}</td>
									<td>{{$version["mc_version"]}}</td>
									<td>{{Get::stability($mod["stability"])}}</td>
									<td>{{$version["downloads"]}}</td>
									<td><a href="{{URL::to("version/$version[id]")}}">{{URL::to("version/$version[id]")}}</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
			</div>
		</div>
		@endif
		@if(count($mod->authors[0]->entries)!=0)
		<div class="panel panel-default">
			<div class="panel-body">
			@foreach($mod->authors[0]->entries as $entry)
			   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<a href><h1>{{$entry->title}}&nbsp;<small>by&nbsp;{{$mod->authors[0]->username}}</h1></a>
					<hr>
					<p class="blog-render{{$entry->id}}"></p>
					<br><br>
			    </div>
			    <script>
                    $(document).ready(function(){
                        var value = {{json_encode($entry->content)}};
                        $( "p.blog-render{{$entry->id}}" )
                            .html(marked(value))
                        });
                </script>
			@endforeach
			</div>
		</div>
		@endif
	</div>
</div>

<script>
    $(document).ready(function(){
        var value = {{json_encode($mod->description)}};
        $( "div.site-render" )
            .html(marked(value))
    });
</script>

@stop