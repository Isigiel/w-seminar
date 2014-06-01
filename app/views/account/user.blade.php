@extends("base.view")
@section("css")
@stop
@section("script")
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
		@if(count($user->mods)!=0)
		<div class="panel panel-default">
			<div class="panel-body">
			<h1>Mods by {{$user->username}}</h1>
			@foreach($user->mods as $mod)
			   <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<h3><a href="{{URL::to("mod/$mod->name . $mod->id")}}">{{$mod->name}}</a></h3>
			    </div>
			@endforeach
			</div>
		</div>
		@endif
		@if(count($user->entries)!=0)
		<div class="panel panel-default">
			<div class="panel-body">
			@foreach($user->entries as $entry)
			   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h1>{{$entry->title}}&nbsp;<small>by&nbsp;{{$user->username}}</h1>
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
@stop
