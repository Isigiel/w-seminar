<div class="row">
	@if($mods)
		@foreach($mods as $mod)
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1><img style="max-height:48px; max-width:48px;" src="@if(@GetImageSize($mod->icon)) {{$mod->icon}} @else {{asset("assets/img/mod.png")}} @endif"><a href="{{URL::to("mod/$mod->name.$mod->id/edit")}}">{{$mod->name}}</a></h1>
		</div>
		@endforeach
	@endif
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1><a href data-toggle="modal" data-target="#newModModal">Add</a>&nbsp;Some mods to see them here!</h1>
	</div>
</div>

<!-- New Mod-Modal -->
<div class="modal fade" id="newModModal" tabindex="-1" role="dialog" aria-labelledby="newModModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:55%;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="newModModalLabel">Add a new mod</h4>
			</div>
			<form data-toggle="validator" action="{{URL::to("mod")}}" method="POST" role="form">
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="name">Name</label>
								<input required data-minlength="5" type="text" class="form-control" id="name" name="name" placeholder="Enter your Mods name please" >
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="category">Category</label>
								<select required name="category" id="category" class="form-control">
									<option>Please Choose ...</option>
									@foreach(Config::get("synopsis.categories") as $val=>$category)
									<option value="{{$val}}">{{$category}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="tags">Tags</label>
								<input required type="text" data-role="tagsinput" id="tags" name="tags">
								<span class="help-block">Tags are seperated by <kbd>enter</kbd></span>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label for="author">Author(s)</label>
								<input required type="text" data-role="tagsinput" id="author" name="author">
								<span class="help-block">Authors are seperated by <kbd>enter</kbd></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label for="description">Description</label>
								<textarea required data-minlength="10" id="description" name="description" class="form-control" rows="5"></textarea>
								<span class="help-block with-errors"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>