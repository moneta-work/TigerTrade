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
	
	<div class="row">
		<div class="col-xs-3">
		<?php foreach ($categories->result() as $category) { ?>
		    <b><a href="<?php echo base_url('/market/category/' . $category->category_id) ?>">
			    <?php echo $category->name ?>
			</a></b><br>
				<?php
		    		$total = count(get_object_vars($this->subcategory_model->get_subcategories($category->category_id)));
		    		var_dump($total);
		    		$count = 0;
	    		?>
	    	<?php foreach ($subcategories->result() as $subcategory) { ?>

	    		<?php if ($subcategory->category_id == $category->category_id) { ?>
	    			<?php $count++; ?>
				    <a href="<?php echo base_url('/market/subcategory/' . $subcategory->category_id) ?>">
					    <?php echo $subcategory->name ?>
					</a><?php if ($count < $total) { ?> / <?php } ?>
				<?php } ?>
	    	<?php } ?>
	    	<br>
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