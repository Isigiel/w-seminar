@extends("base.view")
@section("body")

<div class="container">
	<div class="row">
		<div class="col-md-12">
            @if(!Sentry::check())
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
@else

@if(Sentry::getUser()["started"] == 1)
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-child"></i>&nbsp;&nbsp;First steps as a mod-author <a href="{{URL::to("account/start")}}" class="close" aria-hidden="true">&times;</a></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge">&nbsp;1&nbsp;</span>
                        <h4 class="list-group-item-heading">Visit your <a href="{{URL::to("account")}}">account</a>-page</h4>
                        <p class="list-group-item-text">
                            <ul>
                                <li>Update your Minecraft and Twitter names</li>
                                <li>Add your mod</li>
                                <li>Add a status-update (users will see them on your mods site)</li>
                            </ul>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <span class="badge">&nbsp;2&nbsp;</span>
                        <h4 class="list-group-item-heading">Give your mod some love</h4>
                        <p class="list-group-item-text">
                            <ul>
                                <li>Update the Description using <a href="http://daringfireball.net/projects/markdown/">markdown</a></li>
                                <li>Make your mod unique by changing Icon, Splash- and Header-Image</li>
                                <li>Finally, add some versions to your mod, so users can use it <em><strong style="padding-left: 10px;">IMPORTANT!</strong></em></li>
                            </ul>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <span class="badge">&nbsp;3&nbsp;</span>
                        <h4 class="list-group-item-heading">Share the love</h4>
                        <p class="list-group-item-text">
                            <ul>
                                <li>Tweet with <i>#synopsis</i></li>
                                <li>Follow and support <a href="http://www.patreon.com/isigiel">Isigiel</a> on Patreon</li>
                            </ul>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @else
    <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-life-ring"></i>&nbsp;&nbsp;Overview</h3>
        </div>
        <div class="panel-body">
            <div class="row">
            @foreach($user->mods as $mod)
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <h3><a href="{{URL::to("mod/$mod->name.$mod->id/edit")}}">{{$mod->name}}</a></h3>
            </div>
            @endforeach
        </div>
        </div>
        </div>
    @endif

    @endif
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="fa fa-sun-o"></i>&nbsp;&nbsp;Newest Mods</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    @foreach($new_mods as $mod)
                    <a href="{{URL::to("mod/$mod->name.$mod->id")}}">
                        <div class="col-md-6">
                            <img class="center-block img-responsive"  src="@if(@GetImageSize($mod->splash)) {{$mod->splash}} @else {{asset("assets/img/splash.png")}} @endif">
                            <h3 align="center">{{$mod->name}}</h3>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-bar-chart-o"></i>&nbsp;&nbsp;Trending mods</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($high_mods as $mod)
                        <a href="{{URL::to("mod/$mod->name.$mod->id")}}">
                            <div class="col-md-6">
                                <img class="center-block img-responsive"  src="@if(@GetImageSize($mod->splash)) {{$mod->splash}} @else {{asset("assets/img/splash.png")}} @endif">
                                <h3 align="center">{{$mod->name}}</h3>
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