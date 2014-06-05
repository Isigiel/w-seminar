<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1><i class="fa fa-sliders"></i>&nbsp;Character</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form action="{{URL::to("mod/$mod->id")}}" method="POST" role="form">
			{{Form::hidden('_method', 'PUT')}}
			@if($attributes)
				@foreach($character as $key=>$char)
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<p class="pull-right">{{$char[0]}}</p>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<input name="char[]" id="ex{{$key}}" data-slider-id='ex{{$key}}Slider' type="text" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="{{$attributes[$key]}}">
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<p class="pull-left">{{$char[1]}}</p>
					</div>
				</div>
				@endforeach
			@else
				@foreach($character as $key=>$char)
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<p class="pull-right">{{$char[0]}}</p>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<input name="char[]" id="ex{{$key}}" data-slider-id='ex{{$key}}Slider' type="text" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<p class="pull-left">{{$char[1]}}</p>
					</div>
				</div>	
				@endforeach
			@endif
			{{Form::hidden('type', 'character')}}
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>
</div>

<script>
@foreach($character as $key=>$char)
	$('#ex{{$key}}').slider({
		formater: function(value) {
			return value;
		}
	});
@endforeach
</script>