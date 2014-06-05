<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1>Your Blogentries</h1>
				<hr>
				@foreach($user->entries as $entry)
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h3>{{$entry->title}}
						<a data-method="DELETE" href="{{URL::to("entry/$entry->id")}}" class="pull-right btn btn-warning">Delete</a>
					</h3>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>


<script src="{{asset("assets/js/delete.js")}}"></script>