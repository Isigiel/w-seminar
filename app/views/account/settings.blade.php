<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1><i class="fa fa-twitter"></i>&nbsp;Twitter:&nbsp;<a id="twitter" data-type="text" data-pk="{{$user->id}}" data-url="{{URL::to("account/twitter")}}" data-title="Enter your Twitter-Username">{{$user->twitter}}</a></h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1><i class="fa fa-wrench"></i>&nbsp;Minecraft:&nbsp;<a id="minecraft" data-type="text" data-pk="{{$user->id}}" data-url="{{URL::to("account/minecraft")}}" data-title="Enter your Minecraft-Username">{{$user->mc_name}}</a></h1>
		<br><br><br>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1><i class="fa fa-key"></i>&nbsp;Change Password</h1>
		<hr>
		<form data-toggle="validator" action="{{URL::to("account/change-password/$user[id]")}}" method="POST" class="form-inline" role="form">

			<div class="form-group">
				<label class="sr-only" for="cpass">Current password</label>
				<input required type="password" class="form-control" id="cpass" name="cpass" placeholder="current password">
				<span class="help-block with-errors"></span>
			</div>
			<div class="form-group">
				<label class="sr-only" for="password">New password</label>
				<input required data-minlength="5" type="password" class="form-control" id="npassword" name="password" placeholder="new password">
				<span class="help-block with-errors"></span>
			</div>
			<div class="form-group">
				<label class="sr-only" for="passwordc">Confirm new password</label>
				<input required data-match="#npassword" type="password" class="form-control" id="passwordc" name="passwordc" placeholder="confirm password">
				<span class="help-block with-errors"></span>
			</div>
			<button type="submit" class="pull-right btn btn-primary">Change!</button>
		</form>
	</div>
</div>

<script>

	$(document).ready(function() {
    	$('#twitter').editable();
    	$('#minecraft').editable();
});
</script>