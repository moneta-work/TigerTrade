<div class="container">

	<h1>New Ad Form</h1>
	
	<form class="form-horizontal" id="ad-form">
		<div class="form-group">
			<label for="title" class="col-sm-2 control-label label-20">Title</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="title" placeholder="...">
			</div>
		</div>
		<div class="form-group">
			<label for="price" class="col-sm-2 control-label label-20">price</label>
			<div class="col-sm-10">
				<textbox type="text" class="form-control" id="price" placeholder="$0.00">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
					<label>
						<input type="checkbox"> Agree to Terms
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
	</form>

</div>

<style>

#ad-form {
	
}

.label-20 {
	font-size: 20px;
}

</style>