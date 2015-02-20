<div class="container">

	<?php isset($created) {?>
	    <div class="alert alert-success">
	        <a href="#" class="close" data-dismiss="alert">&times;</a>
	        <strong>Success!</strong> Your ad has been created.
	    </div>
    <?php }?>
    <?php isset($error) {?>
	    <div class="alert alert-error">
	        <a href="#" class="close" data-dismiss="alert">&times;</a>
	        <strong>Error!</strong> Your ad was not created, something went wrong.
	    </div>
    <?php }?>

	<?php echo form_open("ad/create", array('class' => 'form-horizontal', 'id' => 'ad-form'));?>
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
				<input type="text" class="form-control" name="title" id="title" placeholder="..." onkeyup="document.getElementById('preview_title').innerHTML = this.value">
			</div>
		</div>
		<div class="form-group">
			<label for="price" class="col-sm-2 control-label label-20">Price</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="price" id="price" placeholder="0.00" onkeyup="document.getElementById('preview_price').innerHTML = this.value" onkeypress="return isNumber(event)">
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="col-sm-2 control-label label-20">Description</label>
			<div class="col-sm-10">
				<textarea type="text" class="form-control description-box" name="description" id="description" onkeyup="document.getElementById('preview_message').innerHTML = this.value" rows="5"></textarea>
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
	
	<hr>
	
	<div class="row">
		<label class="col-sm-2 control-label label-20">Preview</label>
		<div class="col-sm-10">
			<h2 id="preview_title">Title</h2>
			<h3 style="display: inline;">$</h3><h3 id="preview_price" style="display: inline;">Price</h3>
			<p style="padding-top: 10px;" id="preview_message">Message</p>
		</div>
	</div>
	<?php echo form_close();?>
</div>