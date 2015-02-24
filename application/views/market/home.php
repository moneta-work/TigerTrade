<div class="container padding-top-20">
	<div class="row">
		<div class="col-xs-2 col-md-1">
			<div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
		</div>
		<div class="col-xs-10 col-md-11">
			<h1 class="">All Ads</h1>
		</div>
	</div>
	
	<hr>
	
	<div class="row">
		<div class="col-xs-3 col-sm-2">
			<a href="<?php echo base_url('/market') ?>"><b>all</b></a><br><br>
			<?php foreach ($categories->result() as $category) { ?>
			    <a href="<?php echo base_url('/market/category/' . $category->category_id); ?>"><b><?php echo $category->name; ?></b></a><br>
		    	<?php foreach ($subcategories->result() as $subcategory) {
		    		if ($subcategory->category_id == $category->category_id) { ?>
					    <a href="<?php echo base_url('/market/subcategory/' . $subcategory->subcategory_id); ?>"><?php echo $subcategory->name; ?></a><br>
					<?php } ?>
		    	<?php } ?>
		    	<br>
			<?php } ?>
		</div>
		
		<div class="col-xs-9 col-sm-10">
			<div class="row">
				<div class="alert alert-info row">
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn btn-default" href="<?php echo base_url('/ad/new_ad') ?>">Place an Ad</button>
						<button type="button" class="btn btn-default">Make an Offer</button>
						<button type="button" class="btn btn-default">Review an Offer</button>
						<button type="button" class="btn btn-default">Create a Category</button>
						<button type="button" class="btn btn-default">Create a Subcategory</button>
					</div>
					<p>Form for new ad: <a href="<?php echo base_url('/ad/new_ad') ?>">Place an Ad</a></p>
					<p>Form for new offer: <a href="<?php echo base_url('/ad/make_offer') ?>">Make an Offer</a></p>
					<p>Form to respond to an offer: <a href="<?php echo base_url('/ad/review_offer') ?>">Review an Offer</a></p>
					<p>Form for new category: <a href="<?php echo base_url('/market/new_category') ?>">Create a Category</a></p>
					<p>Form for new subcategory: <a href="<?php echo base_url('/market/new_subcategory') ?>">Create a Subcategory</a></p>	
				</div>
				<?php foreach ($ads->result() as $row) { ?>
					<div class="col-sm-6 col-md-4" style="padding-bottom: 10px;">
						<a class="market-link" href="<?php echo base_url('/ad/details/' . $row->ad_id) ?>">
						<h3><?php echo $row->title; ?></h3>
							<p style="color: black;">Price: $<?php echo $row->price; ?></p>
							<img src="http://placehold.it/300x200" class="img-thumbnail" alt="Responsive image" style="width: 100%;">
						</a><br><br>
						<p>Description: <?php echo $row->description; ?></p>
						<p>Ad ID: <?php echo $row->ad_id; ?></p>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>