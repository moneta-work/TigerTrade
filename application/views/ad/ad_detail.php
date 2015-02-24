<div class="container padding-top-20">
	<div class="row">
		<div class="col-xs-2 col-md-1">
			<div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
		</div>
		<div class="col-xs-10 col-md-11">
			<h1 class=""><?php echo $ad->title; ?></h1>
		</div>
	</div>
	
	<hr>
	<div class="row text-center">
		<div class="btn-group">
			<a class="btn btn-default" href="<?php echo base_url('/ad/new_ad') ?>">Place an Ad</a>
			<a class="btn btn-default" href="<?php echo base_url('/ad/make_offer') ?>">Make an Offer</a>
			<a class="btn btn-default" href="<?php echo base_url('/ad/review_offer') ?>">Review an Offer</a>
			<a class="btn btn-default" href="<?php echo base_url('/market/new_category') ?>">Create a Category</a>
			<a class="btn btn-default" href="<?php echo base_url('/ad/new_subcategory') ?>">Create a Subcategory</a>
		</div>
	</div>
	
	<h2><?php echo $ad->price; ?></h2>
	<p><?php echo $ad->description; ?></p>
</div>