@extends('base.layout')

@section('head')
<title>Mod Browser</title>
@stop

@section('nav')
<li>
    <a href="{{URL::to('concept/layout')}}">Home</a>
</li>
<li class="active">
    <a href="{{URL::to('mod/browse')}}">Browse Mods</a>
</li>
@stop

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="input-group">
                    <input id="typeahead" type="text" placeholder="Search" class="form-control">
                </div>
                <!-- /input-group -->
                <hr>
                <h4>Sort by</h4>
                <a href="{{URL::to("mod/browse/followers")}}"> Most Followers </a>
                <br><a href="{{URL::to("mod/browse/updated_at")}}">Last updated </a>
                <br><a href="{{URL::to("mod/browse/downloads")}}">Most Downloaded </a>
                <br>Category <small>Coming soon</small>
                <br><a href="{{URL::to("mod/browse/created_at")}}">Newest </a>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Mod Browser</h3>

            </div>
            <div class="panel-body">
                <ul class="media-list">
                @foreach ($mods as $mod)
                    <li class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/100x100">
                        </a>
                        <div class="media-body">
                            <a href="{{URL::to("mod/view")."/".$mod["id"]}}"><h4 class="media-heading">{{$mod["name"]}}</h4></a>
                            <p>{{$mod["description"]}}</p>
                            <small class="pull-right">{{$mod['author']}}</small>
                        </div>
                    </li>
                @endforeach
                    <li class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/100x100">
                        </a>
                        <div class="media-body">
                        <div class="pull-right">
                        
                        <span class="label label-primary">&nbsp;<i class="fa fa-tags"></i>&nbsp;</span>
                        <span class="label label-success">&nbsp;<i class="fa fa-unlock"></i>&nbsp;</span>
                        <span class="label label-danger">&nbsp;<i class="fa fa-flask"></i>&nbsp;</span>
                        
                        </div>
                            <h4 class="media-heading">Random Mod #2</h4>
                            Some Descriptional stuff maybe a little bit more then this, I hope the useres won't be as lazy as I am :)
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script src="http://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.min.js"></script>

<script>

var mods = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  limit: 10,
  prefetch: {
    // url points to a json file that contains an array of country names, see
    // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
    url: '{{URL::to("search/fetch/mods.json")}}',
    // the json file contains an array of strings, but the Bloodhound
    // suggestion engine expects JavaScript objects so this converts all of
    // those strings
    filter: function(list) {
      return $.map(list, function(mod) { return { name: mod }; });
    }
  }
});
 
// kicks off the loading/processing of `local` and `prefetch`
mods.initialize();
 
// passing in `null` for the `options` arguments will result in the default
// options being used
$('#typeahead').typeahead( null
, {
  name: 'mods',
  displayKey: 'name',
  
  templates: {
    suggestion: _.template([
      '<li class="list-group-item"><%=name%></li>'
    ].join('')),
    header: _.template([
      '<ul class="list-group">'
    ].join('')),
    footer: _.template([
      '</ul>'
    ].join(''))
  },
  // `ttAdapter` wraps the suggestion engine in an adapter that
  // is compatible with the typeahead jQuery plugin
  source: mods.ttAdapter()
});
</script>
@stop