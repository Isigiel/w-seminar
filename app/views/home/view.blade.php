@extends("base.view")
@section("body")

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<div class="row">
					<div class="col-md-12">
						<h1 align="center">Hello there!</h1>
					</div>
					<div class="col-md-6">
						<p>Welcome to
							<span class="text-primary">Synopsis</span>, where we try to give you the best
							<span class="text-primary">modded Minecraft</span>&nbsp;experience that has ever been.
							<a href="" data-toggle="modal" data-target="#registerModal">Join now</a>&nbsp;and get started!
						</p>
					</div>
					<div class="col-md-6">
						<p>Synopsis has two sides, one side which delivers best content to the
							<span class="text-primary">players</span>&nbsp;and on the other side, we want to provide a social distrtibution platform to the
							<span class="text-primary">modders</span>.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-sun-o"></i>&nbsp;&nbsp;Newest Mods</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                        @foreach($mods as $mod)
                        <a href="{{URL::to("mod/$mod->name.$mod->id")}}">
                            <div class="col-md-3">
                                <img class="center-block img-responsive"  src="@if(@GetImageSize($mod->splash)) {{$mod->splash}} @else {{asset("assets/img/splash.png")}} @endif">
                                <h3>{{$mod->name}}</h3>
                            </div>
                        </a>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-bar-chart-o"></i>&nbsp;&nbsp;Trending mods</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                        @foreach($mods->sortByDesc('downloads') as $mod)
                        <a href="{{URL::to("mod/$mod->name.$mod->id")}}">
                            <div class="col-md-3">
                                <img class="center-block img-responsive"  src="@if(@GetImageSize($mod->splash)) {{$mod->splash}} @else {{asset("assets/img/splash.png")}} @endif">
                                <h3>{{$mod->name}}</h3>
                            </div>
                        </a>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
	</div>
</div>

@stop