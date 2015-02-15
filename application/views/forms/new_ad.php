<div class="container">
	
	<div class="row">
		<div class="col-xs-2 col-md-1">
			<div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
		</div>
		<div class="col-xs-10 col-md-11">
			<h1 class="">New Ad Form</h1>
		</div>
	</div>
	
	<hr>
		
	<form class="form-horizontal" id="ad-form">
		<div class="form-group">
			<label for="title" class="col-sm-2 control-label label-20">Title</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="title" placeholder="..." onkeyup="document.getElementById('preview_title').innerHTML = this.value">
			</div>
		</div>
		<div class="form-group">
			<label for="price" class="col-sm-2 control-label label-20">Price</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="price" placeholder="0.00" onkeyup="document.getElementById('preview_price').innerHTML = this.value" onkeypress="return isNumber(event)">
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="col-sm-2 control-label label-20">Description</label>
			<div class="col-sm-10">
				<textarea type="text" class="form-control description-box" id="description" onkeyup="document.getElementById('preview_message').innerHTML = this.value" rows="5"></textarea>
			</div>
		</div>
		
		<hr>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
					<label>
						<input type="checkbox" required="true"> <a href="<?php echo base_url('/content/terms') ?>">I Agree to the Terms & Conditions</a>
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
	
	<div class="row">
		<label class="col-sm-2 control-label label-20">Preview</label>
		<div class="col-sm-10">
			<h2 id="preview_title"></h2>
			<h3 style="display: inline;">$</h3><h3 id="preview_price" style="display: inline;"></h3>
			<p id="preview_message"></p>
		</div>
	</div>
</div>

<script type="javascript">
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
