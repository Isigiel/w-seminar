<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Version</th>
					<th>MC-Version</th>
					<th>Stability</th>
					<th>Downloads</th>
					<th>Link</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($mod->versions as $version)
				<tr>
					<td>{{$version["version"]}}</td>
					<td>{{$version["mc_version"]}}</td>
					<td>{{Get::stability($mod["stability"])}}</td>
					<td>{{$version["downloads"]}}</td>
					<td><a href="{{URL::to("version/$version[id]")}}">{{URL::to("version/$version[id]")}}</a></td>
					<td><a data-method="DELETE"  href="{{URL::to("version/$version[id]")}}" class="btn btn-sm btn-danger">Delete</a></td>
				</tr>
				@endforeach
				<tr>
					<form enctype="multipart/form-data" data-toggle="validator" action="{{URL::to("version")}}" method="POST" class="form-inline" role="form">
						<td><input required type="text" name="version" class="form-control" placeholder="Enter Version-number"></td>
						<td><select required name="mc_version" class="form-control">
							<option>Please Choose ...</option>
							@foreach(Config::get("synopsis.mc-versions") as $mc)
							<option value="{{$mc}}">{{$mc}}</option>
							@endforeach
						</select></td>
						<td><select required name="stability" class="form-control">
							<option>Please Choose ...</option>
							@foreach(Config::get("synopsis.stability") as $val=>$stability)
							<option value="{{$val}}">{{$stability}}</option>
							@endforeach
						</select></td>
						
						<td><input type="file" name="file" id="selectedFile" style="display: none;" onchange="get_filename(this);" >
						<input class="btn btn-primary" type="button" value="Browse..." onclick="document.getElementById('selectedFile').click();" ></td>
						<td><span class="text-primary" id="filename"></span></td>
						<td><button type="submit" class="btn btn-primary">Save</button></td>
						{{Form::hidden('mod_id', $mod->id)}}
					</form>
				</tr>
			</tbody>
		</table>
	</div>
</div>



<script>

function get_filename(obj) {

    var file = obj.value;
    $( "#filename" )
        .html(file);

}

</script>
<script src="{{asset("assets/js/delete.js")}}"></script>