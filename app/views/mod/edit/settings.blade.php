<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form data-toggle="validator" action="{{URL::to("mod/$mod->id")}}" method="POST" role="form">
		{{Form::hidden('_method', 'PUT')}}
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="name">Name</label>
						<input value="{{$mod->name}}" required data-minlength="5" type="text" class="form-control" id="name" name="name" placeholder="Enter your Mods name please" >
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="category">Category</label>
						<select required name="category" id="category" class="form-control">
							<option>Please Choose ...</option>
							@foreach(Config::get("synopsis.categories") as $val=>$category)
							<option @if($mod->category == $val)selected @endif value="{{$val}}">{{$category}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="tags">Tags</label>
						<input value="{{$mod->tags}}" required type="text" data-role="tagsinput" id="tags" name="tags">
						<span class="help-block">Tags are seperated by <kbd>enter</kbd></span>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="author">Author(s)</label>
						<input value="{{$mod->author}}" required type="text" data-role="tagsinput" id="author" name="author">
						<span class="help-block">Authors are seperated by <kbd>enter</kbd></span>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="form-group">
						<label for="description">Description</label>
						<textarea data-uk-markdownarea id="description" name="description">{{$mod->description}}</textarea>
						<span class="help-block with-errors"></span>
					</div>
				</div>
				{{Form::hidden('type', 'settings')}}
			</div>

			<button type="submit" class="btn btn-default">Submit</button>

		</form>
	</div>
</div>