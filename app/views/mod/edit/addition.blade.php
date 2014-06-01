<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1>Images</h1>
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
		<hr>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1>Links</h1>
		<form data-toggle="validator" action="{{URL::to("mod/$mod->id")}}" method="POST" role="form">
			{{Form::hidden('_method', 'PUT')}}
			{{Form::hidden('type', 'links')}}
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="repo"><i class="fa fa-git"></i>&nbsp;Source Code</label>
						<input value="{{$mod->repo}}" type="text" class="form-control" id="repo" name="repo" placeholder="Enter your Repo-URL" >
						<span class="help-block">If your mod is Opensource, link your Repo here</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="tracker"><i class="fa fa-cogs"></i>&nbsp;Issue Tracker</label>
						<input value="{{$mod->tracker}}" type="text" class="form-control" id="tracker" name="tracker" placeholder="Enter the URL of your Issue Tracker" >
						<span class="help-block">If you have an Issue-Tracker, you may enter an URL here</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="forum"><i class="fa fa-comments-o"></i>&nbsp;Forum</label>
						<input value="{{$mod->forum}}" type="text" class="form-control" id="forum" name="forum" placeholder="Enter your Forum-URL" >
						<span class="help-block">If you have a Forum to discuss your mod, you may enter an URL above</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="repo"><i class="fa fa-laptop"></i>&nbsp;Wiki/Documentation</label>
						<input value="{{$mod->wiki}}" type="text" class="form-control" id="wiki" name="wiki" placeholder="Enter your Wiki-URL" >
						<span class="help-block">If there is a wiki for your mod, enter an URL above</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="threat"><i class="fa fa-cubes"></i>&nbsp;MCF/MinaPlanet thread</label>
						<input value="{{$mod->threat}}" type="text" class="form-control" id="threat" name="threat" placeholder="Enter your Thread-URL" >
						<span class="help-block">If there is a Thread on the MCF or on MinePlanet about your mod ...</span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="ci"><i class="fa fa-database"></i>&nbsp;CI</label>
						<input value="{{$mod->ci}}" type="text" class="form-control" id="ci" name="ci" placeholder="Enter your CI-URL" >
						<span class="help-block">Got Jenkins/Bamboo? This is THE place for it!</span>
					</div>
				</div>
				
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>