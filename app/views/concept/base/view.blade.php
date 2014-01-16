<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://bootswatch.com/yeti/bootstrap.min.css">
    <!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">-->
    <!-- Latest Font-Awesome CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    
    <!--Markdown Editor-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/uikit/2.1.0/addons/css/markdownarea.almost-flat.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    @yield('head')
  </head>
  <body style="background-image: url(http://awesonium.com/cdn/pattern/white_carbon.png); background-position: initial initial; background-repeat: initial initial; padding-top: 70px;">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://awesonium.com/cdn/flatstrap/bootstrap.min.js"></script>
    
    <!--Markdown Editor-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/uikit/2.1.0/addons/js/markdownarea.min.js"></script>
    
    @yield('body')
  </body>
</html>