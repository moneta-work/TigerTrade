<div class="container">

	<div class="row">
		<div class="col-xs-2 col-md-1">
			<div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
		</div>
		<div class="col-xs-10 col-md-11">
			<h1 class="">Sent Offers</h1>
		</div>
	</div>

	<hr>

	<p>You can see your sent offers here!</p>
	
	<h2>Pending</h2>
	<?php if ($pending===NULL) { ?>
		<table class="table">
			<tr>
				<th>Ad ID</th>
				<th>Buyer ID</th>
				<th>Seller ID</th>
				<th>Buyer Message</th>
				<th>Status</th>
			</tr>
			<?php foreach ($pending->result() as $row) { ?>
			<tr>
				<td><?php echo $row->ad_id; ?></td>
				<td><?php echo $row->buyer_id; ?></td>
				<td><?php echo $row->seller_id; ?></td>
				<td><?php echo $row->buyer_message; ?></td>
				<td><?php echo $row->status; ?></td>
			</tr>
			<?php } ?>
		</table>	
	<?php } ?>

	<h2>Accepted</h2>
	<?php if ($accepted===NULL) { ?>
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
	<?php } ?>
	
	<h2>Declined</h2>
	<?php if ($declined===NULL) { ?>
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
	<?php } ?>
</div>