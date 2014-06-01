<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1><i class="fa fa-sliders"></i>&nbsp;Character</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form action="" method="POST" role="form">
			{{Form::hidden('type', 'character')}}
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<p class="pull-right">Early Game</p>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<p class="pull-left">Late Game</p>
				</div>
			</div>	
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<p class="pull-right">Stone Age</p>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input id="ex2" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<p class="pull-left">Future</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<p class="pull-right">Simple</p>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input id="ex3" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<p class="pull-left">Complex</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<p class="pull-right">Fantasy</p>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input id="ex4" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<p class="pull-left">Reality</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<p class="pull-right">Specialist</p>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input id="ex5" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<p class="pull-left">Allrounder</p>
				</div>
			</div>


			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>
</div>

<script>
	$('#ex1').slider({
		formater: function(value) {
			return 'Current value: ' + value;
		}
	});
	$('#ex2').slider({
		formater: function(value) {
			return 'Current value: ' + value;
		}
	});
	$('#ex3').slider({
		formater: function(value) {
			return 'Current value: ' + value;
		}
	});
	$('#ex4').slider({
		formater: function(value) {
			return 'Current value: ' + value;
		}
	});
	$('#ex5').slider({
		formater: function(value) {
			return 'Current value: ' + value;
		}
	});
</script>