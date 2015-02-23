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
		<div class="col-xs-3">
		<?php foreach ($subcategories->result() as $subcategory) { ?>
			<a href="<?php echo base_url('/market/subcategory/' . $subcategory->subcategory_id) ?>">
				<?php echo $subcategory->name ?>
			</a><br>
		<?php } ?>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-9">
			<h2><?php echo ucfirst($category->name); ?> Ads</h2>
			<table class="table">
				<tr>
					<th>Ad ID</th>
					<th>Buyer ID</th>
					<th>Seller ID</th>
					<th>Buyer Message</th>
					<th>Price</th>
					<th>Status</th>
				</tr>
				<?php foreach ($pending->result() as $row) { ?>
				<tr>
					<td><?php echo $row->ad_id; ?></td>
					<td><?php echo $row->buyer_id; ?></td>
					<td><?php echo $row->seller_id; ?></td>
					<td><?php echo $row->buyer_message; ?></td>
					<td><?php echo $row->price; ?></td>
					<td><?php echo $row->status; ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
