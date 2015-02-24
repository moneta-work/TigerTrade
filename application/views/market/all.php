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
			<a href="<?php echo base_url('/market/all') ?>"><b>all</b></a><br><br>
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
			<!--
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>Ad_ID</th>
						<th>Title</th>
						<th>Description</th>
						<th>Price</th>
						<th>User_ID</th>
						<th>Category_ID</th>
						<th>Subcategory_ID</th>
					</tr>
					<?php foreach ($ads->result() as $row) { ?>
					<tr>
						<td><?php echo $row->ad_id; ?></td>
						<td><?php echo $row->title; ?></td>
						<td><?php echo $row->description; ?></td>
						<td><?php echo $row->price; ?></td>
						<td><?php echo $row->user_id; ?></td>
						<td><?php echo $row->category_id; ?></td>
						<td><?php echo $row->subcategory_id; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
			-->
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