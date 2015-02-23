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
		<div class="col-xs-3">
			<a href="<?php echo base_url('/market/all') ?>">
			    <b>all</b>
			</a>
			<br>
		<?php foreach ($categories->result() as $category) { $count = 0; ?>
		    <a href="<?php echo base_url('/market/category/' . $category->category_id) ?>">
			    <b><?php echo $category->name ?></b>
			</a>
			<br>
	    	<?php foreach ($subcategories->result() as $subcategory) {
	    		if ($subcategory->category_id == $category->category_id) { 
		    		if ($count > 0) { ?><span class="hidden-xs"> / </span><?php }
		    		$count++;
	    		?>
				    <a href="<?php echo base_url('/market/subcategory/' . $subcategory->subcategory_id) ?>">
					    <?php echo $subcategory->name ?>
					</a>
				<?php } ?>
	    	<?php } ?>
	    	<br><br>
		<?php } ?>
		</div>
		<div class="col-xs-9">
			<p>Main page for categories.</p>
			<br>
			<p>Form for new ad: <a href="<?php echo base_url('/ad/new_ad') ?>">Place an Ad</a></p>
			<p>Form for new offer: <a href="<?php echo base_url('/ad/make_offer') ?>">Make an Offer</a></p>
			<p>Form to respond to an offer: <a href="<?php echo base_url('/ad/review_offer') ?>">Review an Offer</a></p>
			<p>Form for new category: <a href="<?php echo base_url('/market/new_category') ?>">Create a Category</a></p>
			<p>Form for new subcategory: <a href="<?php echo base_url('/market/new_subcategory') ?>">Create a Subcategory</a></p>	
		</div>
	</div>
</div>