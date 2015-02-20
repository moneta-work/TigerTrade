<div class="container padding-top-20">
	<div class="row">
		<div class="col-xs-2 col-md-1">
			<div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
		</div>
		<div class="col-xs-10 col-md-11">
			<h1 class=""><?php echo ucfirst($category->name); ?></h1>
		</div>
	</div>
	
	<hr>
	
	<?php foreach ($subcategories->result() as $subcategory) { ?>
		<a href="<?php echo base_url('/market/subcategory/' . $subcategory->category_id) ?>">
			<?php echo $subcategory->name ?>
		</a>
	<?php } ?>
</div>
