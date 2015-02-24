<div class="container padding-top-20">
	<div class="row">
		<div class="col-xs-3 col-sm-2 text-center">
			<div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
		</div>
		<div class="col-xs-9 col-sm-10">
			<h1>Received Offers</h1>
		</div>
	</div>

	<hr>

	<p>You can see your received offers here!</p>
	<a class="btn btn-default" href="<?php echo base_url('/ad/review_offer') ?>">Review an Offer Form</a>
	
	<h2>Pending</h2>
	<table class="table table-hover">
		<tr>
			<th>Ad ID</th>
			<th>Buyer ID</th>
			<th>Seller ID</th>
			<th>Buyer Message</th>
			<th>Price</th>
			<th>Status</th>
		</tr>
		<?php foreach ($pending->result() as $row) { ?>
		<tr style="cursor: hand;" class='clickable-row' data-href='<?php echo base_url('/offers/review_offer/' . $row->offer_id) ?>'>
			<td><?php echo $row->ad_id; ?></td>
			<td><?php echo $row->buyer_id; ?></td>
			<td><?php echo $row->seller_id; ?></td>
			<td><?php echo $row->buyer_message; ?></td>
			<td><?php echo $row->price; ?></td>
			<td><?php echo $row->status; ?></td>
		</tr>
		<?php } ?>
	</table>

	<h2>Accepted</h2>
	<table class="table">
		<tr>
			<th>Ad ID</th>
			<th>Buyer ID</th>
			<th>Seller ID</th>
			<th>Buyer Message</th>
			<th>Seller Response</th>
			<th>Status</th>
		</tr>
		<?php foreach ($accepted->result() as $row) { ?>
		<tr>
			<td><?php echo $row->ad_id; ?></td>
			<td><?php echo $row->buyer_id; ?></td>
			<td><?php echo $row->seller_id; ?></td>
			<td><?php echo $row->buyer_message; ?></td>
			<td><?php echo $row->seller_response; ?></td>
			<td><?php echo $row->status; ?></td>
		</tr>
		<?php } ?>
	</table>
	
	<h2>Declined</h2>
	<table class="table">
		<tr>
			<th>Ad ID</th>
			<th>Buyer ID</th>
			<th>Seller ID</th>
			<th>Buyer Message</th>
			<th>Seller Response</th>
			<th>Status</th>
		</tr>
		<?php foreach ($declined->result() as $row) { ?>
		<tr>
			<td><?php echo $row->ad_id; ?></td>
			<td><?php echo $row->buyer_id; ?></td>
			<td><?php echo $row->seller_id; ?></td>
			<td><?php echo $row->buyer_message; ?></td>
			<td><?php echo $row->seller_response; ?></td>
			<td><?php echo $row->status; ?></td>
		</tr>
		<?php } ?>
	</table>
</div>