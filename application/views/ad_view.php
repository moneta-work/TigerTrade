<div class="container padding-top-20">
	<div class="row">
		<div class="col-xs-1">
			<div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
		</div>
		<div class="col-xs-11">
			<h1 class="custom-h1">Ad Index</h1>
		</div>
	
	</div>
	<p>Will this be the controller for single ad views?</p>
	<a href="<?php echo base_url('/ad/new_ad') ?>">Place an Ad</a>
</div>

<style>

@media (max-width: 599px) {
	.custom-h1 {
		padding-left: 30px;
	}
}
@media (min-width: 600px) and (max-width: 699px) {
	.custom-h1 {
		padding-left: 20px;
	}
}
@media (min-width: 700px) and (max-width: 800px) {
	.custom-h1 {
		padding-left: 10px;
	}
}
</style>