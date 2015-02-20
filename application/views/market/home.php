<div class="container padding-top-20">
	<div class="row">
		<div class="col-xs-2 col-md-1">
			<div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
		</div>
		<div class="col-xs-10 col-md-11">
			<h1 class="">Market Index</h1>
		</div>
	</div>
	
	<hr>
	
	<?php echo $data['categories']; ?>
	
	<p>Main page for categories.</p>
	<br>
	<p>Form for new ad: <a href="<?php echo base_url('/ad/new_ad') ?>">Place an Ad</a></p>
	<p>Form for new offer: <a href="<?php echo base_url('/ad/make_offer') ?>">Make an Offer</a></p>
	<p>Form to respond to an offer: <a href="<?php echo base_url('/ad/review_offer') ?>">Review an Offer</a></p>
	<p>Form for new category: <a href="<?php echo base_url('/market/new_category') ?>">Create a Category</a></p>
	<p>Form for new subcategory: <a href="<?php echo base_url('/market/new_subcategory') ?>">Create a Subcategory</a></p>
</div>