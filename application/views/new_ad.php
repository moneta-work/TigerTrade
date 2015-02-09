<div class="container">
	
	<div class="col-sm-1">
		<div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
	</div>
	<div class="col-md-11">
		<h1>New Ad Form</h1>
	</div>
		
	<form class="form-horizontal" id="ad-form">
		<div class="form-group">
			<label for="title" class="col-sm-2 control-label label-20">Title</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="title" placeholder="...">
			</div>
		</div>
		<div class="form-group">
			<label for="price" class="col-sm-2 control-label label-20">price</label>
			<div class="col-sm-10">
				<textarea type="text" class="form-control description-box" id="price" rows="5"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
					<label>
						<input type="checkbox"> <a href="<?php echo base_url('/content/terms') ?>">I Agree to the Terms & Conditions</a>
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
	</form>

</div>

<style>

#ad-form {
	
}

.label-20 {
	font-size: 20px;
}

.description-box {
    resize: none;
}

</style>

<script>
function goBack() {
    window.history.back()
}
</script>