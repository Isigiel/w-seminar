<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to("home")}}">
                <img style="height: 100%;" class="img-responsive" src="{{asset("assets/img/logo.png")}}">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                @foreach ($sites as $site)
                <li
                @if ($site["title"] == $current)
                class="active"
                @endif>
                <a href="{{URL::to($site["slug"])}}">{{$site["title"]}}</a>
            </li>
            @endforeach
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if(Sentry::check())
            @foreach ($login_sites as $site)
            <li
            @if ($site["title"] == $current)
            class="active"
            @endif>
            <a href="{{URL::to($site["slug"])}}">{{$site["title"]}}</a>
        </li>
        @endforeach
        @else
        <li><a data-toggle="modal" data-target="#loginModal">Login</a></li>
        <li><a data-toggle="modal" data-target="#registerModal">Register</a></li>
        @endif
    </ul>
</div>
</div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="loginModalLabel">Login</h4>
            </div>
            <form class="form-horizontal" role="form" data-toggle="validator" method="post" action="{{URL::to('login')}}">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input required type="email" name="email" class="form-control" id="email" placeholder="Enter your Email-address">
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label  for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input required type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="registerModalLabel">Register</h4>
            </div>
            <form class="form-horizontal" role="form" data-toggle="validator" method="post" action="{{URL::to("register/submit")}}">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="fname" class="col-sm-2 control-label">First name</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" name="fname" id="fname" placeholder="Enter your first name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Last name</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" name="name" id="name" placeholder="Enter your last name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input required data-minlength="5" type="text" name="username" class="form-control" id="Username" placeholder="Enter your username">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input required type="email" name="email" class="form-control" id="email" placeholder="Enter your Email-address">
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label  for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input required data-minlength="5" type="password" class="form-control" name="password" id="pass" placeholder="Enter your password">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="passwordr" class="col-sm-2 control-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input required data-match="#pass" type="password" name="password_confirmation" class="form-control" id="passwordr" placeholder="Please Repeat your Password">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            </form>
        </div>
    </div>
</div>