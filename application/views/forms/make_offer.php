<div class="container">
	
	<div class="row">
		<div class="col-xs-2 col-sm-1">
			<div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
		</div>
		<div class="col-xs-10 col-sm-11">
			<h1 class="">Make Offer: LISTING_TITLE_HERE</h1>
		</div>
		<div class="clearfix visible-xs-block"></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-8">.col-md-4</div>
		<div class="col-md-4">.col-md-4</div>
	</div>



	<form class="form-horizontal" id="make-offer-form">
		<div class="form-group">
			<label for="price" class="col-sm-2 control-label label-20">Price</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="price" value="$PRICE_OF_ITEM">
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="col-sm-2 control-label label-20">Message</label>
			<div class="col-sm-10">
				<textarea type="text" class="form-control description-box" id="description" rows="5"></textarea>
				<p class="help-block">Write a message for the seller, including good times to meet.</p>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
					<label>
						<input type="checkbox" required="true"> <a href="<?php echo base_url('/content/terms') ?>">I Agree to the Terms & Conditions</a> and acknowledge that my contact information with be supplied to the seller in the event that they choose to accept this offer.
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