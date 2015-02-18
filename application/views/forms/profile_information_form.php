<div class="container">
	
	<div class="row">
		<div class="col-xs-2 col-md-1">
			<div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
		</div>
		<div class="col-xs-10 col-md-11">
			<h1 class="">Profile Information Form</h1>
		</div>
	</div>
	
	<hr>
		
	<form class="form-horizontal" id="ad-form" action="<?php echo base_url();?>user/update_profile_info"" method="POST">
	
		<div class="form-group">
			<label for="pawprint" class="col-sm-2 control-label label-20">Pawprint</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="pawprint" placeholder="" disabled>
			</div>
		</div>
	
		<div class="form-group">
			<label for="firstName" class="col-sm-2 control-label label-20">First Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="firstName" name="firstName" placeholder="">
			</div>
		</div>
		
		<div class="form-group">
			<label for="lastName" class="col-sm-2 control-label label-20">Last Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="lastName" placeholder="">
			</div>
		</div>
		
		<div class="form-group">
			<label for="primaryEmail" class="col-sm-2 control-label label-20">Primary Email</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="primaryEmail" placeholder="" disabled>
			</div>
		</div>
		
		<div class="form-group">
			<label for="optionalEmail" class="col-sm-2 control-label label-20">Secondary Email (Optional)</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="optionalEmail" >
			</div>
		</div>
		
		<div class="form-group">
			<label for="phoneNumber" class="col-sm-2 control-label label-20">Phone Number</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="phoneNumber" >
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
		
	</form>
	
</div>