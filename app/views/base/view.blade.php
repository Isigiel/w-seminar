<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Synopsis - {{$current}}</title>
  @yield("head")

  <link href="{{asset("assets/css/uikit.min.css")}}" rel="stylesheet">
  <link href="{{asset("assets/css/uikit.addons.min.css")}}" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="{{asset("assets/css/bootstrap.css")}}" rel="stylesheet">
  <!-- Font-Awesome -->
  <link href="{{asset("assets/css/font-awesome.css")}}" rel="stylesheet">
  @yield("css")
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset("assets/js/bootstrap.js")}}"></script>
  <script src="{{asset("assets/js/uikit.min.js")}}"></script>
  <script src="{{asset("assets/js/markdownarea.min.js")}}"></script>
  @yield("script")
  
  @if(!Sentry::check())
  <script src="{{asset("assets/js/validator.js")}}"></script>
@endif
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
  @include("base.nav")
  @include("base.alerts")
  @yield("body")
</body>
</html>