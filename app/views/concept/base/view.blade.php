<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/uikit/2.1.0/css/uikit.min.css">
    <link rel="stylesheet" href="http://bootswatch.com/yeti/bootstrap.min.css">
    <!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">-->
    <!-- Latest Font-Awesome CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    
    <!-- Codemirror and marked dependencies -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" href="http://new.awesonium.com/codemirror-3.21/lib/codemirror.css">
    <script src="http://new.awesonium.com/codemirror-3.21/lib/codemirror.js"></script>
    <script src="http://new.awesonium.com/codemirror-3.21/mode/markdown/markdown.js"></script>
    <script src="http://new.awesonium.com/codemirror-3.21/addon/mode/overlay.js"></script>
    <script src="http://new.awesonium.com/codemirror-3.21/mode/xml/xml.js"></script>
    <script src="http://new.awesonium.com/codemirror-3.21/mode/gfm/gfm.js"></script>
    <script src="http://new.awesonium.com/marked/marked.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/uikit/2.1.0/js/uikit.min.js"></script>
    
    <!-- Markdown Area JavaScript and CSS -->
    <script src="http://new.awesonium.com/uikit-2.1.0/addons/js/markdownarea.js"></script>
    <link rel="stylesheet" href="http://new.awesonium.com/uikit-2.1.0/addons/css/markdownarea.css">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://awesonium.com/cdn/flatstrap/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    @yield('head')
  </head>
  <body style="background-image: url(http://awesonium.com/cdn/pattern/white_carbon.png); background-position: initial initial; background-repeat: initial initial; padding-top: 70px;">
    
    
    @yield('body')
  </body>
</html>