<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form data-toggle="validator" action="{{URL::to("entry")}}" method="POST" role="form">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="form-group">
						<h1>New Entry</h1>
						<input required data-minlength="5" type="text" class="form-control" name="title" placeholder="Enter your Entrys title" >
					</div>
				</div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="form-group">
						<textarea required data-uk-markdownarea name="content"></textarea>
						<span class="help-block with-errors"></span>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<button type="submit" class="btn btn-primary btn-lg btn-block">POST</button>
				</div>
			</form>
		</div>
	</div>
