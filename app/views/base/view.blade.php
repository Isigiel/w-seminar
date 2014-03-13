<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    
    
    <!-- Latest compiled and minified CSS for UIkit Bootstrap and Font-Awesome -->
    <link rel="stylesheet" href="http://cdn.awesonium.com/uikit/css/uikit.min.css">
    <link rel="stylesheet" href="http://bootswatch.com/yeti/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    
    <!-- Codemirror and marked dependencies for the Markdownarea -->
    <link rel="stylesheet" href="http://cdn.awesonium.com/codemirror/lib/codemirror.css">
    <script src="http://cdn.awesonium.com/codemirror/lib/codemirror.js"></script>
    <script src="http://cdn.awesonium.com/codemirror/mode/markdown/markdown.js"></script>
    <script src="http://cdn.awesonium.com/codemirror/addon/mode/overlay.js"></script>
    <script src="http://cdn.awesonium.com/codemirror/mode/xml/xml.js"></script>
    <script src="http://cdn.awesonium.com/codemirror/mode/gfm/gfm.js"></script>
    <script src="http://cdn.awesonium.com/marked/marked.js"></script>
    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
    <!-- UIkit JS -->
    <script src="http://cdn.awesonium.com/uikit/js/uikit.min.js"></script>
    
    <!-- Markdown Area JavaScript and CSS -->
    <script src="http://cdn.awesonium.com/uikit/addons/markdownarea/markdownarea.min.js"></script>
    <link rel="stylesheet" href="http://cdn.awesonium.com/uikit/addons/markdownarea/markdownarea.almost-flat.min.css">
    <!-- Filepicker JS and CSS -->
    <script src="http://cdn.awesonium.com/uikit/addons/form-file/form-file.min.js"></script>
    <link rel="stylesheet" href="http://cdn.awesonium.com/uikit/addons/form-file/form-file.min.css">
    <!-- Notify JS and CSS -->
    <script src="http://cdn.awesonium.com/uikit/addons/notify/notify.min.js"></script>
    <link rel="stylesheet" href="http://cdn.awesonium.com/uikit/addons/notify/notify.min.css">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    @yield('head')
  </head>
  <body style="background-image: url(http://cdn.awesonium.com/pattern/white_carbon.png); background-position: initial initial; background-repeat: initial initial; padding-top: 70px;">
    
    
    @yield('body')
  </body>
</html>