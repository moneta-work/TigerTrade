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
		</div>
	</div>
</div>