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
	
	<div class="row">
		<div class="col-xs-12">
		<?php foreach ($subcategories->result() as $subcategory) { ?>
			<a href="<?php echo base_url('/market/subcategory/' . $subcategory->subcategory_id) ?>">
				<?php echo $subcategory->name ?>
			</a> / 
		<?php } ?>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-9 col-sm-10">
			<div class="row">
				<?php foreach ($ads->result() as $row) { ?>
					<div class="col-sm-6 col-md-4" style="padding-bottom: 10px;">
						<a class="market-link" href="<?php echo base_url('/ad/' . $row->ad_id) ?>">
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
