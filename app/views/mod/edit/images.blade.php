<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form data-toggle="validator" action="{{URL::to("mod/$mod->id")}}" method="POST" role="form">
		{{Form::hidden('_method', 'PUT')}}
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="icon">Icon</label>
						<input value="{{$mod->icon}}" type="text" class="form-control" id="icon" name="icon" placeholder="Enter an Image-URL of your Icon" >
						<span class="help-block">We suggest the use of an square Image, which is at least 80x80px</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="splash">Splash-Image</label>
						<input value="{{$mod->splash}}" type="text" class="form-control" id="splash" name="splash" placeholder="Enter an Image-URL to your Mods splash-image" >
						<span class="help-block">This will be the first preview Images Users will see, consider it a bigger logo, we suggest to use a 400x300px picture</span>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="form-group">
						<label for="head">Head-Image</label>
						<input value="{{$mod->head}}" type="text" class="form-control" id="head" name="head" placeholder="Enter an Image-URL to your mods Site Header Image" >
						<span class="help-block">Set your mods Site-header here, we suggest 1110x200px. But we will generate a standart header for you if this field is empty.</span>
					</div>
				</div>
				{{Form::hidden('type', 'images')}}
			</div>

			<button type="submit" class="btn btn-default">Submit</button>

		</form>
	</div>
</div>